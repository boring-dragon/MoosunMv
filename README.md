
## Installation

	composer require jinas/moosun

## Packages used 
```
Guzzle
Goutte
```    

## Basic Usage Weather Data
> You can pass any station name available bellow to get the data

```
$rp = new MoosunMv('Gan');
echo $rp->stationname;
echo $rp->temperature;
``` 

## Basic Usage Satellite Image scraper

```
$image = new ImgScraper;

echo $image->satellite_image;
```

## Available Stations
```
Male
Hanimadhoo
Kahdhoo
Kaadehdhoo
Gan
```    

## Available Objects
* stationname
* hastide
* sunrise
* sunset
* moonrise
* moonset
* humidity
* temperature
* description
* dayicon
* nighticon
* rainamount
* wind
* sunshine

> Predicted data of tommorow

* first_date
* first_condition
* first_sea
* first_wind
* first_icon

 > Predicted data of day after tommorow

* second_date
* second_condition
* second_sea
* second_wind
* second_icon

> Predicted data of 3rd day

* third_date
* third_condition
* third_sea
* third_wind
* third_icon
