<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder {

	private $players = 
'
	{
	  "players": [
	    {
	      "id": "2",
	      "name": "Chris",
	      "year": "2012",
	      "bonus": "0"
	    },
	    {
	      "id": "3",
	      "name": "Karen",
	      "year": "2012",
	      "bonus": "0"
	    },
	    {
	      "id": "4",
	      "name": "Ayla",
	      "year": "2012",
	      "bonus": "0"
	    },
	    {
	      "id": "5",
	      "name": "Will",
	      "year": "2012",
	      "bonus": "0"
	    },
	    {
	      "id": "6",
	      "name": "Sarah",
	      "year": "2012",
	      "bonus": "0"
	    },
	    {
	      "id": "7",
	      "name": "Doug",
	      "year": "2012",
	      "bonus": "0"
	    },
	    {
	      "id": "8",
	      "name": "Chris",
	      "year": "2013",
	      "bonus": "0"
	    },
	    {
	      "id": "9",
	      "name": "Karen",
	      "year": "2013",
	      "bonus": "0"
	    },
	    {
	      "id": "10",
	      "name": "Will",
	      "year": "2013",
	      "bonus": "5"
	    },
	    {
	      "id": "11",
	      "name": "Sarah",
	      "year": "2013",
	      "bonus": "3"
	    },
	    {
	      "id": "12",
	      "name": "Doug",
	      "year": "2013",
	      "bonus": "7"
	    },
	    {
	      "id": "13",
	      "name": "Jennifer",
	      "year": "2013",
	      "bonus": "8"
	    },
	    {
	      "id": "15",
	      "name": "Chris",
	      "year": "2014",
	      "bonus": "0"
	    },
	    {
	      "id": "16",
	      "name": "Karen",
	      "year": "2014",
	      "bonus": "0"
	    },
	    {
	      "id": "17",
	      "name": "Doug",
	      "year": "2014",
	      "bonus": "0"
	    },
	    {
	      "id": "18",
	      "name": "Jennifer",
	      "year": "2014",
	      "bonus": "0"
	    },
	    {
	      "id": "19",
	      "name": "Will",
	      "year": "2014",
	      "bonus": "0"
	    },
	    {
	      "id": "20",
	      "name": "Sarah",
	      "year": "2014",
	      "bonus": "0"
	    },
	    {
	      "id": "21",
	      "name": "Doug",
	      "year": "2015",
	      "bonus": "0"
	    },
	    {
	      "id": "22",
	      "name": "Chris",
	      "year": "2015",
	      "bonus": "0"
	    },
	    {
	      "id": "23",
	      "name": "Karen",
	      "year": "2015",
	      "bonus": "0"
	    },
	    {
	      "id": "24",
	      "name": "Jennifer",
	      "year": "2015",
	      "bonus": "0"
	    },
	    {
	      "id": "25",
	      "name": "Will",
	      "year": "2015",
	      "bonus": "0"
	    },
	    {
	      "id": "26",
	      "name": "Sarah",
	      "year": "2015",
	      "bonus": "0"
	    },
	    {
	      "id": "27",
	      "name": "Dennis",
	      "year": "2015",
	      "bonus": "0"
	    },
	    {
	      "id": "29",
	      "name": "Doug",
	      "year": "2016",
	      "bonus": "0"
	    },
	    {
	      "id": "31",
	      "name": "KarenChris",
	      "year": "2016",
	      "bonus": "0"
	    },
	    {
	      "id": "32",
	      "name": "Jennifer",
	      "year": "2016",
	      "bonus": "0"
	    },
	    {
	      "id": "33",
	      "name": "Will",
	      "year": "2016",
	      "bonus": "0"
	    },
	    {
	      "id": "34",
	      "name": "Sarah",
	      "year": "2016",
	      "bonus": "0"
	    },
	    {
	      "id": "35",
	      "name": "Dennis",
	      "year": "2016",
	      "bonus": "0"
	    },
	    {
	      "id": "36",
	      "name": "Lisa",
	      "year": "2016",
	      "bonus": "5"
	    }
	  ]
	}
';

        /**
         * Run the database seeds.
         *
         * @return void
         */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

                $players = json_decode($this->players);

		DB::table('players')->truncate();
    
                foreach ($players->players as $p) {
			DB::table('players')->insert(
			    array(
				'id'    => $p->id,
				'name'  => $p->name,
				'year'  => $p->year,
				'bonus' => $p->bonus
				)
			);
                }

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
