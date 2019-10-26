<?php

namespace Jinas\Moosun;

use Goutte\Client;
use Jinas\Moosun\Interfaces\IImgScraper;
use Jinas\Moosun\Util;

class ImgScraper extends Util implements IImgScraper
{
    //storing the configuration data
    public static $items = array();

    protected $client;

    public $satellite_image;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client;

        $this->getData();
    }

    /**
     * getData
     *
     * @return void
     */
    protected function getData()
    {
        self::load('config');
        $crawler = $this->client->request('GET', self::$items['Scrap_Url']);
        $this->extractData($crawler);
    }
    /**
     * extractData
     *
     * @param  mixed $crawler
     *
     * @return void
     */
    protected function extractData($crawler)
    {
        $crawler->filter('.slides a img')->eq(0)->each(function ($node) {
            $this->satellite_image = $node->attr('src', "\n");
        });
    }
}
