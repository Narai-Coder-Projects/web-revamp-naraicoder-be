<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create(
            [
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nunc nec
                ultricies ultricies, nunc nunc ultricies ultricies, nunc nunc ultricies ultricies, nunc nunc ultricies
                wisi, nec ultricies ultricies, nunc nunc ultricies ultricies, nunc nunc ultricies ultricies, nunc nunc
                ultricies ultricies, nunc nunc ultricies ultricies, nunc nunc ultricies ultricies, nunc nunc ultricies'
            ]
            );
    }
}
