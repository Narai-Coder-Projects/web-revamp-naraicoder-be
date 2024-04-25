<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Event;
use App\Models\Partner;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AboutSeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            CommentReplySeeder::class,
            OrganizationSeeder::class,
            MemberSeeder::class,
            SocialMediaSeeder::class,
            VideoSeeder::class,
            EventSeeder::class,
            PartnerSeeder::class,

        ]);
    }
}
