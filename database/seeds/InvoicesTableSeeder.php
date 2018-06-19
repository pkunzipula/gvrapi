<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,180) as $index)
        {
        	$price = $faker->randomFloat(2, 1, 129);
        	$quantity = $faker->numberBetween(1,4);
        	$total = money_format('%i',$price * $quantity * 1.0825);
        	App\Invoice::create([
        		'item' => $faker->words(2,true),
		        'description' => $faker->catchPhrase,
		        'price' => $price,
		        'quantity' => $quantity,
		        'total' => $total,
        	]);
        }
    }
}
