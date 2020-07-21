<?php

use Jinas\Moosun\ImgScraper;
use PHPUnit\Framework\TestCase;

class ImageScraperTest extends TestCase
{
    public function testImageScraperShouldReturnAValidUrl()
    {
        $scraper = new ImgScraper();

        $regex = "((https?|ftp)\:\/\/)?"; // SCHEME
        $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass
        $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP
        $regex .= "(\:[0-9]{2,5})?"; // Port
        $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path
        $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query
        $regex .= '(#[a-z_.-][a-z0-9+$_.-]*)?'; // Anchor

        $this->assertEquals(true, preg_match("/^$regex$/i", $scraper->satellite_image));
    }

    public function testImageScraperShouldReturnAValidJPGImage()
    {
        $scraper = new ImgScraper();
        $this->assertEquals(true, strpos($scraper->satellite_image, '.JPG'));
    }
}
