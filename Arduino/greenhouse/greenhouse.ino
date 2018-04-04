#include <OneWire.h>
#include <DHT.h>
#include <Wire.h>
#include <DallasTemperature.h>
#include <SD.h>
#include <iarduino_RTC.h>
#include <SPI.h>
#include <Ethernet.h>

#define oneWireBus 2

#define PINTERMPOWER 5 // номер пина для включения датчика температуры
#define PINLIGHTPOWER 12 //номер пина для включения освещения

const int LIGHT = 300; //значение света для включения освещения
const int MOISTURE = 300; //значение влажности почвы для включения полива
const int HUMIDITY = 300; //значение влажности воздуха для включения
const int TEMPERATURE = 300; //значение температуры воздуха для включения подогрева воздуха

unsigned long int timeConn = millis();

char server[] = "site.ru";
int hour;
int minute;
int second;
int light; //значение яркости света
int moisture; //значение влажности почвы
float humidity; //значение влажности воздуха
int temperature; //значение температуры воздуха
int temp_soil; //значение температуры почвы
int Clock; //дата и время

DHT dht(8, DHT22); //датчик влажности и температуры воздуха к 8 пину

// Инициализация Ethernet-шилда
byte mac[] = { 
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; // Мак адрес 
EthernetClient client;

// Инициализация датчика температуры DS18B20
OneWire oneWire(oneWireBus);
DallasTemperature sensors(&oneWire);

// Инициализация часов RTC
iarduino_RTC time(RTC_DS3231);

int TempSoil() {
  //ds18b20
  digitalWrite(PINTERMPOWER, HIGH);
  sensors.requestTemperatures();
  delay(500);
  sensors.requestTemperatures();
  int temp = round(float(sensors.getTempCByIndex(0)));
  digitalWrite(PINTERMPOWER, LOW);

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
    digitalWrite(13, HIGH);
  } else {
    digitalWrite(13, LOW);
  }
}

void TempSoilDelay() {
if (temp_soil > TEMP_SOIL) {
    digitalWrite(13, HIGH);
  } else {
    digitalWrite(13, LOW);
  }
}

void LightDelay() {
if (light > 300) {
    digitalWrite(PINLIGHTPOWER, HIGH);
    Serial.println("svet");
  } else {
    digitalWrite(PINLIGHTPOWER, LOW);
  }
}

void HumidityDelay() {
if (humidity > HUMIDITY) {
    digitalWrite(13, HIGH);
  } else {
    digitalWrite(13, LOW);
  }
}

void TemperatureDelay() {
if (temperature > TEMPERATURE) {
    digitalWrite(13, HIGH);
  } else {
    digitalWrite(13, LOW);
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

  pinMode(PINLIGHTPOWER, OUTPUT);
  SD.begin(4);
  pinMode(PINTERMPOWER, OUTPUT);
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
}
