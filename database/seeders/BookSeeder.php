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
        /*DB::table('books')->insert([
            'name' => 'The Plague',
            'author' => 'Albert Camus',
            'genre' => 'Novel',
            'description' => 'The Plague is a novel by Albert Camus, published in 1947, that tells the story of a plague sweeping the French Algerian city of Oran.',
            'release_date' => now()
        ]);*/

        DB::table('books')->insert([
            'name' => 'King Stach\'s wild hunt',
            'author' => 'Uladzimir Karatkevich',
            'genre' => 'Fantasy',
            'description' => 'King Stakh\'s Wild Hunt tells the tale of Andrey Belaretsky, a young folklorist who finds himself stranded by a storm in the castle of Marsh Firs, the seat of the fading aristocratic Yanovsky family.',
            'release_date' => now()
        ]);

        DB::table('books')->insert([
            'name' => 'All Quiet on the Western Front',
            'author' => 'Erich Maria Remarque',
            'genre' => 'Novel',
            'description' => 'The book centers on Paul Bäumer, a German soldier on the Western Front during World War I.',
            'release_date' => now()
        ]);
    }
}
