<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'iPhone 13','sku' => 'sku001','cost_price' => 799.99, 'description' => 'Apple smartphone', 'selling_price' => 999.99, 'category_id' => 1, 'brand_id' => 1],
            ['name' => 'Galaxy S21', 'sku' => 'sku002', 'cost_price' => 699.99, 'description' => 'Samsung smartphone', 'selling_price' => 899.99, 'category_id' => 1, 'brand_id' => 2],
            ['name' => 'PlayStation 5', 'sku' => 'sku003', 'cost_price' => 399.99, 'description' => 'Sony gaming console', 'selling_price' => 499.99, 'category_id' => 8, 'brand_id' => 3],
            ['name' => 'LG OLED TV', 'sku' => 'sku004', 'cost_price' => 1199.99, 'description' => 'LG television', 'selling_price' => 1499.99, 'category_id' => 6, 'brand_id' => 4],
            ['name' => 'Dell XPS 13', 'sku' => 'sku005', 'cost_price' => 999.99, 'description' => 'Dell laptop', 'selling_price' => 1199.99, 'category_id' => 2, 'brand_id' => 5],
            ['name' => 'HP Spectre x360', 'sku' => 'sku006', 'cost_price' => 1099.99, 'description' => 'HP laptop', 'selling_price' => 1299.99, 'category_id' => 2, 'brand_id' => 6],
            ['name' => 'Lenovo ThinkPad X1 Carbon', 'sku' => 'sku007', 'cost_price' => 1299.99, 'description' => 'Lenovo laptop', 'selling_price' => 1499.99, 'category_id' => 2, 'brand_id' => 7],
            ['name' => 'Asus ROG Zephyrus G14', 'sku' => 'sku008', 'cost_price' => 1199.99, 'description' => 'Asus gaming laptop', 'selling_price' => 1399.99, 'category_id' => 2, 'brand_id' => 8],
            ['name' => 'Acer Predator Helios 300', 'sku' => 'sku009', 'cost_price' => 899.99, 'description' => 'Acer gaming laptop', 'selling_price' => 1099.99, 'category_id' => 2, 'brand_id' => 9],
            ['name' => 'Microsoft Surface Pro 7', 'sku' => 'sku010', 'cost_price' => 749.99, 'description' => 'Microsoft tablet', 'selling_price' => 949.99, 'category_id' => 3, 'brand_id' => 10],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['sku' => $product['sku']], $product);
        }
    }
}
