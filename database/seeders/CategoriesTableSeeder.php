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
            'description' => 'Practice the Hiragana writing system, one of the foundations of Japanese literacy. Ideal for beginners.'
        ]);

        $hiragana->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Main Kana', 'slug' => 'hiragana-main-kana', 'description' => 'Learn the 46 basic Hiragana characters used in most Japanese words.'],
            ['language_id' => $jp->id, 'name' => 'Dakuten Kana', 'slug' => 'hiragana-dakuten-kana', 'description' => 'Covers voiced versions of basic Hiragana by adding a dakuten mark.'],
            ['language_id' => $jp->id, 'name' => 'Combination Kana', 'slug' => 'hiragana-combination-kana', 'description' => 'Learn combined sounds like きゃ (kya), しゃ (sha), and ちゃ (cha).'],
            ['language_id' => $jp->id, 'name' => 'All Kana', 'slug' => 'hiragana-all-kana', 'description' => 'Test your knowledge across all Hiragana categories.']
        ]);

        $katakana = $jp->categories()->create([
            'name' => 'Katakana',
            'slug' => 'katakana',
            'description' => 'Study the Katakana syllabary, commonly used for foreign words, names, and technical terms.'
        ]);

        $katakana->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Main Kana', 'slug' => 'katakana-main-kana', 'description' => 'Master the 46 basic Katakana characters.'],
            ['language_id' => $jp->id, 'name' => 'Dakuten Kana', 'slug' => 'katakana-dakuten-kana', 'description' => 'Includes Katakana characters with voiced sound marks (dakuten).'],
            ['language_id' => $jp->id, 'name' => 'Combination Kana', 'slug' => 'katakana-combination-kana', 'description' => 'Learn combined Katakana like キャ (kya) and ジュ (ju).'],
            ['language_id' => $jp->id, 'name' => 'All Kana', 'slug' => 'katakana-all-kana', 'description' => 'Review and test your full Katakana knowledge.']
        ]);

        $kanji_n5 = $jp->categories()->create([
            'name' => 'Kanji N5',
            'slug' => 'kanji-n5',
            'description' => 'Start with the most basic Kanji characters required for JLPT N5. Ideal for beginners learning common words and concepts.',
        ]);

        $kanji_n5->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Numbers & Time', 'slug' => 'kanji-n5-numbers-and-time', 'description' => 'Kanji related to basic numbers, dates, and telling time.'],
            ['language_id' => $jp->id, 'name' => 'People & Pronouns', 'slug' => 'kanji-n5-people-and-pronouns', 'description' => 'Covers basic Kanji for personal pronouns, people, and related terms.'],
            ['language_id' => $jp->id, 'name' => 'Nature & Environment', 'slug' => 'kanji-n5-nature-and-environment', 'description' => 'Learn Kanji for elements in nature such as mountains, rivers, and weather.'],
            ['language_id' => $jp->id, 'name' => 'Daily Life & School', 'slug' => 'kanji-n5-daily-life-and-school', 'description' => 'Common Kanji found in school, home, and everyday situations.'],
            ['language_id' => $jp->id, 'name' => 'Common Verbs & Adjectives', 'slug' => 'kanji-n5-verbs-and-adjectives', 'description' => 'Covers simple Kanji used in basic verbs and adjectives.'],
        ]);

        $kanji_n4 = $jp->categories()->create([
            'name' => 'Kanji N4',
            'slug' => 'kanji-n4',
            'description' => 'Expand your Kanji knowledge with intermediate-level characters used in JLPT N4. Includes verbs, nouns, and more.',
        ]);

        $kanji_n4->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Verbs & Actions', 'slug' => 'kanji-n4-verbs-and-actions', 'description' => 'Covers Kanji for more advanced verbs and common actions.'],
            ['language_id' => $jp->id, 'name' => 'Time & Frequency', 'slug' => 'kanji-n4-time-and-frequency', 'description' => 'Kanji used when talking about how often and when things happen.'],
            ['language_id' => $jp->id, 'name' => 'Places & Directions', 'slug' => 'kanji-n4-places-and-directions', 'description' => 'Includes Kanji for locations, directions, and movement.'],
            ['language_id' => $jp->id, 'name' => 'Emotions & States', 'slug' => 'kanji-n4-emotions-and-states', 'description' => 'Learn Kanji used to describe feelings, conditions, and moods.'],
            ['language_id' => $jp->id, 'name' => 'Family & People', 'slug' => 'kanji-n4-family-and-people', 'description' => 'Covers family member terms and related people Kanji.'],
            ['language_id' => $jp->id, 'name' => 'Common Nouns & Adjectives', 'slug' => 'kanji-n4-nouns-and-adjectives', 'description' => 'Everyday nouns and descriptive words in Kanji.'],
        ]);

        $kanji_n3 = $jp->categories()->create([
            'name' => 'Kanji N3',
            'slug' => 'kanji-n3',
            'description' => 'Advance your reading and writing skills with Kanji required for JLPT N3. Covers everyday life, emotions, and abstract ideas.',
        ]);

        $kanji_n3->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Work & Business', 'slug' => 'kanji-n3-work-and-business', 'description' => 'Kanji related to jobs, work settings, and formal communication.'],
            ['language_id' => $jp->id, 'name' => 'School & Learning', 'slug' => 'kanji-n3-school-and-learning', 'description' => 'Study-related Kanji used in schools, lessons, and education.'],
            ['language_id' => $jp->id, 'name' => 'Emotions & Psychology', 'slug' => 'kanji-n3-emotions-and-psychology', 'description' => 'More complex Kanji dealing with mental states and feelings.'],
            ['language_id' => $jp->id, 'name' => 'Daily Activities', 'slug' => 'kanji-n3-daily-activities', 'description' => 'Covers Kanji related to routines like eating, cleaning, and commuting.'],
            ['language_id' => $jp->id, 'name' => 'Time & Seasons', 'slug' => 'kanji-n3-time-and-seasons', 'description' => 'Advanced Kanji for seasonal events, times of year, and schedules.'],
            ['language_id' => $jp->id, 'name' => 'Nature & Environment', 'slug' => 'kanji-n3-nature-and-environment', 'description' => 'Covers Kanji for landscapes, climate, and natural phenomena.'],
            ['language_id' => $jp->id, 'name' => 'Body & Health', 'slug' => 'kanji-n3-body-and-health', 'description' => 'Learn Kanji for parts of the body and health-related words.'],
            ['language_id' => $jp->id, 'name' => 'Movement & Travel', 'slug' => 'kanji-n3-movement-and-travel', 'description' => 'Kanji involving motion, vehicles, and travel concepts.'],
            ['language_id' => $jp->id, 'name' => 'People & Society', 'slug' => 'kanji-n3-people-and-society', 'description' => 'Explore Kanji related to social roles, populations, and communities.'],
            ['language_id' => $jp->id, 'name' => 'Tools & Objects', 'slug' => 'kanji-n3-tools-and-objects', 'description' => 'Kanji used for tools, utensils, and everyday items.'],
            ['language_id' => $jp->id, 'name' => 'Food & Cooking', 'slug' => 'kanji-n3-food-and-cooking', 'description' => 'Covers Kanji for ingredients, meals, and cooking actions.'],
            ['language_id' => $jp->id, 'name' => 'Abstract Concepts', 'slug' => 'kanji-n3-abstract-concepts', 'description' => 'Includes abstract or conceptual Kanji such as truth, idea, etc.'],
            ['language_id' => $jp->id, 'name' => 'Verbs (Group 1)', 'slug' => 'kanji-n3-verbs-group-1', 'description' => 'A set of high-frequency verbs using more complex Kanji.'],
            ['language_id' => $jp->id, 'name' => 'Verbs (Group 2)', 'slug' => 'kanji-n3-verbs-group-2', 'description' => 'Continuation of important verbs for N3 with Kanji.'],
            ['language_id' => $jp->id, 'name' => 'Adjectives & Descriptions', 'slug' => 'kanji-n3-adjectives-and-descriptions', 'description' => 'Descriptive Kanji used for expressing qualities and characteristics.'],
        ]);

        $jp->categories()->createMany([
            ['name' => 'Core Particles', 'slug' => 'core-particles', 'description' => 'The most essential particles used in Japanese grammar like は, が, を, に, and で.'],
            ['name' => 'Additional Particles', 'slug' => 'additional-particles', 'description' => 'Other useful particles such as へ, から, より, and まで that expand sentence variety.'],
            ['name' => 'Formal Verb Forms', 'slug' => 'formal-verb-forms', 'description' => 'Learn how to conjugate and use polite verb forms like ～ます, ～ました, etc.'],
            ['name' => 'Casual Verb Forms', 'slug' => 'casual-verb-forms', 'description' => 'Covers informal verb conjugations used in everyday and friendly conversations.'],
            ['name' => 'Question Words', 'slug' => 'question-words', 'description' => 'Words used to ask questions like どこ (where), いつ (when), なん (what), and more.'],
            ['name' => 'Copulas', 'slug' => 'copulas', 'description' => 'Learn how to use Japanese copulas like です, だ, and their conjugated forms.'],
            ['name' => 'Topics', 'slug' => 'topics', 'description' => 'Introductory topics for sentence building and beginner-level communication.'],
        ]);

        $verbs = $jp->categories()->create([
            'name' => 'Verbs',
            'slug' => 'verbs',
            'description' => 'Practice Japanese verbs split by JLPT level and difficulty. Great for mastering conjugation and vocabulary.'
        ]);

        $verbs->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'N5 Part 1', 'slug' => 'n5-part-1', 'description' => 'Basic action verbs used in daily life at the N5 level (first half).'],
            ['language_id' => $jp->id, 'name' => 'N5 Part 2', 'slug' => 'n5-part-2', 'description' => 'Continuation of core verbs for N5 level (second half).'],
            ['language_id' => $jp->id, 'name' => 'N4 Part 1', 'slug' => 'n4-part-1', 'description' => 'Intermediate verbs at the N4 level, including more abstract and situational actions.'],
            ['language_id' => $jp->id, 'name' => 'N4 Part 2', 'slug' => 'n4-part-2', 'description' => 'Continuation of essential N4 verbs to improve reading and speaking.'],
        ]);

        $objects = $jp->categories()->create([
            'name' => 'Objects',
            'slug' => 'objects',
            'description' => 'Vocabulary covering useful objects and things you encounter in daily life in Japan.'
        ]);

        $objects->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Foods & Drinks', 'slug' => 'foods-and-drinks', 'description' => 'Covers common food and beverage vocabulary used in homes, restaurants, and shops.'],
            ['language_id' => $jp->id, 'name' => 'Shopping', 'slug' => 'shopping', 'description' => 'Essential words for buying, selling, and navigating Japanese stores.'],
            ['language_id' => $jp->id, 'name' => 'Konbini & Supermarket', 'slug' => 'konbini-and-supermarket', 'description' => 'Items and vocabulary found in convenience stores and grocery shops.'],
            ['language_id' => $jp->id, 'name' => 'Household & Toiletries', 'slug' => 'household-and-toiletries', 'description' => 'Learn the Japanese for everyday items at home, including cleaning and personal care.'],
            ['language_id' => $jp->id, 'name' => 'Tech & Tools', 'slug' => 'tech-and-tools', 'description' => 'Words for electronic devices, software, and tools. Useful for modern life.'],
            ['language_id' => $jp->id, 'name' => 'Government/Admin/Paperwork', 'slug' => 'government-admin-paperwork', 'description' => 'Covers vocabulary for bureaucracy, city hall, forms, and procedures in Japan.'],
        ]);

        $counting = $jp->categories()->create([
            'name' => 'Counting',
            'slug' => 'counting',
            'description' => 'Master the many ways to count things in Japanese using specific counters for people, objects, time, animals, and more. This is essential for sounding natural in conversation.'
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
                'name' => 'Weeks',
                'slug' => 'counting-weeks',
                'description' => 'Learn to count weeks using ～週間 (しゅうかん), covering durations like "1 week", "2 weeks", etc. Useful for schedules, planning, and conversations about time spans.'
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

        $vtuber = $jp->categories()->create([
            'name' => 'VTuber',
            'slug' => 'vtuber',
            'description' => 'Specialized vocabulary and expressions to help aspiring VTubers stream in Japanese and engage with their audience.'
        ]);

        $vtuber->children()->createMany([
            ['language_id' => $jp->id, 'name' => 'Basic Stream Vocabulary', 'slug' => 'basic-stream-vocabulary', 'description' => 'Essential words for streaming like start, stop, mic, camera, and more.'],
            ['language_id' => $jp->id, 'name' => 'Useful Expressions', 'slug' => 'useful-expressions', 'description' => 'Common phrases used during live broadcasts such as greetings, thank yous, and basic instructions.'],
            ['language_id' => $jp->id, 'name' => 'Chat Lingo & Slang', 'slug' => 'chat-lingo-and-slang', 'description' => 'Popular internet slang and abbreviations used by Japanese viewers and VTubers.'],
            ['language_id' => $jp->id, 'name' => 'Reactions & Emotions', 'slug' => 'reactions-and-emotions', 'description' => 'Express your feelings with natural Japanese words like "yatta!", "uwaa!", or "ehh?!".'],
            ['language_id' => $jp->id, 'name' => 'Game-related Phrases', 'slug' => 'game-related-phrases', 'description' => 'Phrases you need while gaming live, including commands, reactions, and game-specific terms.'],
            ['language_id' => $jp->id, 'name' => 'Technical Issues & Stream Setup', 'slug' => 'technical-issues-and-stream-setup', 'description' => 'Learn how to talk about setup, lag, bugs, crashes, and fixing problems in Japanese.'],
            ['language_id' => $jp->id, 'name' => 'Fan Engagement', 'slug' => 'fan-engagement', 'description' => 'Build community by using phrases for talking with fans, thanking them, and reading comments.'],
            ['language_id' => $jp->id, 'name' => 'End-of-Stream Phrases', 'slug' => 'end-of-stream-phrases', 'description' => 'Useful and polite ways to wrap up a stream in Japanese, including sign-offs and future schedules.'],
        ]);
    }
}
