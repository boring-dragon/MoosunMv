<?php

namespace Jinas\Moosun;

use Goutte\Client;
use Jinas\Moosun\Interfaces\IImgScraper;

class ImgScraper implements IImgScraper
{
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
    protected function getData() : void
    {
        $crawler = $this->client->request('GET', IImgScraper::Scrap_Url);
        $this->extractData($crawler);
    }
    /**
     * extractData
     *
     * @param  mixed $crawler
     *
     * @return void
     */
    protected function extractData($crawler) : void
    {
        $crawler->filter('.slides a img')->eq(0)->each(function ($node) {
            $this->satellite_image = $node->attr('src', "\n");
        });
    }
}
