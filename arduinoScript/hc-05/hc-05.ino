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
int ledA = 5;
int ledB = 6;
int ledC = 9;

void setup()   
{  
    //Inicia a serial  
    Serial.begin(9600);  
    Serial.println("Digite os comandos AT :");  
    //Inicia a serial configurada nas portas 10 e 11
    mySerial.begin(38400);
    timer.begin(0);

    pinMode(A0,      INPUT);//entrada para o sensor max4466 (microfone)
    pinMode(arduOut, OUTPUT);

    pinMode(ledA, OUTPUT);
    pinMode(ledB, OUTPUT);
    pinMode(ledC, OUTPUT);

    //inicia o bluetooth e realiza a primeira procura
    mySerial.write("AT+INIT\r\n");
    delay(10);
    mySerial.write("AT+INQ\r\n");
    delay(10);
    
    Serial.println("BT INICIADO.");

    analogWrite(ledA,255);
    delay(1000);
    analogWrite(ledA,0);
    analogWrite(ledB,255);
    delay(1000);
    analogWrite(ledA,0);
    analogWrite(ledC,255);
    delay(1000);
    analogWrite(ledC, 0);
}  

void loop()  
{   
    if(power == 1){
        // envia o JSON para o ESP8266 ---------------------------------------------------------------------------------------------------------------------
        if(timer.onTimeout(5000)){
            char jsonChar[5000];
            root["db"] = dbTot / dbCont;
            root["hash"] = "5620D192FC2830F6541910BB3E89B292"; 
            root.printTo((char*)jsonChar, root.measureLength() + 1);
            //->essa chave do json representa uma camada de segurança. 
            //Cada robo terá seu hash e só conseguirá acessar a api se o 
            //hash estiver cadastrado no banco de dados.
            Serial.write(jsonChar);

            //RESETA O BUFFER DO JSON
            jsonBuffer.clear();  
            JsonObject& root = jsonBuffer.createObject();
            JsonArray& data = root.createNestedArray("users");
            mySerial.write("AT+INQC\r\n");
            delay(10);
            mySerial.write("AT+INQ\r\n");
            delay(10);

            dbTot = 0;
            dbCont = 0;
        }
        //-----------------------------------------------------------------------------------------------------------------------------------------------
        //envia para o arduino 2 -----------------------------------------------------------------------------------------------------------------
        if(decibel.onTimeout(500)){
            db = calculaDb(); 
            dbTot += db;
            dbCont ++;
            if(db >= 75){
              digitalWrite(arduOut, LOW);
              digitalWrite(ledA,HIGH);
              digitalWrite(ledB,HIGH);
              digitalWrite(ledC,HIGH);
            }else{
              digitalWrite(arduOut, HIGH);
              digitalWrite(ledA,LOW);
              digitalWrite(ledB,LOW);
              digitalWrite(ledC,LOW);
            }
        }
        //-----------------------------------------------------------------------------------------------------------------------------------------------
        //Le os dados do HC-05 --------------------------------------------------------------------------------------------------------------------------
        if (mySerial.available()) 
        {   
            while(mySerial.available()) 
            {   // While there is more to be read, keep reading.  
                command += (char)mySerial.read();
            }

            if(!command.indexOf("+INQ")){
                data.add(command.substring(5,30));
            }
            delay(10);
            command = ""; // No repeats 
        }
        //-----------------------------------------------------------------------------------------------------------------------------------------------
    }else{
        digitalWrite(arduOut, LOW);
        digitalWrite(ledA,LOW);
        digitalWrite(ledB,LOW);
        digitalWrite(ledC,LOW);
    }

    // recebe do esp se está ligado ou não
    if (Serial.available())
    {
        power = Serial.read() - 48;
    }
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
        sample = analogRead(0);
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

    double db = 13*log(volts/0.005012);
 
    return db;  
}
