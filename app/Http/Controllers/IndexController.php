<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Player;
use App\Film;
use App\Category;
use App\Pick;

class IndexController extends Controller
{
    /**
     * Show the player standings for the selected year
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year = LAST_YEAR)
    {
        // If the year was selected in the form, use it
        $formYear = Input::get('year');
        if ($formYear) {
            $year = $formYear;
        }

        // Get players table with related data (e.g. picks)
        $playerObj = new Player($year);
        $players = $playerObj->getPlayers();

        // Get films table with related data (e.g. accumulated points per film)
        $filmObj = new Film($year);
        $films = $filmObj->getFilms();

        // Score the player picks
        $pickObj = new Pick();
        $pickObj->score($players, $films);

        // Convert the Laravel players object to an array for sorting by score.
        $pArray = $players->toArray();

        // Use an array to pass a class comparison function to usort
        usort($pArray, array($pickObj, 'scoreCmp'));

        // Pass the number of rounds for the rowspan
        $rounds = (count($pArray)) ? count($pArray[0]["picks"]) : 0;

        // Pass all data to the index view for display
        return view('index', ['pArray' => $pArray,
                              'rounds' => $rounds,
                              'films'  => $films,
                              'cats'   => Category::get(),
                              'year'   => $year]);
    }

}
