<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// This class provides the Pick model plus some scoring functions
class Pick extends Model
{
    // Establish relationship to players
    public function player()
    {
        return $this->belongsTo('App\Player');
    }

    // Score each player, incorporating the bonus
    function score(&$players, $films)
    {
        foreach ($players as $pid => $p) {
            $score = $p->bonus;

            foreach ($p->picks as $pick) {
                foreach ($films as $fid => $f) {
                    if ($pick->film == $fid) {
                        $score += $f->points;
                    }
                }
            }

            $players[$pid]->score = $score;
        }
    }

    // Comparison method for usort()
    function scoreCmp($a, $b)
    {
        if ($a['score'] == $b['score']) {
            return 0;
        }
        return ($a['score'] < $b['score']) ? 1 : -1;
    }

}
