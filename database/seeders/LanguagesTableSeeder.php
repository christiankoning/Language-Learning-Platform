<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'name' => 'Japanese',
            'slug' => 'japanese',
            'icon' => 'https://flagcdn.com/w40/jp.png',
        ]);
    }
}
