<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Partner::create([
                'partner_name' => fake()->company,
                'image' => 'https://via.placeholder.com/640x480.png',
                'url' => 'https://www.' . fake()->domainName,
            ]);
        }
    }
}
