<?php

namespace Database\Seeders;

use App\Models\CommentReply;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            CommentReply::create([
                'user_id' => rand(1, 10),
                'comment_id' => rand(1, 10),
                'body' => fake()->paragraphs(1, true),
            ]);
        }
    }
}
