<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            SocialMedia::create([
                'name' => fake()->company,
                'url' => 'https://www.' . fake()->domainName,
                'icon' => 'https://via.placeholder.com/640x480.png',
            ]);
        }
    }
}
