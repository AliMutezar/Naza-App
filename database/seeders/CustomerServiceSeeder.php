<?php

namespace Database\Seeders;

use App\Models\CustomerService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CustomerService::factory(10)->create();
    }
}
