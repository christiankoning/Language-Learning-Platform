<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::where('slug', 'core-particles')->firstOrFail();

        $particles = [
            ['kana' => 'は', 'romaji' => 'wa', 'meanings' => ['topic marker']],
            ['kana' => 'を', 'romaji' => 'o', 'meanings' => ['direct object']],
            ['kana' => 'に', 'romaji' => 'ni', 'meanings' => ['direction', 'time']],
            ['kana' => 'で', 'romaji' => 'de', 'meanings' => ['place of action', 'means']],
            ['kana' => 'と', 'romaji' => 'to', 'meanings' => ['and', 'with']],
            ['kana' => 'も', 'romaji' => 'mo', 'meanings' => ['also', 'too']],
            ['kana' => 'が', 'romaji' => 'ga', 'meanings' => ['subject', 'emphasis']],
            ['kana' => 'の', 'romaji' => 'no', 'meanings' => ["possession", "'s"]],
            ['kana' => 'から', 'romaji' => 'kara', 'meanings' => ['from', 'because']],
            ['kana' => 'まで', 'romaji' => 'made', 'meanings' => ['until', 'up to']],
        ];

        foreach ($particles as $particle) {
            // Recognition: kana → meaning(s)
            Item::create([
                'category_id' => $category->id,
                'prompt' => $particle['kana'],
                'answer' => $particle['meanings'][0],
                'romaji' => $particle['romaji'],
                'direction' => 'recognition',
                'type' => 'Core Particles',
                'extra_data' => count($particle['meanings']) > 1
                    ? json_encode(['alt_answers' => array_slice($particle['meanings'], 1)])
                    : null,
            ]);

            // Recall: meaning → kana
            Item::create([
                'category_id' => $category->id,
                'prompt' => $particle['meanings'][0],
                'answer' => $particle['kana'],
                'romaji' => $particle['romaji'],
                'direction' => 'recall',
                'type' => 'Core Particles',
                'extra_data' => count($particle['meanings']) > 1
                    ? json_encode(['alt_prompts' => array_slice($particle['meanings'], 1)])
                    : null,
            ]);
        }
    }
}
