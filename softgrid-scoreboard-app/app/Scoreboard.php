<?php

namespace App;

class Scoreboard
{
    private $players = [];
    private $scores = [];
    private $gamesPlayed = [];

    public function __construct($players)
    {
        $this->players = $players;

        // Initialize scores and games played for each player.
        foreach ($players as $player) {
            $this->scores[$player] = 0;
            $this->gamesPlayed[$player] = 0;
        }
    }

    public function recordResult($player, $score)
    {
        // Increment the player's score and games played.
        $this->scores[$player] += $score;
        $this->gamesPlayed[$player]++;
    }

    public function playerRank($rank)
    {
        // Sort players by score, games played, and initial order.
        usort($this->players, function ($a, $b) {
            if ($this->scores[$a] !== $this->scores[$b]) {
                return $this->scores[$b] - $this->scores[$a];
            } elseif ($this->gamesPlayed[$a] !== $this->gamesPlayed[$b]) {
                return $this->gamesPlayed[$a] - $this->gamesPlayed[$b];
            } else {
                return array_search($a, $this->players) - array_search($b, $this->players);
            }
        });

        // Get the player at the specified rank.
        return $this->players[$rank - 1];
    }
}

