<?php
namespace Jinas\Moosun;
require '../vendor/autoload.php';

//"Gan", "kaadehdhoo", "Kahdhoo", "Hanimadhoo", "Male" are only available to pass
$rp = new MoosunMv('Gan');
echo $rp->stationname;
echo $rp->temperature;