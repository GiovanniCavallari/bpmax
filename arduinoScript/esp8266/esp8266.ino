#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
#include <ArduinoJson.h>
#include <SoftwareSerial.h>
#include <Timing.h>
Timing timer;

String json = "";
const char* ssid     = "GalaxySJ7";
const char* password = "joba1234";

const char* host = "http://bpmax.azurewebsites.net";
const int httpPort = 80;

void setup() {
    Serial.begin(9600);                                  //Serial connection
    WiFi.begin(ssid, password);   //WiFi connection

    Serial.println();
  
    Serial.println();
    Serial.print("Connecting to ");
    Serial.println(ssid);

    while (WiFi.status() != WL_CONNECTED) {
        delay(500);
        Serial.print(".");
    }

    Serial.println("");
    Serial.println("WiFi connected");  
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());
    timer.begin(0);  
}
 
void loop() {
    if(WiFi.status()== WL_CONNECTED){   //Check WiFi connection status
        HTTPClient http;    //Declare object of class HTTPClient
        if(Serial.available()){
        	//envia os dados recebidos do arduino 1 para o servidor
            String url = "/arduino";
            http.begin(host+url);      //Specify request destination
            http.addHeader("Content-Type", "application/json");  //Specify content-type header

            while(Serial.available()) 
            {   // While there is more to be read, keep reading.  
                json += (char)Serial.read();
            }
        
            int httpCode = http.POST(json);   //Send the request
            //recebe a resposta do servidor
            String payload = http.getString();                  //Get the response payload
            char response[10];
            payload.toCharArray(response, 10);
            //envia se está ligado ou não para o arduino 1
            Serial.write(response);
            http.end();  //Close connection
            json = ""; // No repeats  
        }else{
            if(timer.onTimeout(1000)){
            	//realiza uma requisição no banco a cada segundo para verificar se está ligado ou não.
                String url = "/power";
                http.begin(host+url);      //Specify request destination
                http.addHeader("Content-Type", "application/json");  //Specify content-type header

                json = "{\"hash\":\"5620D192FC2830F6541910BB3E89B292\"}";                
                int httpCode = http.POST(json);   //Send the request
                //resposta do servidor
                String payload = http.getString();                  //Get the response payload
                char response[10];
                payload.toCharArray(response, 10);
                //envia se está ligado ou não para o arduino 1
                Serial.write(response);
                http.end();  //Close connection
                json = ""; // No repeats  
            }
        }
    }else{
        Serial.println("Error in WiFi connection");   
    }
 
}
