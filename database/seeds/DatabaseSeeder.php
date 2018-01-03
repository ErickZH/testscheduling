<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert(array(
    		array("name"=>"Claribel","email"=>"cpruce0@etsy.com","password"=>"0jwnGst89rRb"),
    		array("name"=>"Gertruda","email"=>"goxtiby1@altervista.org","password"=>"Mk0HSv"),
    		array("name"=>"Silvanus","email"=>"silson2@tripod.com","password"=>"9EgB0DO"),
    		array("name"=>"Netta","email"=>"npuig3@woothemes.com","password"=>"ZZr1S3TRL"),
    		array("name"=>"Renata","email"=>"rrohlfs4@virginia.edu","password"=>"bs76gdlgTO8"),
    		array("name"=>"Packston","email"=>"psiemon5@va.gov","password"=>"chuKBtgbq6"),
    		array("name"=>"Mia","email"=>"mbecket6@economist.com","password"=>"BbAOkxLncXl"),
    		array("name"=>"Seline","email"=>"snoen7@nih.gov","password"=>"bIBTHg1"),
    		array("name"=>"Garreth","email"=>"gtaffarello8@stanford.edu","password"=>"ayXSsqLpV"),
    		array("name"=>"Jud","email"=>"jgedling9@ucoz.ru","password"=>"H8TvpF8Ogpw")
    	));
    }
}
