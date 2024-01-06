<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiServices
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(); 
    }

    public function getRandomDogImage()
    {
        $response = $this->client->request('GET', 'https://dog.ceo/api/breeds/image/random'); 
        return json_decode($response->getBody()->getContents());
    }
}
