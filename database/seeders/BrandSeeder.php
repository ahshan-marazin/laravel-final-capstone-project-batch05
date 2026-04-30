<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple', 'description' => 'apple inc.'],
            ['name' => 'Samsung', 'description' => 'samsung'],
            ['name' => 'Sony', 'description' => 'sony'],
            ['name' => 'LG', 'description' => 'lg'],
            ['name' => 'Dell', 'description' => 'dell'],
            ['name' => 'HP', 'description' => 'hp'],
            ['name' => 'Lenovo', 'description' => 'lenovo'],
            ['name' => 'Asus', 'description' => 'asus'],
            ['name' => 'Acer', 'description' => 'acer'],
            ['name' => 'Microsoft', 'description' => 'microsoft'],
        ];

        foreach ($brands as $brand) {
            Brand::updateOrCreate(['name' => $brand['name']], $brand);
        }
    }
}
