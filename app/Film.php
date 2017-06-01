<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Film extends Model
{
    private $year;

    public function __construct($year = LAST_YEAR)
    {
        $this->year = $year;
    }

    // Establish nominations relationship
    public function nominations()
    {
        return $this->hasMany('App\Nomination', 'film');
    }

    // Return all films with their nominations, wins, and points.
    public function getFilms()
    {
        $films = $this->where('year', $this->year)->get();

        // Add additional fields to the query result
        foreach ($films as $fid => $f) {
            $films[$fid]["filmid"] = $f["id"];
            $films[$fid]["imdb"] = $f["imdb"];

            $films[$fid]["points"] = 0;
            foreach ($f->nominations as $n) {
                $cat = Category::where("id", $n["category"])->get();

                $films[$fid]["points"] += $cat[0]["nompoints"];
                if ("Y" == $n->winner) {
                    $films[$fid]["points"] += $cat[0]["winpoints"];
                }
            }
        }

        // Convert to sparse associative array to index by film ID later.
        $out = array();
        foreach ($films as $fid => $f) {
            $filmid = $f["filmid"];

            // This is no longer needed in the data as it will be the key.
            unset($f["filmid"]);

            $out += array($filmid => $f);
        }

        return $out;
    }
}
