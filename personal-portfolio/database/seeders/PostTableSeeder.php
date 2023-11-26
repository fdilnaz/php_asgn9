<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Sample Post 1',
            'description' => 'This is a sample post description.',
        ]);

        DB::table('posts')->insert([
            'title' => 'Sample Post 2',
            'description' => 'Another sample post description.',
        ]);
    }
}
