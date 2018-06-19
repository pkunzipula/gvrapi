<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * @var array
	 */
	private $tables = [
		'customers',
		'invoices',
		//'products',
		//'member_types',
		//'member_statuses',
		'customer_invoice',
	];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->cleanDatabase();
        App\Customer::truncate();
        App\Invoice::truncate();
        DB::table('customer_invoice')->truncate();
        $this->call(CustomersTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(CustomerInvoiceTableSeeder::class);
    }

    private function cleanDatabase()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
    	foreach ($this->tables as $tableName)
    	{
    		DB::table($tableName)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
