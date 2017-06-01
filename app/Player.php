<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    private $year;

    public function __construct($year = LAST_YEAR)
    {
        $this->year = $year;
    }

    // Establish relationship to picks
    public function picks()
    {
        return $this->hasMany('App\Pick', 'player');
    }

    // Return all players with their picks
    public function getPlayers()
    {
        $players = $this->where('year', $this->year)->get();

        foreach ($players as $pid => $p) {
            $players[$pid]["picks"] = $p->picks()->orderBy('round')->get();    
        }

        return $players;
    }
}
