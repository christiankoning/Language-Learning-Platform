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

        $hiragana = $jp->categories()->create([
            'name' => 'Hiragana',
            'slug' => 'hiragana',
        ]);

        $hiragana->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Main Kana', 'slug' => 'hiragana-main-kana'],
            ['language_id' => $jp->id, 'name' => 'Dakuten Kana', 'slug' => 'hiragana-dakuten-kana'],
            ['language_id' => $jp->id, 'name' => 'Combination Kana', 'slug' => 'hiragana-combination-kana'],
            ['language_id' => $jp->id, 'name' => 'All Kana', 'slug' => 'hiragana-all-kana'],
        ]);

        $katakana = $jp->categories()->create([
            'name' => 'Katakana',
            'slug' => 'katakana',
        ]);

        $katakana->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Main Kana', 'slug' => 'katakana-main-kana'],
            ['language_id' => $jp->id, 'name' => 'Dakuten Kana', 'slug' => 'katakana-dakuten-kana'],
            ['language_id' => $jp->id, 'name' => 'Combination Kana', 'slug' => 'katakana-combination-kana'],
            ['language_id' => $jp->id, 'name' => 'All Kana', 'slug' => 'katakana-all-kana'],
        ]);

        $jp->categories()->createMany([
            ['name' => 'Core Particles', 'slug' => 'core-particles'],
            ['name' => 'Additional Particles', 'slug' => 'additional-particles'],
            ['name' => 'Formal Verb Forms', 'slug' => 'formal-verb-forms'],
            ['name' => 'Casual Verb Forms', 'slug' => 'casual-verb-forms'],
            ['name' => 'Question Words', 'slug' => 'question-words'],
            ['name' => 'Copulas', 'slug' => 'copulas'],
            ['name' => 'Topics', 'slug' => 'topics'],
        ]);

        $verbs = $jp->categories()->create([
            'name' => 'Verbs',
            'slug' => 'verbs',
        ]);

        $verbs->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'N5 Part 1', 'slug' => 'n5-part-1'],
            ['language_id' => $jp->id, 'name' => 'N5 Part 2', 'slug' => 'n5-part-2'],
            ['language_id' => $jp->id, 'name' => 'N4 Part 1', 'slug' => 'n4-part-1'],
            ['language_id' => $jp->id, 'name' => 'N4 Part 2', 'slug' => 'n4-part-2'],
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

        $counting = $jp->categories()->create([
            'name' => 'Counting',
            'slug' => 'counting',
        ]);

        $counting->children()->createMany([
            [
                'language_id' => $jp->id,
                'name' => 'Basic Numbers',
                'slug' => 'counting-numbers',
                'description' => 'Learn how to count from 1 to 100 in Japanese using basic numbers (いち、に、さん…). This subcategory includes all the core numerals needed for daily conversation and other counters.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'People',
                'slug' => 'counting-people',
                'description' => 'Covers the counter ～人 (にん/り) used for counting people. Includes common irregulars like ひとり (1 person) and ふたり (2 people).'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Age',
                'slug' => 'counting-age',
                'description' => 'Covers counting age using ～歳 (さい), including common irregulars such as 1 (いっさい) and 8 (はっさい).'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Hours',
                'slug' => 'counting-hours',
                'description' => 'Learn to count hours using ～時 (じ). Useful for telling time and durations, including shifts like 4時 (よじ).',
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Minutes',
                'slug' => 'counting-minutes',
                'description' => 'Covers minutes with ～分 (ふん／ぷん), and tricky pronunciations like 1分 (いっぷん), 3分 (さんぷん), etc.',
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Seconds',
                'slug' => 'counting-seconds',
                'description' => 'Learn how to count seconds using ～秒 (びょう), up to 60 seconds.',
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Days',
                'slug' => 'counting-days',
                'description' => 'Practice counting days with the counter ～日 (か/にち), including irregular forms from the 1st to the 10th and common numbers up to 30.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Months',
                'slug' => 'counting-months',
                'description' => 'Covers how to count months using ～か月 (かげつ), including 1 to 12 months and durations like "for 6 months".'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Years',
                'slug' => 'counting-years',
                'description' => 'Learn to count years using ～年 (ねん), from 1 to 10 and beyond, used for age, durations, and historical dates.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Times (Occurrences)',
                'slug' => 'counting-times',
                'description' => 'Covers the counter ～回 (かい), used for counting occurrences like "once", "twice", etc.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Abstract Things',
                'slug' => 'counting-abstract-things',
                'description' => 'Learn to count general or abstract objects using ～つ, especially useful for beginners. Covers 1–10 with irregular readings.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Flat Objects',
                'slug' => 'counting-flat-objects',
                'description' => 'Use the counter ～枚 (まい) for flat things like paper, tickets, and dishes. Covers 1 to 10 and larger numbers.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Long Objects',
                'slug' => 'counting-long-objects',
                'description' => 'Covers the counter ～本 (ほん) used for long cylindrical items such as pens, bottles, and chopsticks.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Small Animals',
                'slug' => 'counting-small-animals',
                'description' => 'Count small animals like cats and dogs using ～匹 (ひき), including pronunciation changes for numbers like 1, 3, and 6.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Big Animals',
                'slug' => 'counting-big-animals',
                'description' => 'Learn to count larger animals using ～頭 (とう), such as cows or horses.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Birds & Rabbits',
                'slug' => 'counting-birds-rabbits',
                'description' => 'Use the counter ～羽 (わ) for counting birds and rabbits. Covers 1 to 10 and common usage.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Floors/Levels',
                'slug' => 'counting-floors',
                'description' => 'Count building floors using ～階 (かい). Includes B1 (basement level) and floors up to 10.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Coins & Bills',
                'slug' => 'counting-coins-bills',
                'description' => 'Learn the names and readings of Japanese coins and bills such as 100円 and 1000円.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Prices',
                'slug' => 'counting-prices',
                'description' => 'Covers prices in Japanese, with common numbers and pronunciation patterns used in stores and menus.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Drinks (Cups/Glasses)',
                'slug' => 'counting-drinks',
                'description' => 'Learn to count cups and glasses of drinks using ～杯 (はい). Includes irregular forms like 1 (いっぱい) and 3 (さんばい).'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Round Objects',
                'slug' => 'counting-round-objects',
                'description' => 'Covers the counter ～個 (こ) used for small round objects like apples or balls. Includes irregular readings for certain numbers.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Multiples',
                'slug' => 'counting-multiples',
                'description' => 'Use the counter ～倍 (ばい) to express multiples such as "twice" or "three times". Helpful in comparisons and stats.'
            ],
            [
                'language_id' => $jp->id,
                'name' => 'Irregular Counters',
                'slug' => 'counting-irregular',
                'description' => 'Miscellaneous or irregular counters that don’t fit neatly in the other categories. Great for intermediate to advanced learners.'
            ],
        ]);
    }
}
