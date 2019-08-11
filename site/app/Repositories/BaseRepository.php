<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class BaseRepository
{
    protected $baseUrl = 'https://api2.overtrack.gg/owl/clips?';
    protected $guzzle;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    protected function buildRequest(string $query): Request
    {
        $req = new Request(
            'GET',
            $this->baseUrl . $query,
            [
                'headers' => [
                    'User-Agent' => env('APP_USER_AGENT', 'owl-clips'),
                    'Accept' => 'application/json'
                ],
            ]
        );
        
        return $req;
    }
}
