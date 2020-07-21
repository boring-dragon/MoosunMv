<?php

namespace Jinas\Moosun\Interfaces;

interface IMoosunMv
{
    public const API_URL = 'http://www.meteorology.gov.mv/fetchweather/';

    /**
     * __construct.
     *
     * @param mixed $station
     *
     * @return void
     */
    public function __construct($station = 'Male');
}
