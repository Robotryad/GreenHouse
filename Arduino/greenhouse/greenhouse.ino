#include <OneWire.h>
#include <DHT.h>
#include <Wire.h>
#include <DallasTemperature.h>
#include <SD.h>
#include <iarduino_RTC.h>
#include <SPI.h>
#include <Ethernet.h>
#define oneWireBus 2
#define term_power 5
#define svet 12
#define obogrev 11
#define poliv 9
const int LIGHT = 300; //значение света для включения освещения
const int MOISTURE = 300; //значение влажности почвы для включения полива
const int HUMIDITY = 300; //значение влажности воздуха для включения
const int TEMPERATURE = 300; //значение температуры воздуха для включения подогрева воздуха
unsigned long int timeConn = millis();
char server[] = "site.ru";
int hour;
int minute;
int second;
int hourStartP;                                
int minuteStartP;
int secondStartP;
int hourFinalP;
int minuteFinalP;
int secondFinalP;
int hourStartS;                                
int minuteStartS;
int secondStartS;
int hourFinalS;
int minuteFinalS;
int secondFinalS;
int light; //значение яркости света
int moisture; //значение влажности почвы
float humidity; //значение влажности воздуха
int temperature; //значение температуры воздуха
int temp_soil; //значение температуры почвы
int Clock; //дата и время
bool PolivAuto = 1;
bool SvetAuto = 1;
DHT dht(8, DHT22); //датчик влажности и температуры воздуха к 8 пину
	long interval = 180000; 
	long previousMillis = 0;
	unsigned long currentMillis;
byte mac[] = { 
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; // Мак адрес
 
EthernetClient client;

OneWire oneWire(oneWireBus);
DallasTemperature sensors(&oneWire);

iarduino_RTC time(RTC_DS3231);

int TempSoil() {
  //ds18b20
  digitalWrite(term_power, HIGH);
  sensors.requestTemperatures();
  delay(500);
  sensors.requestTemperatures();
  int temp = round(float(sensors.getTempCByIndex(0)));
  digitalWrite(term_power, LOW);

  return temp;
}


int ReadTemperature() {
  float t = dht.readTemperature();
  int temp = round(t);
  return temp;
}

float ReadHumidity() {
  float h = dht.readHumidity();
  return h;
}

void OutputSerial(){
  Serial.print("Humidity ");  Serial.println(humidity);
  Serial.print("Temperature ");  Serial.println(temperature);
  Serial.print("Soil temp ");  Serial.println(temp_soil);
  Serial.print("Soil hum ");    Serial.println(moisture);
  Serial.print("Svet ");    Serial.println(light);
  }

void FileSD(float humidity_, int temperature_, int light_, int moisture_, int temp_soil_) {
  File dataFile = SD.open("log.txt", FILE_WRITE);
  if (dataFile) {
    dataFile.println(String(time.gettime("d.m H:i")) + "|" + String(humidity_) + "|" + String(temperature_) + "|" + String(light_) + "|" + String(moisture_) + "|" + String(temp_soil_));
    dataFile.close();
  }
}

void MoistureDelay() {
  if (moisture > MOISTURE) {
    digitalWrite(poliv, HIGH);
  } else {
    digitalWrite(poliv, LOW);
  }
}

void TempSoilDelay() {
if (temp_soil < 30) {
    digitalWrite(obogrev, HIGH);
  } else {
    digitalWrite(obogrev, LOW);
  }
}

void LightDelay() {
if (light > 300) {
    digitalWrite(svet, HIGH);
  } else {
    digitalWrite(svet, LOW);
  }
}

void HumidityDelay() {
if (humidity > 38) {
    digitalWrite(13, HIGH);
  } else {
    digitalWrite(13, LOW);
  }
}

void TemperatureDelay() {
if (temperature > 42) {
    digitalWrite(13, HIGH);
  } else {
    digitalWrite(13, LOW);
  }
}
void Poliv() {
if(hour == hourStartP) { 
  if(minute == minuteStartP) {
	  if(second == secondStartP) {
		  digitalWrite(poliv,HIGH);
  }
 }	
}
}
void PolivEnd() {
  if(hour == hourFinalP) { 
  if(minute == minuteFinalP) {
	  if(second == secondFinalP) {
		  digitalWrite(poliv,LOW);
		   }
	  }
  }
 }	
void Svet() {
if(hour == hourStartS) { 
  if(minute == minuteStartS) {
    if(second == secondStartS) {
      digitalWrite(svet,HIGH);
  }
 }  
}
}
void SvetEnd() {
  if(hour == hourFinalS) { 
  if(minute == minuteFinalS) {
    if(second == secondFinalS) {
      digitalWrite(svet,LOW);
       }
    }
  }
 }  
void sendData(float temperature, float humidity, int temp_soil, int moisture, int light, int hour, int minute, int second) {
  client.connect(server, 80);
  client.print( "GET /add.php?");
  client.print("id=");  // Специальный код, например asREb25C
  client.print("&");
  client.print("hours=");
  client.print(hour);
  client.print("&");
  client.print("minutes=");
  client.print(minute);
  client.print("&");
  client.print("seconds=");
  client.print(second);
  client.print("&");
  client.print("t=");
  client.print(temperature);
  client.print("&");
  client.print("h=");
  client.print(humidity);
  client.print("&");
  client.print("p=");
  client.print(temp_soil);
  client.print("&");
  client.print("s=");
  client.print(light);
  client.print("&");
  client.print("v=");
  client.print(moisture);
  client.println(" HTTP/1.1");
  client.print( "Host: " );
  client.println(server);
  client.println( "Connection: close" );
  client.println();
  client.println();
  client.stop();
  client.flush();
}
void setup() {
  dht.begin();
  sensors.begin();
  pinMode(poliv,OUTPUT);
  pinMode(obogrev, OUTPUT);
  pinMode(svet, OUTPUT);
  SD.begin(4);
  pinMode(term_power, OUTPUT);
  time.begin();
  time.settime(0, 44, 9, 19, 11, 17, 0); //   сек,  мин,  час, день месяца, месяц,  год, день недели
  Serial.begin(9600);
  Ethernet.begin(mac);
}

void loop() {
  time.gettime();
  hour = time.Hours;
  minute = time.minutes;
  second = time.seconds;
  temp_soil = TempSoil();
  light = analogRead(A0);
  moisture = analogRead(A1);
  humidity = ReadHumidity();
  temperature = ReadTemperature();
  currentMillis = millis();
  if(PolivAuto == 0) { 
  Poliv();
  PolivEnd();
  }
  else {
	  MoistureDelay();
  }
  if(SvetAuto == 0) { 
  Svet();
  SvetEnd();
  }
  else {
    LightDelay();
  }
  //char Clock = time.gettime("d.m.Y H:i:s");
  if (millis() - timeConn > 2000) {
    sendData(temperature,humidity,temp_soil,moisture,light,hour,minute,second);
    timeConn = millis();
  }
  OutputSerial();
  MoistureDelay();
  TempSoilDelay();
  LightDelay();
  HumidityDelay();
  TemperatureDelay();
  
   while (client.available())
{
char c = client.read();
char d = client.read();
if ( c=='1') {
  PolivAuto = 1;
  }
if (c=='0') {
    PolivAuto = 0;
    }
if (d=='1') {
  SvetAuto = 1;
  }
  if (d=='0') {
  SvetAuto = 0;
  }
}
}
