<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Comment::create([
                'user_id' => rand(1, 10),
                'article_id' => rand(1, 10),
                'body' => fake()->paragraphs(1, true),
            ]);
        }
    }
}
