<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $suppliers= [
            ['name' => 'John Doe', 'contact_email' => 'john.doe@example.com', 'contact_phone' => '123-456-7890', 'address' => '123 Main St, Anytown, USA'],
            ['name' => 'Jane Smith', 'contact_email' => 'jane.smith@example.com', 'contact_phone' => '098-765-4321', 'address' => '456 Oak Ave, Somewhere, USA'],
            ['name' => 'Michael Johnson', 'contact_email' => 'michael.johnson@example.com', 'contact_phone' => '555-123-4567', 'address' => '789 Pine Rd, Elsewhere, USA'],
            ['name' => 'Emily Davis', 'contact_email' => 'emily.davis@example.com', 'contact_phone' => '555-987-6543', 'address' => '321 Elm St, Nowhere, USA'],
            ['name' => 'David Wilson', 'contact_email' => 'david.wilson@example.com', 'contact_phone' => '555-555-5555', 'address' => '654 Maple Dr, Here, USA'],
            ['name' => 'Sarah Brown', 'contact_email' => 'sarah.brown@example.com', 'contact_phone' => '555-000-0000', 'address' => '987 Cedar Ln, There, USA'],
            ['name' => 'James Taylor', 'contact_email' => 'james.taylor@example.com']
        ];

        foreach ($suppliers as $supplier) {
            Supplier::updateOrCreate(['name' => $supplier['name']], $supplier);
        }
    }
}
