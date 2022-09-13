<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'folio 1040',
                'price' => '650,000',
                'category' => 'laptops',
                'description' => '4gb ram ,500gb ssd',
                'gallery' => 'https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c08177169.png'
            ],
            [
                'name' => 'folio 1040',
                'price' => '650,000',
                'category' => 'laptops',
                'description' => '4gb ram ,500gb ssd',
                'gallery' => 'https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c08177169.png'
            ],
            [
                'name' => 'envy x360',
                'price' => '2,200,000',
                'category' => 'laptops',
                'description' => '8gb ram ,500gb ssd',
                'gallery' => 'https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c07968696.png'
            ],
            [
                'name' => 'envy allin one',
                'price' => '650,000',
                'category' => 'laptops',
                'description' => '16gb ram ,500gb ssd',
                'gallery' => 'https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c08012247.png'
            ]
        ]);
    }
}
