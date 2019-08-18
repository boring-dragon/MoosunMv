# MoosunMv
	Simple Interface to interact with maldives meteriology

## Installation

	composer require jinas/moosun

## Basic Usage
	>You can pass any station name available bellow to get the data

	$rp = new MoosunMv('Gan');
	echo $rp->stationname;
    echo $rp->temperature;

## Available Stations
	Male
	Hanimadhoo
	Kahdhoo
	Kaadehdhoo
	Gan
