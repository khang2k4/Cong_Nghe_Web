<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $medicineIds = DB::table('medicines')->pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            DB::table('sales')->insert([
                'medicines_id' => $faker->randomElement($medicineIds),
                'quantity' => $faker->numberBetween(1, 20),
                'sale_date' => $faker->dateTime,
                'customer_phone' => $faker->phoneNumber,
            ]);
        }
    }
}
