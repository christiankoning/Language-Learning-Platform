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
            ['name' => 'Topics', 'slug' => 'topics'],
        ]);

        $objects = $jp->categories()->create([
            'name' => 'Objects',
            'slug' => 'objects',
        ]);

        $objects->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Foods & Drinks', 'slug' => 'foods-and-drinks'],
            ['language_id' => $jp->id, 'name' => 'Shopping', 'slug' => 'shopping'],
            ['language_id' => $jp->id, 'name' => 'Konbini & Supermarket', 'slug' => 'konbini-and-supermarket'],
            ['language_id' => $jp->id, 'name' => 'Household & Toiletries', 'slug' => 'household-and-toiletries'],
            ['language_id' => $jp->id, 'name' => 'Tech & Tools', 'slug' => 'tech-and-tools'],
            ['language_id' => $jp->id, 'name' => 'Government/Admin/Paperwork', 'slug' => 'government-admin-paperwork'],
        ]);
    }
}
