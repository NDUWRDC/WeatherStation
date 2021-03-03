# WeatherStation
The Water Research & Development Centre is implementing an automatic weather station at Lady Irene Campus, Ndejje University, Luweero, Uganda.

## Location
The station is located at [coordinates 0.60897/32.48098](https://www.openstreetmap.org/#map=19/0.60897/32.48098)
![](Images/map.png "Location 0.60897/32.48098")

## Measurements 
Temperature\
Relative humidity\
Atmospheric pressure\
Wind speed\
Wind direction\
Rain fall

## Data Access
Current readings will be accessible at the [centre's website](https://nduwrdc.org) and the [University's website](https://www.ndejjeuniversity.ac.ug/).

# Sensor data readout and storage 
The DHT11 sensor connects to the Atmega328 through pin 2 and the temperature and humidity.ino file picks the reading into the system. A database is created on the server to handle all the values as they come in. Template files to handle the values on the server are currently hosted on the [Safe Bugs Domain](https://www.safebugsug.com/weather-chart.php).\
## [Station Data](https://www.safebugsug.com/weather-data.php)
![data](https://user-images.githubusercontent.com/42169195/106977080-ace7d180-676a-11eb-9b4a-e54408b7de49.PNG)
## [Chart](https://www.safebugsug.com/weather-chart.php)
![weather chat](https://user-images.githubusercontent.com/42169195/106977132-c557ec00-676a-11eb-8065-3c3ac2a12751.PNG)

# Components used
* Atmega328 microcontroller 
* DHT11 Temperature and Relative Humidity Sensor Module for arduino	
* Arduino UNO R3 ATMEGA328P Micro controller board	
* ENC28J60 Ethernet LAN Network Module For Arduino	
* DS3231N AT24C32 IIC RTC Module Precision Clock Module for Arduino (no battery)
* Soldering Iron Stand	1
* BMP280 Pressure Sensor Module High Precision Atmospheric Replace BMP180
* CRYSTAL OSCILLATORS 16MHZ
* Ceramic capacitor 22pf
* Step down buck converter lm2596	1	
* 28 PIN DIP IC Socket Adapter	1
* 12V 2A UK Plug Adapter	1
* Header Pins Male Straight Double Row (Breakaway) connector	1	
* DC Jack female DC-005	1	KES 20.00
* Male-Female Jumper wires/connector 40pcs	1
* ATMEGA328P-PU Microcontrolle​r With ARDUINO UNO R3 Bootloader	1

* Weather Station Set
![Weather station set](https://cdn.sparkfun.com/r/500-500/assets/parts/1/4/5/3/9/15901-Weather_Meter-02.jpg)
  [Arduino Hookup Guide](https://learn.sparkfun.com/tutorials/arduino-weather-shield-hookup-guide-v12)\
  [Sensor Usage Notes Assembly p/n 80422](https://www.sparkfun.com/datasheets/Sensors/Weather/Weather%20Sensor%20Assembly..pdf)
  * [Tipping-rain-gauge](https://bc-robotics.com/shop/tipping-rain-gauge/)
  * [Wind Vane – Analog Direction Senso](https://bc-robotics.com/shop/wind-vane-analog-direction-sensor-bc-robotics/)
  * [Anemometer – Wind Speed Sensor](https://bc-robotics.com/shop/anemometer-wind-speed-sensor-2/)
  * [SparkFun Weather Shield](https://bc-robotics.com/shop/sparkfun-weather-shield-v2/)
  ![SparkFun Weather Shield](https://cdn.sparkfun.com/r/500-500/assets/parts/1/1/1/2/1/13674-01.jpg)    
