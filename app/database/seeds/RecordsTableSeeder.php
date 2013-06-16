<?php

class RecordsTableSeeder extends Seeder {

  public function run()
  {
  	// Uncomment the below to wipe the table clean before populating
  	// DB::table('records')->delete();

    $records = array(
      // Afghanistan
      array(
        'country_id' => 1,
        'year' => '2003',
        'gni' => 610,
        'population' => 28255719,
        'gdp' => 4589112904,
        'gdp_growth' => 8,
        'life_expectancy' => 46
      ),
      array(
        'country_id' => 1,
        'year' => '2004',
        'gni' => 620,
        'population' => 29068646,
        'gdp' => 5283562279,
        'gdp_growth' => 1,
        'life_expectancy' => 46
      ),
      array(
        'country_id' => 1,
        'year' => '2005',
        'gni' => 690,
        'population' => 29904962,
        'gdp' => 6269129359,
        'gdp_growth' => 11,
        'life_expectancy' => 47
      ),
      array(
        'country_id' => 1,
        'year' => '2006',
        'gni' => 730,
        'population' => 30751661,
        'gdp' => 7057055309,
        'gdp_growth' => 6,
        'life_expectancy' => 47
      ),
      array(
        'country_id' => 1,
        'year' => '2007',
        'gni' => 830,
        'population' => 31622333,
        'gdp' => 8720455003,
        'gdp_growth' => 14,
        'life_expectancy' => 47
      ),
      array(
        'country_id' => 1,
        'year' => '2008',
        'gni' => 860,
        'population' => 32517656,
        'gdp' => 10617347740,
        'gdp_growth' => 4,
        'life_expectancy' => 48
      ),
      array(
        'country_id' => 1,
        'year' => '2009',
        'gni' => 1020,
        'population' => 33438329,
        'gdp' => 12244505992,
        'gdp_growth' => 21,
        'life_expectancy' => 48
      ),
      array(
        'country_id' => 1,
        'year' => '2010',
        'gni' => 1080,
        'population' => 34385068,
        'gdp' => 15712654583,
        'gdp_growth' => 8,
        'life_expectancy' => 48
      ),
      array(
        'country_id' => 1,
        'year' => '2011',
        'gni' => 1140,
        'population' => 35320445,
        'gdp' => 19176772040,
        'gdp_growth' => 6,
        'life_expectancy' => 49
      ),
      // Cameroon
      array(
        'country_id' => 2,
        'year' => '2003',
        'gni' => 1170,
        'population' => 16783366,
        'gdp' => 13621809574,
        'gdp_growth' => 4,
        'life_expectancy' => 49
      ),
      array(
        'country_id' => 2,
        'year' => '2004',
        'gni' => 1870,
        'population' => 17165267,
        'gdp' => 15775356737,
        'gdp_growth' => 4,
        'life_expectancy' => 49
      ),
      array(
        'country_id' => 2,
        'year' => '2005',
        'gni' => 1930,
        'population' => 17553589,
        'gdp' => 16587921221,
        'gdp_growth' => 3,
        'life_expectancy' => 49
      ),
      array(
        'country_id' => 2,
        'year' => '2006',
        'gni' => 2040,
        'population' => 17948395,
        'gdp' => 17953103009,
        'gdp_growth' => 3,
        'life_expectancy' => 50
      ),
      array(
        'country_id' => 2,
        'year' => '2007',
        'gni' => 2100,
        'population' => 18350022,
        'gdp' => 20431779034,
        'gdp_growth' => 3,
        'life_expectancy' => 50
      ),
      array(
        'country_id' => 2,
        'year' => '2008',
        'gni' => 2170,
        'population' => 18758778,
        'gdp' => 23735537026,
        'gdp_growth' => 3,
        'life_expectancy' => 50
      ),
      array(
        'country_id' => 2,
        'year' => '2009',
        'gni' => 2220,
        'population' => 19175028,
        'gdp' => 22188223918,
        'gdp_growth' => 2,
        'life_expectancy' => 51
      ),
      array(
        'country_id' => 2,
        'year' => '2010',
        'gni' => 2240,
        'population' => 19598889,
        'gdp' => 22426024466,
        'gdp_growth' => 3,
        'life_expectancy' => 51
      ),
      array(
        'country_id' => 2,
        'year' => '2011',
        'gni' => 2330,
        'population' => 20030362,
        'gdp' => 25235747212,
        'gdp_growth' => 4,
        'life_expectancy' => 52
      ),
      // Germany
      array(
        'country_id' => 3,
        'year' => '2003',
        'gni' => 28120,
        'population' => 82534176,
        'gdp' => 2423814898420,
        'gdp_growth' => 0,
        'life_expectancy' => 78
      ),
      array(
        'country_id' => 3,
        'year' => '2004',
        'gni' => 29930,
        'population' => 82516260,
        'gdp' => 2726341472500,
        'gdp_growth' => 1,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 3,
        'year' => '2005',
        'gni' => 31470,
        'population' => 82469422,
        'gdp' => 2766253792966,
        'gdp_growth' => 1,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 3,
        'year' => '2006',
        'gni' => 34190,
        'population' => 82376451,
        'gdp' => 2902748698160,
        'gdp_growth' => 4,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 3,
        'year' => '2007',
        'gni' => 36150,
        'population' => 82266372,
        'gdp' => 3323807412152,
        'gdp_growth' => 3,
        'life_expectancy' => 80
      ),
      array(
        'country_id' => 3,
        'year' => '2008',
        'gni' => 37550,
        'population' => 82110097,
        'gdp' => 3623686234299,
        'gdp_growth' => 1,
        'life_expectancy' => 80
      ),
      array(
        'country_id' => 3,
        'year' => '2009',
        'gni' => 36500,
        'population' => 81902307,
        'gdp' => 3298635952562,
        'gdp_growth' => -5,
        'life_expectancy' => 80
      ),
      array(
        'country_id' => 3,
        'year' => '2010',
        'gni' => 38410,
        'population' => 81776930,
        'gdp' => 3284473684211,
        'gdp_growth' => 4,
        'life_expectancy' => 80
      ),
      array(
        'country_id' => 3,
        'year' => '2011',
        'gni' => 40190,
        'population' => 81797673,
        'gdp' => 3600833333333,
        'gdp_growth' => 3,
        'life_expectancy' => 81
      ),
      // Ghana
      array(
        'country_id' => 4,
        'year' => '2003',
        'gni' => 1040,
        'population' => 20610897,
        'gdp' => 7632720680,
        'gdp_growth' => 5,
        'life_expectancy' => 60
      ),
      array(
        'country_id' => 4,
        'year' => '2004',
        'gni' => 1110,
        'population' => 21119911,
        'gdp' => 8881419348,
        'gdp_growth' => 6,
        'life_expectancy' => 60
      ),
      array(
        'country_id' => 4,
        'year' => '2005',
        'gni' => 1190,
        'population' => 21639806,
        'gdp' => 10731883141,
        'gdp_growth' => 6,
        'life_expectancy' => 61
      ),
      array(
        'country_id' => 4,
        'year' => '2006',
        'gni' => 1290,
        'population' => 22170556,
        'gdp' => 20410257646,
        'gdp_growth' => 6,
        'life_expectancy' => 62
      ),
      array(
        'country_id' => 4,
        'year' => '2007',
        'gni' => 1380,
        'population' => 22712403,
        'gdp' => 24757642258,
        'gdp_growth' => 6,
        'life_expectancy' => 62
      ),
      array(
        'country_id' => 4,
        'year' => '2008',
        'gni' => 1490,
        'population' => 23264176,
        'gdp' => 28528046011,
        'gdp_growth' => 8,
        'life_expectancy' => 63
      ),
      array(
        'country_id' => 4,
        'year' => '2009',
        'gni' => 1540,
        'population' => 23824402,
        'gdp' => 25978537279,
        'gdp_growth' => 4,
        'life_expectancy' => 63
      ),
      array(
        'country_id' => 4,
        'year' => '2010',
        'gni' => 1610,
        'population' => 24391823,
        'gdp' => 32174839713,
        'gdp_growth' => 8,
        'life_expectancy' => 64
      ),
      array(
        'country_id' => 4,
        'year' => '2011',
        'gni' => 1810,
        'population' => 24965816,
        'gdp' => 39199656051,
        'gdp_growth' => 14,
        'life_expectancy' => 64
      ),
      // Lebanon
      array(
        'country_id' => 5,
        'year' => '2003',
        'gni' => 7100,
        'population' => 3935421,
        'gdp' => 20082918740,
        'gdp_growth' => 3,
        'life_expectancy' => 71
      ),
      array(
        'country_id' => 5,
        'year' => '2004',
        'gni' => 8970,
        'population' => 3998042,
        'gdp' => 21789054726,
        'gdp_growth' => 7,
        'life_expectancy' => 71
      ),
      array(
        'country_id' => 5,
        'year' => '2005',
        'gni' => 9510,
        'population' => 4052420,
        'gdp' => 21860696517,
        'gdp_growth' => 1,
        'life_expectancy' => 71
      ),
      array(
        'country_id' => 5,
        'year' => '2006',
        'gni' => 9940,
        'population' => 4097457,
        'gdp' => 22438474295,
        'gdp_growth' => 1,
        'life_expectancy' => 72
      ),
      array(
        'country_id' => 5,
        'year' => '2007',
        'gni' => 11120,
        'population' => 4134872,
        'gdp' => 25056716418,
        'gdp_growth' => 8,
        'life_expectancy' => 72
      ),
      array(
        'country_id' => 5,
        'year' => '2008',
        'gni' => 12150,
        'population' => 4166915,
        'gdp' => 30079601990,
        'gdp_growth' => 9,
        'life_expectancy' => 72
      ),
      array(
        'country_id' => 5,
        'year' => '2009',
        'gni' => 12980,
        'population' => 4196990,
        'gdp' => 34650746269,
        'gdp_growth' => 9,
        'life_expectancy' => 72
      ),
      array(
        'country_id' => 5,
        'year' => '2010',
        'gni' => 13790,
        'population' => 4227597,
        'gdp' => 37124378109,
        'gdp_growth' => 7,
        'life_expectancy' => 72
      ),
      array(
        'country_id' => 5,
        'year' => '2011',
        'gni' => 14470,
        'population' => 4259405,
        'gdp' => 40094328358,
        'gdp_growth' => 3,
        'life_expectancy' => 73
      ),
      // Mexico
      array(
        'country_id' => 6,
        'year' => '2003',
        'gni' => 10480,
        'population' => 103902569,
        'gdp' => 700324664927,
        'gdp_growth' => 1,
        'life_expectancy' => 75
      ),
      array(
        'country_id' => 6,
        'year' => '2004',
        'gni' => 11140,
        'population' => 105175967,
        'gdp' => 759777472170,
        'gdp_growth' => 4,
        'life_expectancy' => 75
      ),
      array(
        'country_id' => 6,
        'year' => '2005',
        'gni' => 11970,
        'population' => 106483757,
        'gdp' => 848947464609,
        'gdp_growth' => 3,
        'life_expectancy' => 75
      ),
      array(
        'country_id' => 6,
        'year' => '2006',
        'gni' => 13120,
        'population' => 107835259,
        'gdp' => 952276430547,
        'gdp_growth' => 5,
        'life_expectancy' => 76
      ),
      array(
        'country_id' => 6,
        'year' => '2007',
        'gni' => 13780,
        'population' => 109220753,
        'gdp' => 1035929522496,
        'gdp_growth' => 3,
        'life_expectancy' => 76
      ),
      array(
        'country_id' => 6,
        'year' => '2008',
        'gni' => 14500,
        'population' => 110627158,
        'gdp' => 1094480339422,
        'gdp_growth' => 1,
        'life_expectancy' => 76
      ),
      array(
        'country_id' => 6,
        'year' => '2009',
        'gni' => 14100,
        'population' => 112033369,
        'gdp' => 879703353505,
        'gdp_growth' => -6,
        'life_expectancy' => 76
      ),
      array(
        'country_id' => 6,
        'year' => '2010',
        'gni' => 14960,
        'population' => 113423047,
        'gdp' => 1035273542953,
        'gdp_growth' => 6,
        'life_expectancy' => 77
      ),
      array(
        'country_id' => 6,
        'year' => '2011',
        'gni' => 16720,
        'population' => 114793341,
        'gdp' => 1153343069401,
        'gdp_growth' => 4,
        'life_expectancy' => 77
      ),
      // United States
      array(
        'country_id' => 7,
        'year' => '2003',
        'gni' => 38400,
        'population' => 290107933,
        'gdp' => 11089300000000,
        'gdp_growth' => 3,
        'life_expectancy' => 77
      ),
      array(
        'country_id' => 7,
        'year' => '2004',
        'gni' => 40680,
        'population' => 292805298,
        'gdp' => 11797800000000,
        'gdp_growth' => 3,
        'life_expectancy' => 77
      ),
      array(
        'country_id' => 7,
        'year' => '2005',
        'gni' => 43170,
        'population' => 295516599,
        'gdp' => 12564300000000,
        'gdp_growth' => 3,
        'life_expectancy' => 77
      ),
      array(
        'country_id' => 7,
        'year' => '2006',
        'gni' => 45680,
        'population' => 298379912,
        'gdp' => 13314500000000,
        'gdp_growth' => 3,
        'life_expectancy' => 78
      ),
      array(
        'country_id' => 7,
        'year' => '2007',
        'gni' => 46800,
        'population' => 301231207,
        'gdp' => 13961800000000,
        'gdp_growth' => 2,
        'life_expectancy' => 78
      ),
      array(
        'country_id' => 7,
        'year' => '2008',
        'gni' => 47320,
        'population' => 304093966,
        'gdp' => 14219300000000,
        'gdp_growth' => 0,
        'life_expectancy' => 78
      ),
      array(
        'country_id' => 7,
        'year' => '2009',
        'gni' => 45390,
        'population' => 306771529,
        'gdp' => 13898300000000,
        'gdp_growth' => -4,
        'life_expectancy' => 78
      ),
      array(
        'country_id' => 7,
        'year' => '2010',
        'gni' => 47210,
        'population' => 309349689,
        'gdp' => 14419400000000,
        'gdp_growth' => 3,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 7,
        'year' => '2011',
        'gni' => 48820,
        'population' => 311591917,
        'gdp' => 14991300000000,
        'gdp_growth' => 2,
        'life_expectancy' => 79
      ),
      // United Kingdom
      array(
        'country_id' => 8,
        'year' => '2003',
        'gni' => 30150,
        'population' => 59566259,
        'gdp' => 1855666938776,
        'gdp_growth' => 4,
        'life_expectancy' => 78
      ),
      array(
        'country_id' => 8,
        'year' => '2004',
        'gni' => 32130,
        'population' => 59867866,
        'gdp' => 2196860009521,
        'gdp_growth' => 3,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 8,
        'year' => '2005',
        'gni' => 33490,
        'population' => 60224307,
        'gdp' => 2295844712163,
        'gdp_growth' => 3,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 8,
        'year' => '2006',
        'gni' => 35240,
        'population' => 60595632,
        'gdp' => 2452969436251,
        'gdp_growth' => 3,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 8,
        'year' => '2007',
        'gni' => 36310,
        'population' => 60986649,
        'gdp' => 2825526440057,
        'gdp_growth' => 4,
        'life_expectancy' => 79
      ),
      array(
        'country_id' => 8,
        'year' => '2008',
        'gni' => 36830,
        'population' => 61393521,
        'gdp' => 2648935779074,
        'gdp_growth' => -1,
        'life_expectancy' => 80
      ),
      array(
        'country_id' => 8,
        'year' => '2009',
        'gni' => 34810,
        'population' => 61811027,
        'gdp' => 2183862761501,
        'gdp_growth' => -4,
        'life_expectancy' => 80
      ),
      array(
        'country_id' => 8,
        'year' => '2010',
        'gni' => 35600,
        'population' => 62262786,
        'gdp' => 2256260000000,
        'gdp_growth' => 2,
        'life_expectancy' => 80
      ),
      array(
        'country_id' => 8,
        'year' => '2011',
        'gni' => 35950,
        'population' => 62744081,
        'gdp' => 2445408064516,
        'gdp_growth' => 1,
        'life_expectancy' => 81
      )
    );

    // Uncomment the below to run the seeder
    DB::table('records')->insert($records);
  }

}
