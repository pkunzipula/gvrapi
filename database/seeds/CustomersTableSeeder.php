<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach(range(1,30) as $index) {
	    	App\Customer::create([
	    		'first' => $faker->firstName,
	    		'last' => $faker->lastName,
	    		'birthday' => $faker->date('m-d-Y', $max = '-18 years'),
	    		'phone' => $faker->phoneNumber,
	    		'email' => $faker->email,
	    		'address' => $faker->streetAddress,
	    		'city' => $faker->city,
	    		'state' => $faker->state,
	    		'zip' => $faker->postcode,
	    	]);
	    }
    }
}
