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
		$startDate = new DateTime('2001-01-12');
		$endDate = new DateTime('2010-05-26');
		$oneDay = new DateInterval('P1D');
		try{
			
			while($startDate <= $endDate){
				$startDate->format('Y-m-d');
				DB::insert('insert into Weatherdata(date) values (?)', array($startDate));
				$startDate->add($oneDay);
			}
			

		}
		catch (Exception $e){
 			echo $e->getMessage();
 		}
					
	}

}
