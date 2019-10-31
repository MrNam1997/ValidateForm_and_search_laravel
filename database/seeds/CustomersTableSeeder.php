<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $customer = new \App\Customer();
            $customer->name = 'Mr.Nam';
            $customer->email = 'Mr.Nam@gamil.com';
            $customer->phone = '098 3223 232';
            $customer->address = 'Canada';
            $customer->birthday = '12/11/09';
            $customer->save();
        }
    }
}
