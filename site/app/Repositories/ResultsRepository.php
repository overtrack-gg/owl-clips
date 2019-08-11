<?php

namespace App\Repositories;

use App\Interfaces\ResultsRepositoryInterface;
use GuzzleHttp\ClientInterface;
use ErrorException;

class ResultsRepository extends BaseRepository implements ResultsRepositoryInterface
{

    protected $guzzle;

    public function __construct(ClientInterface $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function getResultsForPlayer(string $player): array
    {
        $req = $this->buildRequest('player=' . $player);
        $res = $this->guzzle->send($req);
        $data = json_decode($res->getBody()->getContents(), true);

        return $data;
    }

    public function getResultsForHero(string $hero): array
    {
        $req = $this->buildRequest('hero=' . $hero);
        $res = $this->guzzle->send($req);
        $data = json_decode($res->getBody()->getContents(), true);

        return $data;
    }
}
