<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'name' => 'The Plague',
            'author' => 'Albert Camus',
            'genre' => 'Novel',
            'description' => 'The Plague is a novel by Albert Camus, published in 1947, that tells the story of a plague sweeping the French Algerian city of Oran.',
            'release_date' => now()
        ]);

    }
}
