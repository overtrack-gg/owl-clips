<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ResultsRepositoryInterface;

class ResultsController extends Controller
{
    protected $resultsRepository;

    public function __construct(ResultsRepositoryInterface $resultsRepository)
    {
        $this->resultsRepository = $resultsRepository;
    }

    public function listByPlayer($player) 
    {
        $clips = $this->resultsRepository->getResultsForPlayer($player);
        return view(
            'results',
            [
                'clips' => $clips,
                'resultsFor' => $player,
            ]
        );
    }

    public function listByHero($hero)
    {
        $clips = $this->resultsRepository->getResultsForHero($hero);
        return view(
            'results',
            [
                'clips' => $clips,
                'resultsFor' => $hero,
            ]
        );
    }
}
