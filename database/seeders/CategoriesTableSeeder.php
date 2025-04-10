<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jp = Language::where('slug', 'japanese')->first();

        $jp->categories()->createMany([
            ['name' => 'Core Particles', 'slug' => 'core-particles'],
            ['name' => 'Additional Particles', 'slug' => 'additional-particles'],
            ['name' => 'Formal Verb Forms', 'slug' => 'formal-verb-forms'],
            ['name' => 'Casual Verb Forms', 'slug' => 'casual-verb-forms'],
            ['name' => 'Question Words', 'slug' => 'question-words'],
            ['name' => 'Copulas', 'slug' => 'copulas'],
        ]);
    }
}
