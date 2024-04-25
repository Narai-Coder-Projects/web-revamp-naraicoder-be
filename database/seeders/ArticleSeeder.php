<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'user_id' => rand(1, 10),
                'title' => 'Article ' . $i,
                'slug' => 'article-' . $i,
                'content' => fake()->paragraphs(3, true),
                'image' => 'https://via.placeholder.com/640x480.png',
                'is_published' => rand(0, 1),
            ]);
        }
    }
}
