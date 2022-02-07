<?php

namespace App\Wordle;

class WordleGameSolver
{
    /** @var Game */
    private $game;

    public function start(Game $game)
    {
        $this->game = $game;

        dd(
            $this->game->guessRow('whack') // make guess that the word is 'whack'. returns validation Row::class object.
        );
    }
}
