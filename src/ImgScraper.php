<?php

namespace Jinas\Moosun;

use Goutte\Client;
use Jinas\Moosun\Interfaces\IImgScraper;

class ImgScraper implements IImgScraper
{
    protected $client;

    public $satellite_image;

    /**
     * __construct.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client();

        $this->getData();
    }

    /**
     * getData.
     *
     * This method is responsible for sending http get request to website to get he html content to scrap.
     *
     * @return void
     */
    protected function getData(): void
    {
        $crawler = $this->client->request('GET', IImgScraper::Scrap_Url);
        $this->extractData($crawler);
    }

    /**
     * extractData.
     *
     * @param mixed $crawler
     *
     * This method is responsible for scraping the last satellite image in the webpage
     *
     * @return void
     */
    protected function extractData($crawler): void
    {
        $crawler->filter('.slides a img')->eq(0)->each(function ($node) {
            $this->satellite_image = $node->attr('src', "\n");
        });
    }
}
