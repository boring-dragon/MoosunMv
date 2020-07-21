<?php

require_once '../vendor/autoload.php';

use Jinas\Moosun\ImgScraper;

$image = new ImgScraper();

echo $image->satellite_image;
