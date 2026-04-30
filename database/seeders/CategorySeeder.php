<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Smartphones', 'description' => 'smartphones'],
            ['name' => 'Laptops', 'description' => 'laptops'],
            ['name' => 'Tablets', 'description' => 'tablets'],
            ['name' => 'Headphones', 'description' => 'headphones'],
            ['name' => 'Cameras', 'description' => 'cameras'],
            ['name' => 'Televisions', 'description' => 'televisions'],
            ['name' => 'Wearables', 'description' => 'wearables'],
            ['name' => 'Gaming Consoles', 'description' => 'gaming consoles'],
            ['name' => 'Printers', 'description' => 'printers'],
            ['name' => 'Networking Devices', 'description' => 'networking devices'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['name' => $category['name']], $category);
        }   
    }
}
