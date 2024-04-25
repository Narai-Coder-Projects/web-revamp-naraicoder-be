<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Event::create([
                'user_id' => rand(1, 10),
                'title' => 'Event ' . $i,
                'slug' => 'event-' . $i,
                'description' => fake()->sentence(10, true),
                'image' => 'https://via.placeholder.com/640x480.png',
                'is_published' => rand(0, 1),
            ]);
        }
    }
}
