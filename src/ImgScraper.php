<?php

namespace Jinas\Moosun;

use Goutte\Client;

class ImgScraper {

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
        $crawler = $this->client->request('GET', 'http://www.meteorology.gov.mv/');
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