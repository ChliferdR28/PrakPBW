<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailCoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1;$i<=20;$i++)
        {
            DB::table('detailcoffee')->insert([
                'id_coffee' => 1,
                'qty' => $faker->randomDigitNotNull(),
                'tanggal_pembelian' => $faker->dateTime()
            ]);
        }
        for($i=1;$i<=20;$i++)
        {
            DB::table('detailcoffee')->insert([
                'id_coffee' => 2,
                'qty' => $faker->randomDigitNotNull(),
                'tanggal_pembelian' => $faker->dateTime()
            ]);
        }
        for($i=1;$i<=20;$i++)
        {
            DB::table('detailcoffee')->insert([
                'id_coffee' => 3,
                'qty' => $faker->randomDigitNotNull(),
                'tanggal_pembelian' => $faker->dateTime()
            ]);
        }
        for($i=1;$i<=20;$i++)
        {
            DB::table('detailcoffee')->insert([
                'id_coffee' => 4,
                'qty' => $faker->randomDigitNotNull(),
                'tanggal_pembelian' => $faker->dateTime()
            ]);
        }
        for($i=1;$i<=20;$i++)
        {
            DB::table('detailcoffee')->insert([
                'id_coffee' => 5,
                'qty' => $faker->randomDigitNotNull(),
                'tanggal_pembelian' => $faker->dateTime()
            ]);
        }
        for($i=1;$i<=20;$i++)
        {
            DB::table('detailcoffee')->insert([
                'id_coffee' => 6,
                'qty' => $faker->randomDigitNotNull(),
                'tanggal_pembelian' => $faker->dateTime()
            ]);
        }
    }
}
