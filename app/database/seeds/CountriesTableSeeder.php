<?php

class CountriesTableSeeder extends Seeder {

  public function run()
  {
  	// Uncomment the below to wipe the table clean before populating
    DB::table('countries')->delete();

    $countries = array(
      array('name' => 'Afghanistan'),
      array('name' => 'Cameroon'),
      array('name' => 'Germany'),
      array('name' => 'Ghana'),
      array('name' => 'Lebanon'),
      array('name' => 'Mexico'),
      array('name' => 'United States'),
      array('name' => 'United Kingdom')
    );

    // Uncomment the below to run the seeder
    DB::table('countries')->insert($countries);
  }

}
