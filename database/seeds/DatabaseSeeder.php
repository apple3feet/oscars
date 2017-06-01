<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CategoriesTableSeeder');
		$this->command->info('Categories table seeded!');

		$this->call('FilmsTableSeeder');
		$this->command->info('Films table seeded!');

		$this->call('NominationsTableSeeder');
		$this->command->info('Nominations table seeded!');

		$this->call('PicksTableSeeder');
		$this->command->info('Picks table seeded!');

		$this->call('PlayersTableSeeder');
		$this->command->info('Players table seeded!');
	}

}
