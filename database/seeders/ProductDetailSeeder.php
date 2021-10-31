<?php

namespace Database\Seeders;

use App\Models\ProductDetail;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 300; $i++) {
            ProductDetail::create(['product_id' => $i, 'description' => $faker->randomDigit]);
        }
    }
}
