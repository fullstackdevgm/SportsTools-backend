<?php

use Illuminate\Database\Seeder;
use App\Sport;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sports')->delete();

        Sport::create(array(
        	'sport_name' => 'American Football',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Baseball',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Basketball',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Cricket',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Field Hockey',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Ice Hockey',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Soccer',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Table Tennis',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Tennis',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Quidditch',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Rugby',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Volleyball',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Track - Running',
        	'main_sport_name' => null,
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Soccer 6*6',
        	'main_sport_name' => 'Soccer',
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Soccer 8*8',
        	'main_sport_name' => 'Soccer',
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));

        Sport::create(array(
        	'sport_name' => 'Soccer 4*4',
        	'main_sport_name' => 'Soccer',
        	'sport_description' => null,
        	'sports_modifier' => null,
        	'doc_link' => null,
        	'indoor_outdoor' => 'indoor/outdoor'
        ));
    }
}
