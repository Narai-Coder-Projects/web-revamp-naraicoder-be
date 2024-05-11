<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Member::create([
                'user_id' => rand(1, 100),
                'member_id' => rand(1, 100),
                'image' => 'asset/ImageProfil/4OU1aqMiOPMtLxPbRehDByucDWibjgIaAlxQgmf0.png',
                'full_name' => fake()->name,
                'phone_number' => fake()->phoneNumber,
                'place' => fake()->city,
                'date' => fake()->date,
                'wa_number' => fake()->phoneNumber,
                'last_education' => fake()->word,
                'field' => fake()->word,
                'profession' => fake()->word,
                'address' => fake()->address,
                'city_id' => rand(1, 10),
                'prov_id' => rand(1, 10),
                'from_where' => fake()->word,
            ]);
        }
    }

}
