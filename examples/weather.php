<?php

require_once '../vendor/autoload.php';

use Jinas\Moosun\MoosunMv;

$rp = new MoosunMv('Gan');
echo $rp->stationname."\n";
echo $rp->temperature;
