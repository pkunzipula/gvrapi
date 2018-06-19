<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
class CustomerInvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	$customerIds = App\Customer::pluck('id')->toArray();
    	$invoiceIds = App\Invoice::pluck('id')->toArray();
        foreach(range(1,180) as $index)
        {
        	DB::table('customer_invoice')->insert([
        		'customer_id' => $faker->randomElement($customerIds),
        		'invoice_id' => $faker->randomElement($invoiceIds),
        	]);
        }
    }
}
