<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$file = File::get('../../data/Environmental_Data_2001.txt');
		$jsonfile = json_decode($file);
	}

}
