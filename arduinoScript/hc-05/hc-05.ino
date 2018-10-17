//Carrega a biblioteca SoftwareSerial
#include <SoftwareSerial.h>
#include <ArduinoJson.h>
#include <Timing.h>
#include <math.h>            //Inclui biblioteca matemática

//Define os pinos para a serial   
SoftwareSerial mySerial(10, 11); // RX, TX

String command = "";
Timing timer;
Timing decibel;

int arduOut = 2; // realiza a comunicação entre os arduinos
int arduIn  = 3; 

//Calculo da média dos dbs no período da medição--------------------------------------------------------------
double dbTot = 0;
int dbCont = 0;
double db;
//------------------------------------------------------------------------------------------------------------

//calculo dos decibeis-----------------------------------------------------
const int sampleWindow = 50; // Sample window width in mS (50 mS = 20Hz)
unsigned int sample;
//-------------------------------------------------------------------------

//json utilizado para comunicação com o servidor-------------------------------------------------------
StaticJsonBuffer<200> jsonBuffer;  
JsonObject& root = jsonBuffer.createObject();
JsonArray& data = root.createNestedArray("users");  

//power -----------------------------------------------------
int power = 1;
//-----------------------------------------------------------

//LEDS 
int RED = 5;
int GREEN = 6;

void setup()   
{  
    //Inicia a serial  
    Serial.begin(9600);  
    Serial.println("Digite os comandos AT :");  
    //Inicia a serial configurada nas portas 10 e 11
    mySerial.begin(38400);
    timer.begin(0);

    pinMode(19,      INPUT);//entrada para o sensor max4466 (microfone)
    pinMode(arduOut, OUTPUT);
    pinMode(arduIn, INPUT);

    pinMode(GREEN, OUTPUT);
    pinMode(RED, OUTPUT);

    //inicia o bluetooth e realiza a primeira procura
    mySerial.write("AT+INIT\r\n");
    delay(10);
    mySerial.write("AT+INQ\r\n");
    delay(10);
    
    Serial.println("BT INICIADO.");
}  

void loop()  
{   
    if(digitalRead(arduIn) == 1){
        // envia o JSON para o ESP8266 ---------------------------------------------------------------------------------------------------------------------
        if(timer.onTimeout(500)){
            char jsonChar[5000];
            root["db"] = db = calculaDb();
            root["hash"] = "5620D192FC2830F6541910BB3E89B292"; 
            root.printTo((char*)jsonChar, root.measureLength() + 1);
            //->essa chave do json representa uma camada de segurança. 
            //Cada robo terá seu hash e só conseguirá acessar a api se o 
            //hash estiver cadastrado no banco de dados.
            Serial.write(jsonChar);

            if (db < 55){
              analogWrite(RED, 0);
              analogWrite(GREEN, 255);
            }else{
              analogWrite(RED, 255);
              analogWrite(GREEN, 0);
            }

            //RESETA O BUFFER DO JSON
            jsonBuffer.clear();  
            JsonObject& root = jsonBuffer.createObject();
            JsonArray& data = root.createNestedArray("users");
            mySerial.write("AT+INQC\r\n");
            delay(10);
            mySerial.write("AT+INQ\r\n");
            delay(10);
        }
        //Le os dados do /HC-05 --------------------------------------------------------------------------------------------------------------------------
        if (mySerial.available()) 
        {   
            while(mySerial.available()) 
            {   // While there is more to be read, keep reading.  
                command += (char)mySerial.read();
            }

            if(!command.indexOf("+INQ")){
              if(sizeof(data) < 5){
                data.add(command.substring(5,30));
              }
            }
            delay(10);
            command = ""; // No repeats 
        }
        //-----------------------------------------------------------------------------------------------------------------------------------------------
    }else{
        digitalWrite(GREEN,LOW);
        digitalWrite(RED,LOW);
    }

    // recebe do esp se está ligado ou não
//    if (Serial.available())
//    {
//        power = Serial.read() - 48;
//    }
}

double calculaDb(){
  //calcula os decibeis 
    unsigned long startMillis= millis();  // Start of sample window
    unsigned int peakToPeak = 0;   // peak-to-peak level
 
    unsigned int signalMax = 0;
    unsigned int signalMin = 1024;
 
    // collect data for 50 mS
    while (millis() - startMillis < sampleWindow)
    {
        sample = analogRead(19);
        if (sample < 1024)  // toss out spurious readings
        {
            if (sample > signalMax)
            {
                signalMax = sample;  // save just the max levels
            }
            else if (sample < signalMin)
            {
                signalMin = sample;  // save just the min levels
            }
        }
    }
    peakToPeak = signalMax - signalMin;  // max - min = peak-peak amplitude
    double volts = (peakToPeak * 5.0) / 1024;  // convert to volts
    double db = 20*log(volts/0.005012);
    return db;  
}
