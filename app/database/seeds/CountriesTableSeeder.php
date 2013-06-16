<?php

class CountriesTableSeeder extends Seeder {

  public function run()
  {
  	// Uncomment the below to wipe the table clean before populating
    DB::table('countries')->delete();

    $now = date('Y-m-d H:i:s');

    $countries = array(
      array('name' => 'Afghanistan', 'created_at' => $now, 'updated_at' => $now),
      array('name' => 'Cameroon', 'created_at' => $now, 'updated_at' => $now),
      array('name' => 'Germany', 'created_at' => $now, 'updated_at' => $now),
      array('name' => 'Ghana', 'created_at' => $now, 'updated_at' => $now),
      array('name' => 'Lebanon', 'created_at' => $now, 'updated_at' => $now),
      array('name' => 'Mexico', 'created_at' => $now, 'updated_at' => $now),
      array('name' => 'United States', 'created_at' => $now, 'updated_at' => $now),
      array('name' => 'United Kingdom', 'created_at' => $now, 'updated_at' => $now)
    );

    // Uncomment the below to run the seeder
    DB::table('countries')->insert($countries);
  }

}
