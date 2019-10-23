<?php

namespace Jinas\Moosun;

use GuzzleHttp\Client;

class Request
{

    public function __construct($url)
    {
        $client = new Client;

        return $client->request('GET', $url);
    }
}
