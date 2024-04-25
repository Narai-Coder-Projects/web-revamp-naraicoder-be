<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Organization::create([
                'name' => fake()->company,
                'position' => fake()->word,
                'image' => 'https://via.placeholder.com/640x480.png',
            ]);
        }
    }
}
