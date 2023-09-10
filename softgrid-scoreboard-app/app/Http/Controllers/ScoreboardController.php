<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scoreboard; // Import the Scoreboard class

class ScoreboardController extends Controller
{
    public function calculatePlayerRank()
    {
        // Create a Scoreboard instance and perform operations
        $table = new Scoreboard(['Mike', 'Chris', 'Arnold']);
        $table->recordResult('Mike', 2);
        $table->recordResult('Mike', 3);
        $table->recordResult('Arnold', 5);
        $table->recordResult('Chris', 5);

        // Calculate the player rank
        $rank = $table->playerRank(1);

        // Return the result
        return "The player at rank one is: $rank";
    }
}
