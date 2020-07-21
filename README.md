# :cyclone: MoosunMv

[![Latest Stable Version](https://poser.pugx.org/jinas/moosun/v/stable)](https://packagist.org/packages/jinas/moosun)
[![License](https://poser.pugx.org/jinas/moosun/license)](https://packagist.org/packages/jinas/moosun)
[![StyleCI](https://github.styleci.io/repos/203064341/shield?branch=master)](https://github.styleci.io/repos/203064341?branch=master)

## :battery: Installation

```shell
 composer require jinas/moosun
```

## :bulb: How does this work

Moosunmv library is a wrapper around the API of maldives meteorology. Library helps you to interact with the meteorology stations and get live weather data. The available station names are given below. The library also have a imgscraper class which can scrap the latest satellite image from the maldives meteorology website.

## Packages used

```cmd
Guzzle
Goutte
```

## Basic Usage Weather Data

> You can pass any station name available below to get the data

```php
$rp = new MoosunMv('Gan');
echo $rp->stationname;
echo $rp->temperature;
```

## Basic Usage Satellite Image scraper

```php
$image = new ImgScraper;

echo $image->satellite_image;
```

## Available Stations

- Male
- Hanimadhoo
- Kahdhoo
- Kaadehdhoo
- Gan

## Available Objects

- stationname
- hastide
- sunrise
- sunset
- moonrise
- moonset
- humidity
- temperature
- description
- dayicon
- nighticon
- rainamount
- wind
- sunshine-
- Predicted data of tommorow-
- first_date
- first_condition
- first_sea
- first_wind
- first_icon

 > Predicted data of day after tommorow

- second_date
- second_condition
- second_sea
- second_wind
- second_icon

> Predicted data of 3rd day

- third_date
- third_condition
- third_sea
- third_wind
- third_icon
