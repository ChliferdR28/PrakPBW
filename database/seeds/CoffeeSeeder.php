<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('coffee')->insert([
            [
                'nama' => 'Americano Ice',
                'harga' => 15000,
                'stok' => 20,
                'kategori' => 'coffee',
                'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
                'gambar' => 'https://img.freepik.com/free-photo/delicious-bubble-tea-still-life_23-2149870653.jpg?t=st=1714807627~exp=1714811227~hmac=86d8772dbd1d8cf72529505b7d8a8bd7ab477f102d1560854d79ef753582f4c7&w=740'
            ],
            [
                'nama' => 'Cappuccino',
                'harga' => 18000,
                'stok' => 50,
                'kategori' => 'coffee',
                'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
                'gambar' => 'https://img.freepik.com/free-photo/latte-art-coffee-cup-cafe-table_1150-12163.jpg?t=st=1714808685~exp=1714812285~hmac=92272ef9a1c5976adb940b4afd9fb2bd2b374fd0504bc64c5a76828ff3920442&w=1380'   
            ],
            [
                'nama' => 'Milk Coffee ORIGINAL',
                'harga' => 12000,
                'stok' => 80,
                'kategori' => 'coffee',
                'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
                'gambar' => 'https://img.freepik.com/free-photo/iced-latte-coffee_1203-8396.jpg?t=st=1714809030~exp=1714812630~hmac=b6122abcfb92bb6eabea833dc84e10a7e03e5e4859b57345f59c737d0805fd71&w=740'   
            ],
            [
                'nama' => 'Matcha',
                'harga' => 27000,
                'stok' => 60,
                'kategori' => 'noncoffee',
                'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
                'gambar' => 'https://img.freepik.com/free-photo/matcha-ice-green-tea-marble-floor-it-is-delicious-nutritious_1150-25576.jpg?t=st=1714809374~exp=1714812974~hmac=9e17ab933ac5ee97a0b93451e1805ca4b76dfdff7990113c1eb0831d1dcc898a&w=740'   
            ],
            [
                'nama' => 'Milk Tea',
                'harga' => 24000,
                'stok' => 45,
                'kategori' => 'noncoffee',
                'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
                'gambar' => 'https://img.freepik.com/free-photo/traditional-iced-milk-tea-red-tea-powder_1150-26447.jpg?t=st=1714809491~exp=1714813091~hmac=93a44e5ad20176bd2118dfdde6ba301ee4366103799946893b74c1427ee95636&w=740'   
            ],
            [
                'nama' => 'Banan Milk',
                'harga' => 26000,
                'stok' => 55,
                'kategori' => 'noncoffee',
                'deskripsi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book",
                'gambar' => 'https://img.freepik.com/free-photo/close-up-banana-shake_23-2151006048.jpg?t=st=1714809879~exp=1714813479~hmac=de8b6cfd07a6c1e3c15613feacb9e5c7b89fc747c70a6f6007dd137637b4eef0&w=740'   
            ],
        ]);

    }
}
