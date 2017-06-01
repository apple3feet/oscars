<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

	private $cats = 
'
	{
	  "categories": [
	    {
	      "id": "1",
	      "name": "Best Picture",
	      "nompoints": "3",
	      "winpoints": "15"
	    },
	    {
	      "id": "2",
	      "name": "Best Actor in a Leading Role",
	      "nompoints": "2",
	      "winpoints": "10"
	    },
	    {
	      "id": "3",
	      "name": "Best Actress in a Leading Role",
	      "nompoints": "2",
	      "winpoints": "10"
	    },
	    {
	      "id": "4",
	      "name": "Best Actress in a Supporting Role",
	      "nompoints": "2",
	      "winpoints": "10"
	    },
	    {
	      "id": "5",
	      "name": "Best Actor in a Supporting Role",
	      "nompoints": "2",
	      "winpoints": "10"
	    },
	    {
	      "id": "6",
	      "name": "Best Director",
	      "nompoints": "2",
	      "winpoints": "10"
	    },
	    {
	      "id": "7",
	      "name": "Best Original Screenplay",
	      "nompoints": "2",
	      "winpoints": "10"
	    },
	    {
	      "id": "8",
	      "name": "Best Adapted Screenplay",
	      "nompoints": "2",
	      "winpoints": "10"
	    },
	    {
	      "id": "9",
	      "name": "Best Animated Feature",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "10",
	      "name": "Best Animated Short Film",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "11",
	      "name": "Best Cinematography",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "12",
	      "name": "Best Costume Design",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "13",
	      "name": "Best Documentary Feature",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "14",
	      "name": "Best Documentary Short",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "15",
	      "name": "Best Film Editing",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "16",
	      "name": "Best Foreign Language Film",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "17",
	      "name": "Best Live Action Short Film",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "18",
	      "name": "Best Makeup and Hairstyling",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "19",
	      "name": "Best Original Score",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "20",
	      "name": "Best Original Song",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "21",
	      "name": "Best Production Design",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "22",
	      "name": "Best Sound Editing",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "23",
	      "name": "Best Sound Mixing",
	      "nompoints": "1",
	      "winpoints": "5"
	    },
	    {
	      "id": "24",
	      "name": "Best Visual Effects",
	      "nompoints": "1",
	      "winpoints": "5"
	    }
	  ]
	}
';

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

                $cats = json_decode($this->cats);

		DB::table('categories')->truncate();
    
                foreach ($cats->categories as $c) {
			DB::table('categories')->insert(
			    array(
				'id'        => $c->id,
				'name'      => $c->name,
				'nompoints' => $c->nompoints,
				'winpoints' => $c->winpoints
				)
			);
                }

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
