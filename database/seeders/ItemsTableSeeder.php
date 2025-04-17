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
        // Hiragana
        // Main Kana
        $this->seedCategory('hiragana-main-kana', 'Main Kana', [
            ['kana' => 'あ', 'romaji' => 'a', 'meanings' => ['a']],
            ['kana' => 'い', 'romaji' => 'i', 'meanings' => ['i']],
            ['kana' => 'う', 'romaji' => 'u', 'meanings' => ['u']],
            ['kana' => 'え', 'romaji' => 'e', 'meanings' => ['e']],
            ['kana' => 'お', 'romaji' => 'o', 'meanings' => ['o']],

            ['kana' => 'か', 'romaji' => 'ka', 'meanings' => ['ka']],
            ['kana' => 'き', 'romaji' => 'ki', 'meanings' => ['ki']],
            ['kana' => 'く', 'romaji' => 'ku', 'meanings' => ['ku']],
            ['kana' => 'け', 'romaji' => 'ke', 'meanings' => ['ke']],
            ['kana' => 'こ', 'romaji' => 'ko', 'meanings' => ['ko']],

            ['kana' => 'さ', 'romaji' => 'sa', 'meanings' => ['sa']],
            ['kana' => 'し', 'romaji' => 'shi', 'meanings' => ['shi']],
            ['kana' => 'す', 'romaji' => 'su', 'meanings' => ['su']],
            ['kana' => 'せ', 'romaji' => 'se', 'meanings' => ['se']],
            ['kana' => 'そ', 'romaji' => 'so', 'meanings' => ['so']],

            ['kana' => 'た', 'romaji' => 'ta', 'meanings' => ['ta']],
            ['kana' => 'ち', 'romaji' => 'chi', 'meanings' => ['chi']],
            ['kana' => 'つ', 'romaji' => 'tsu', 'meanings' => ['tsu']],
            ['kana' => 'て', 'romaji' => 'te', 'meanings' => ['te']],
            ['kana' => 'と', 'romaji' => 'to', 'meanings' => ['to']],

            ['kana' => 'な', 'romaji' => 'na', 'meanings' => ['na']],
            ['kana' => 'に', 'romaji' => 'ni', 'meanings' => ['ni']],
            ['kana' => 'ぬ', 'romaji' => 'nu', 'meanings' => ['nu']],
            ['kana' => 'ね', 'romaji' => 'ne', 'meanings' => ['ne']],
            ['kana' => 'の', 'romaji' => 'no', 'meanings' => ['no']],

            ['kana' => 'は', 'romaji' => 'ha', 'meanings' => ['ha']],
            ['kana' => 'ひ', 'romaji' => 'hi', 'meanings' => ['hi']],
            ['kana' => 'ふ', 'romaji' => 'fu', 'meanings' => ['fu']],
            ['kana' => 'へ', 'romaji' => 'he', 'meanings' => ['he']],
            ['kana' => 'ほ', 'romaji' => 'ho', 'meanings' => ['ho']],

            ['kana' => 'ま', 'romaji' => 'ma', 'meanings' => ['ma']],
            ['kana' => 'み', 'romaji' => 'mi', 'meanings' => ['mi']],
            ['kana' => 'む', 'romaji' => 'mu', 'meanings' => ['mu']],
            ['kana' => 'め', 'romaji' => 'me', 'meanings' => ['me']],
            ['kana' => 'も', 'romaji' => 'mo', 'meanings' => ['mo']],

            ['kana' => 'や', 'romaji' => 'ya', 'meanings' => ['ya']],
            ['kana' => 'ゆ', 'romaji' => 'yu', 'meanings' => ['yu']],
            ['kana' => 'よ', 'romaji' => 'yo', 'meanings' => ['yo']],

            ['kana' => 'ら', 'romaji' => 'ra', 'meanings' => ['ra']],
            ['kana' => 'り', 'romaji' => 'ri', 'meanings' => ['ri']],
            ['kana' => 'る', 'romaji' => 'ru', 'meanings' => ['ru']],
            ['kana' => 'れ', 'romaji' => 're', 'meanings' => ['re']],
            ['kana' => 'ろ', 'romaji' => 'ro', 'meanings' => ['ro']],

            ['kana' => 'わ', 'romaji' => 'wa', 'meanings' => ['wa']],
            ['kana' => 'を', 'romaji' => 'wo', 'meanings' => ['wo']],
            ['kana' => 'ん', 'romaji' => 'n', 'meanings' => ['n']],
        ]);

        // Dakuten Kana
        $this->seedCategory('hiragana-main-kana', 'Dakuten Kana', [
            ['kana' => 'が', 'romaji' => 'ga', 'meanings' => ['ga']],
            ['kana' => 'ぎ', 'romaji' => 'gi', 'meanings' => ['gi']],
            ['kana' => 'ぐ', 'romaji' => 'gu', 'meanings' => ['gu']],
            ['kana' => 'げ', 'romaji' => 'ge', 'meanings' => ['ge']],
            ['kana' => 'ご', 'romaji' => 'go', 'meanings' => ['go']],

            ['kana' => 'ざ', 'romaji' => 'za', 'meanings' => ['za']],
            ['kana' => 'じ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'ず', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'ぜ', 'romaji' => 'ze', 'meanings' => ['ze']],
            ['kana' => 'ぞ', 'romaji' => 'zo', 'meanings' => ['zo']],

            ['kana' => 'だ', 'romaji' => 'da', 'meanings' => ['da']],
            ['kana' => 'ぢ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'づ', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'で', 'romaji' => 'de', 'meanings' => ['de']],
            ['kana' => 'ど', 'romaji' => 'do', 'meanings' => ['do']],

            ['kana' => 'ば', 'romaji' => 'ba', 'meanings' => ['ba']],
            ['kana' => 'び', 'romaji' => 'bi', 'meanings' => ['bi']],
            ['kana' => 'ぶ', 'romaji' => 'bu', 'meanings' => ['bu']],
            ['kana' => 'べ', 'romaji' => 'be', 'meanings' => ['be']],
            ['kana' => 'ぼ', 'romaji' => 'bo', 'meanings' => ['bo']],

            ['kana' => 'ぱ', 'romaji' => 'pa', 'meanings' => ['pa']],
            ['kana' => 'ぴ', 'romaji' => 'pi', 'meanings' => ['pi']],
            ['kana' => 'ぷ', 'romaji' => 'pu', 'meanings' => ['pu']],
            ['kana' => 'ぺ', 'romaji' => 'pe', 'meanings' => ['pe']],
            ['kana' => 'ぽ', 'romaji' => 'po', 'meanings' => ['po']],
        ]);

        // Combination Kana
        $this->seedCategory('hiragana-main-kana', 'Combination Kana', [
            ['kana' => 'きゃ', 'romaji' => 'kya', 'meanings' => ['kya']],
            ['kana' => 'きゅ', 'romaji' => 'kyu', 'meanings' => ['kyu']],
            ['kana' => 'きょ', 'romaji' => 'kyo', 'meanings' => ['kyo']],

            ['kana' => 'しゃ', 'romaji' => 'sha', 'meanings' => ['sha']],
            ['kana' => 'しゅ', 'romaji' => 'shu', 'meanings' => ['shu']],
            ['kana' => 'しょ', 'romaji' => 'sho', 'meanings' => ['sho']],

            ['kana' => 'ちゃ', 'romaji' => 'cha', 'meanings' => ['cha']],
            ['kana' => 'ちゅ', 'romaji' => 'chu', 'meanings' => ['chu']],
            ['kana' => 'ちょ', 'romaji' => 'cho', 'meanings' => ['cho']],

            ['kana' => 'にゃ', 'romaji' => 'nya', 'meanings' => ['nya']],
            ['kana' => 'にゅ', 'romaji' => 'nyu', 'meanings' => ['nyu']],
            ['kana' => 'にょ', 'romaji' => 'nyo', 'meanings' => ['nyo']],

            ['kana' => 'ひゃ', 'romaji' => 'hya', 'meanings' => ['hya']],
            ['kana' => 'ひゅ', 'romaji' => 'hyu', 'meanings' => ['hyu']],
            ['kana' => 'ひょ', 'romaji' => 'hyo', 'meanings' => ['hyo']],

            ['kana' => 'みゃ', 'romaji' => 'mya', 'meanings' => ['mya']],
            ['kana' => 'みゅ', 'romaji' => 'myu', 'meanings' => ['myu']],
            ['kana' => 'みょ', 'romaji' => 'myo', 'meanings' => ['myo']],

            ['kana' => 'りゃ', 'romaji' => 'rya', 'meanings' => ['rya']],
            ['kana' => 'りゅ', 'romaji' => 'ryu', 'meanings' => ['ryu']],
            ['kana' => 'りょ', 'romaji' => 'ryo', 'meanings' => ['ryo']],

            ['kana' => 'ぎゃ', 'romaji' => 'gya', 'meanings' => ['gya']],
            ['kana' => 'ぎゅ', 'romaji' => 'gyu', 'meanings' => ['gyu']],
            ['kana' => 'ぎょ', 'romaji' => 'gyo', 'meanings' => ['gyo']],

            ['kana' => 'じゃ', 'romaji' => 'ja', 'meanings' => ['ja']],
            ['kana' => 'じゅ', 'romaji' => 'ju', 'meanings' => ['ju']],
            ['kana' => 'じょ', 'romaji' => 'jo', 'meanings' => ['jo']],

            ['kana' => 'ぢゃ', 'romaji' => 'ja (di)', 'meanings' => ['ja (from ぢ)']],
            ['kana' => 'ぢゅ', 'romaji' => 'ju (di)', 'meanings' => ['ju (from ぢ)']],
            ['kana' => 'ぢょ', 'romaji' => 'jo (di)', 'meanings' => ['jo (from ぢ)']],

            ['kana' => 'びゃ', 'romaji' => 'bya', 'meanings' => ['bya']],
            ['kana' => 'びゅ', 'romaji' => 'byu', 'meanings' => ['byu']],
            ['kana' => 'びょ', 'romaji' => 'byo', 'meanings' => ['byo']],

            ['kana' => 'ぴゃ', 'romaji' => 'pya', 'meanings' => ['pya']],
            ['kana' => 'ぴゅ', 'romaji' => 'pyu', 'meanings' => ['pyu']],
            ['kana' => 'ぴょ', 'romaji' => 'pyo', 'meanings' => ['pyo']],
        ]);

        // All Kana
        $this->seedCategory('hiragana-main-kana', 'All Kana', [
            ['kana' => 'あ', 'romaji' => 'a', 'meanings' => ['a']],
            ['kana' => 'い', 'romaji' => 'i', 'meanings' => ['i']],
            ['kana' => 'う', 'romaji' => 'u', 'meanings' => ['u']],
            ['kana' => 'え', 'romaji' => 'e', 'meanings' => ['e']],
            ['kana' => 'お', 'romaji' => 'o', 'meanings' => ['o']],
            ['kana' => 'か', 'romaji' => 'ka', 'meanings' => ['ka']],
            ['kana' => 'き', 'romaji' => 'ki', 'meanings' => ['ki']],
            ['kana' => 'く', 'romaji' => 'ku', 'meanings' => ['ku']],
            ['kana' => 'け', 'romaji' => 'ke', 'meanings' => ['ke']],
            ['kana' => 'こ', 'romaji' => 'ko', 'meanings' => ['ko']],
            ['kana' => 'さ', 'romaji' => 'sa', 'meanings' => ['sa']],
            ['kana' => 'し', 'romaji' => 'shi', 'meanings' => ['shi']],
            ['kana' => 'す', 'romaji' => 'su', 'meanings' => ['su']],
            ['kana' => 'せ', 'romaji' => 'se', 'meanings' => ['se']],
            ['kana' => 'そ', 'romaji' => 'so', 'meanings' => ['so']],
            ['kana' => 'た', 'romaji' => 'ta', 'meanings' => ['ta']],
            ['kana' => 'ち', 'romaji' => 'chi', 'meanings' => ['chi']],
            ['kana' => 'つ', 'romaji' => 'tsu', 'meanings' => ['tsu']],
            ['kana' => 'て', 'romaji' => 'te', 'meanings' => ['te']],
            ['kana' => 'と', 'romaji' => 'to', 'meanings' => ['to']],
            ['kana' => 'な', 'romaji' => 'na', 'meanings' => ['na']],
            ['kana' => 'に', 'romaji' => 'ni', 'meanings' => ['ni']],
            ['kana' => 'ぬ', 'romaji' => 'nu', 'meanings' => ['nu']],
            ['kana' => 'ね', 'romaji' => 'ne', 'meanings' => ['ne']],
            ['kana' => 'の', 'romaji' => 'no', 'meanings' => ['no']],
            ['kana' => 'は', 'romaji' => 'ha', 'meanings' => ['ha']],
            ['kana' => 'ひ', 'romaji' => 'hi', 'meanings' => ['hi']],
            ['kana' => 'ふ', 'romaji' => 'fu', 'meanings' => ['fu']],
            ['kana' => 'へ', 'romaji' => 'he', 'meanings' => ['he']],
            ['kana' => 'ほ', 'romaji' => 'ho', 'meanings' => ['ho']],
            ['kana' => 'ま', 'romaji' => 'ma', 'meanings' => ['ma']],
            ['kana' => 'み', 'romaji' => 'mi', 'meanings' => ['mi']],
            ['kana' => 'む', 'romaji' => 'mu', 'meanings' => ['mu']],
            ['kana' => 'め', 'romaji' => 'me', 'meanings' => ['me']],
            ['kana' => 'も', 'romaji' => 'mo', 'meanings' => ['mo']],
            ['kana' => 'や', 'romaji' => 'ya', 'meanings' => ['ya']],
            ['kana' => 'ゆ', 'romaji' => 'yu', 'meanings' => ['yu']],
            ['kana' => 'よ', 'romaji' => 'yo', 'meanings' => ['yo']],
            ['kana' => 'ら', 'romaji' => 'ra', 'meanings' => ['ra']],
            ['kana' => 'り', 'romaji' => 'ri', 'meanings' => ['ri']],
            ['kana' => 'る', 'romaji' => 'ru', 'meanings' => ['ru']],
            ['kana' => 'れ', 'romaji' => 're', 'meanings' => ['re']],
            ['kana' => 'ろ', 'romaji' => 'ro', 'meanings' => ['ro']],
            ['kana' => 'わ', 'romaji' => 'wa', 'meanings' => ['wa']],
            ['kana' => 'を', 'romaji' => 'wo', 'meanings' => ['wo']],
            ['kana' => 'ん', 'romaji' => 'n', 'meanings' => ['n']],
            ['kana' => 'が', 'romaji' => 'ga', 'meanings' => ['ga']],
            ['kana' => 'ぎ', 'romaji' => 'gi', 'meanings' => ['gi']],
            ['kana' => 'ぐ', 'romaji' => 'gu', 'meanings' => ['gu']],
            ['kana' => 'げ', 'romaji' => 'ge', 'meanings' => ['ge']],
            ['kana' => 'ご', 'romaji' => 'go', 'meanings' => ['go']],
            ['kana' => 'ざ', 'romaji' => 'za', 'meanings' => ['za']],
            ['kana' => 'じ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'ず', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'ぜ', 'romaji' => 'ze', 'meanings' => ['ze']],
            ['kana' => 'ぞ', 'romaji' => 'zo', 'meanings' => ['zo']],
            ['kana' => 'だ', 'romaji' => 'da', 'meanings' => ['da']],
            ['kana' => 'ぢ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'づ', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'で', 'romaji' => 'de', 'meanings' => ['de']],
            ['kana' => 'ど', 'romaji' => 'do', 'meanings' => ['do']],
            ['kana' => 'ば', 'romaji' => 'ba', 'meanings' => ['ba']],
            ['kana' => 'び', 'romaji' => 'bi', 'meanings' => ['bi']],
            ['kana' => 'ぶ', 'romaji' => 'bu', 'meanings' => ['bu']],
            ['kana' => 'べ', 'romaji' => 'be', 'meanings' => ['be']],
            ['kana' => 'ぼ', 'romaji' => 'bo', 'meanings' => ['bo']],
            ['kana' => 'ぱ', 'romaji' => 'pa', 'meanings' => ['pa']],
            ['kana' => 'ぴ', 'romaji' => 'pi', 'meanings' => ['pi']],
            ['kana' => 'ぷ', 'romaji' => 'pu', 'meanings' => ['pu']],
            ['kana' => 'ぺ', 'romaji' => 'pe', 'meanings' => ['pe']],
            ['kana' => 'ぽ', 'romaji' => 'po', 'meanings' => ['po']],
            ['kana' => 'きゃ', 'romaji' => 'kya', 'meanings' => ['kya']],
            ['kana' => 'きゅ', 'romaji' => 'kyu', 'meanings' => ['kyu']],
            ['kana' => 'きょ', 'romaji' => 'kyo', 'meanings' => ['kyo']],
            ['kana' => 'しゃ', 'romaji' => 'sha', 'meanings' => ['sha']],
            ['kana' => 'しゅ', 'romaji' => 'shu', 'meanings' => ['shu']],
            ['kana' => 'しょ', 'romaji' => 'sho', 'meanings' => ['sho']],
            ['kana' => 'ちゃ', 'romaji' => 'cha', 'meanings' => ['cha']],
            ['kana' => 'ちゅ', 'romaji' => 'chu', 'meanings' => ['chu']],
            ['kana' => 'ちょ', 'romaji' => 'cho', 'meanings' => ['cho']],
            ['kana' => 'にゃ', 'romaji' => 'nya', 'meanings' => ['nya']],
            ['kana' => 'にゅ', 'romaji' => 'nyu', 'meanings' => ['nyu']],
            ['kana' => 'にょ', 'romaji' => 'nyo', 'meanings' => ['nyo']],
            ['kana' => 'ひゃ', 'romaji' => 'hya', 'meanings' => ['hya']],
            ['kana' => 'ひゅ', 'romaji' => 'hyu', 'meanings' => ['hyu']],
            ['kana' => 'ひょ', 'romaji' => 'hyo', 'meanings' => ['hyo']],
            ['kana' => 'みゃ', 'romaji' => 'mya', 'meanings' => ['mya']],
            ['kana' => 'みゅ', 'romaji' => 'myu', 'meanings' => ['myu']],
            ['kana' => 'みょ', 'romaji' => 'myo', 'meanings' => ['myo']],
            ['kana' => 'りゃ', 'romaji' => 'rya', 'meanings' => ['rya']],
            ['kana' => 'りゅ', 'romaji' => 'ryu', 'meanings' => ['ryu']],
            ['kana' => 'りょ', 'romaji' => 'ryo', 'meanings' => ['ryo']],
            ['kana' => 'ぎゃ', 'romaji' => 'gya', 'meanings' => ['gya']],
            ['kana' => 'ぎゅ', 'romaji' => 'gyu', 'meanings' => ['gyu']],
            ['kana' => 'ぎょ', 'romaji' => 'gyo', 'meanings' => ['gyo']],
            ['kana' => 'じゃ', 'romaji' => 'ja', 'meanings' => ['ja']],
            ['kana' => 'じゅ', 'romaji' => 'ju', 'meanings' => ['ju']],
            ['kana' => 'じょ', 'romaji' => 'jo', 'meanings' => ['jo']],
            ['kana' => 'ぢゃ', 'romaji' => 'ja (di)', 'meanings' => ['ja (from ぢ)']],
            ['kana' => 'ぢゅ', 'romaji' => 'ju (di)', 'meanings' => ['ju (from ぢ)']],
            ['kana' => 'ぢょ', 'romaji' => 'jo (di)', 'meanings' => ['jo (from ぢ)']],
            ['kana' => 'びゃ', 'romaji' => 'bya', 'meanings' => ['bya']],
            ['kana' => 'びゅ', 'romaji' => 'byu', 'meanings' => ['byu']],
            ['kana' => 'びょ', 'romaji' => 'byo', 'meanings' => ['byo']],
            ['kana' => 'ぴゃ', 'romaji' => 'pya', 'meanings' => ['pya']],
            ['kana' => 'ぴゅ', 'romaji' => 'pyu', 'meanings' => ['pyu']],
            ['kana' => 'ぴょ', 'romaji' => 'pyo', 'meanings' => ['pyo']],
        ]);

        // Seed Core Particles
        $core = Category::where('slug', 'core-particles')->firstOrFail();

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

        foreach ($particles as $p) {
            $this->createItemPair($core->id, 'Core Particles', $p);
        }

        // Additional Particles
        $this->seedCategory('additional-particles', 'Additional Particles', [
            ['kana' => 'へ', 'romaji' => 'e', 'meanings' => ['direction']],
            ['kana' => 'や', 'romaji' => 'ya', 'meanings' => ['and', 'non-exhaustive list']],
            ['kana' => 'ね', 'romaji' => 'ne', 'meanings' => ['right?', 'agreement']],
            ['kana' => 'よ', 'romaji' => 'yo', 'meanings' => ['emphasis']],
            ['kana' => 'だけ', 'romaji' => 'dake', 'meanings' => ['only']],
            ['kana' => 'しか', 'romaji' => 'shika', 'meanings' => ['only (with negative)']],
            ['kana' => 'でも', 'romaji' => 'demo', 'meanings' => ['even', 'but']],
            ['kana' => 'ほど', 'romaji' => 'hodo', 'meanings' => ['to the extent of', 'comparison']],
            ['kana' => 'ながら', 'romaji' => 'nagara', 'meanings' => ['while doing', 'simultaneous actions']],
        ]);

        // Verbs
        // N5 Part 1
        $this->seedCategory('n5-part-1', 'N5 Part 1', [
            ['kana' => 'たべる', 'romaji' => 'taberu', 'meanings' => ['to eat']],
            ['kana' => 'のむ', 'romaji' => 'nomu', 'meanings' => ['to drink']],
            ['kana' => 'いく', 'romaji' => 'iku', 'meanings' => ['to go']],
            ['kana' => 'くる', 'romaji' => 'kuru', 'meanings' => ['to come']],
            ['kana' => 'かえる', 'romaji' => 'kaeru', 'meanings' => ['to return (home)']],
            ['kana' => 'みる', 'romaji' => 'miru', 'meanings' => ['to see', 'to watch', 'to look']],
            ['kana' => 'きく', 'romaji' => 'kiku', 'meanings' => ['to listen', 'to ask']],
            ['kana' => 'はなす', 'romaji' => 'hanasu', 'meanings' => ['to speak', 'to talk']],
            ['kana' => 'よむ', 'romaji' => 'yomu', 'meanings' => ['to read']],
            ['kana' => 'かく', 'romaji' => 'kaku', 'meanings' => ['to write']],
            ['kana' => 'かう', 'romaji' => 'kau', 'meanings' => ['to buy']],
            ['kana' => 'うる', 'romaji' => 'uru', 'meanings' => ['to sell']],
            ['kana' => 'つかう', 'romaji' => 'tsukau', 'meanings' => ['to use']],
            ['kana' => 'する', 'romaji' => 'suru', 'meanings' => ['to do']],
            ['kana' => 'ある', 'romaji' => 'aru', 'meanings' => ['to exist (non-living)']],
            ['kana' => 'いる', 'romaji' => 'iru', 'meanings' => ['to exist (living)', 'to need']],
            ['kana' => 'おきる', 'romaji' => 'okiru', 'meanings' => ['to wake up']],
            ['kana' => 'ねる', 'romaji' => 'neru', 'meanings' => ['to sleep']],
            ['kana' => 'はたらく', 'romaji' => 'hataraku', 'meanings' => ['to work']],
            ['kana' => 'やすむ', 'romaji' => 'yasumu', 'meanings' => ['to rest', 'to take a break']],
            ['kana' => 'あう', 'romaji' => 'au', 'meanings' => ['to meet']],
            ['kana' => 'あける', 'romaji' => 'akeru', 'meanings' => ['to open']],
            ['kana' => 'しめる', 'romaji' => 'shimeru', 'meanings' => ['to close']],
            ['kana' => 'はいる', 'romaji' => 'hairu', 'meanings' => ['to enter']],
            ['kana' => 'でる', 'romaji' => 'deru', 'meanings' => ['to exit', 'to leave']],
            ['kana' => 'すわる', 'romaji' => 'suwaru', 'meanings' => ['to sit']],
            ['kana' => 'たつ', 'romaji' => 'tatsu', 'meanings' => ['to stand']],
            ['kana' => 'まつ', 'romaji' => 'matsu', 'meanings' => ['to wait']],
            ['kana' => 'もつ', 'romaji' => 'motsu', 'meanings' => ['to hold', 'to carry']],
            ['kana' => 'およぐ', 'romaji' => 'oyogu', 'meanings' => ['to swim']],
        ]);

        // N5 Part 2
        $this->seedCategory('n5-part-2', 'N5 Part 2', [
            ['kana' => 'はしる', 'romaji' => 'hashiru', 'meanings' => ['to run']],
            ['kana' => 'あるく', 'romaji' => 'aruku', 'meanings' => ['to walk']],
            ['kana' => 'のる', 'romaji' => 'noru', 'meanings' => ['to ride', 'to get on']],
            ['kana' => 'おりる', 'romaji' => 'oriru', 'meanings' => ['to get off', 'to descend']],
            ['kana' => 'いれる', 'romaji' => 'ireru', 'meanings' => ['to put in', 'to insert']],
            ['kana' => 'だす', 'romaji' => 'dasu', 'meanings' => ['to take out', 'to submit']],
            ['kana' => 'つける', 'romaji' => 'tsukeru', 'meanings' => ['to turn on']],
            ['kana' => 'けす', 'romaji' => 'kesu', 'meanings' => ['to turn off', 'to erase']],
            ['kana' => 'あらう', 'romaji' => 'arau', 'meanings' => ['to wash']],
            ['kana' => 'そうじする', 'romaji' => 'souji suru', 'meanings' => ['to clean']],
            ['kana' => 'せんたくする', 'romaji' => 'sentaku suru', 'meanings' => ['to do laundry']],
            ['kana' => 'りょうりする', 'romaji' => 'ryouri suru', 'meanings' => ['to cook']],
            ['kana' => 'べんきょうする', 'romaji' => 'benkyou suru', 'meanings' => ['to study']],
            ['kana' => 'けんがくする', 'romaji' => 'kengaku suru', 'meanings' => ['to tour', 'to observe']],
            ['kana' => 'でんわする', 'romaji' => 'denwa suru', 'meanings' => ['to call (by phone)']],
            ['kana' => 'うんてんする', 'romaji' => 'unten suru', 'meanings' => ['to drive']],
            ['kana' => 'つくる', 'romaji' => 'tsukuru', 'meanings' => ['to make', 'to create']],
            ['kana' => 'なおす', 'romaji' => 'naosu', 'meanings' => ['to fix', 'to repair']],
            ['kana' => 'つかれる', 'romaji' => 'tsukareru', 'meanings' => ['to get tired']],
            ['kana' => 'おぼえる', 'romaji' => 'oboeru', 'meanings' => ['to remember', 'to memorize']],
            ['kana' => 'わすれる', 'romaji' => 'wasureru', 'meanings' => ['to forget']],
            ['kana' => 'しぬ', 'romaji' => 'shinu', 'meanings' => ['to die']],
            ['kana' => 'あそぶ', 'romaji' => 'asobu', 'meanings' => ['to play', 'to hang out']],
            ['kana' => 'ならう', 'romaji' => 'narau', 'meanings' => ['to learn']],
            ['kana' => 'おしえる', 'romaji' => 'oshieru', 'meanings' => ['to teach', 'to tell']],
            ['kana' => 'つたえる', 'romaji' => 'tsutaeru', 'meanings' => ['to convey', 'to report']],
            ['kana' => 'なる', 'romaji' => 'naru', 'meanings' => ['to become']],
            ['kana' => 'もらう', 'romaji' => 'morau', 'meanings' => ['to receive']],
        ]);

        // N4 Part 1
        $this->seedCategory('n4-part-1', 'N4 Part 1', [
            ['kana' => 'かす', 'romaji' => 'kasu', 'meanings' => ['to lend']],
            ['kana' => 'かりる', 'romaji' => 'kariru', 'meanings' => ['to borrow']],
            ['kana' => 'なおる', 'romaji' => 'naoru', 'meanings' => ['to recover', 'to be fixed']],
            ['kana' => 'こわす', 'romaji' => 'kowasu', 'meanings' => ['to break (something)']],
            ['kana' => 'こわれる', 'romaji' => 'kowareru', 'meanings' => ['to be broken']],
            ['kana' => 'おちる', 'romaji' => 'ochiru', 'meanings' => ['to fall', 'to drop']],
            ['kana' => 'ひく', 'romaji' => 'hiku', 'meanings' => ['to pull', 'to play (instrument)']],
            ['kana' => 'おす', 'romaji' => 'osu', 'meanings' => ['to push']],
            ['kana' => 'ならぶ', 'romaji' => 'narabu', 'meanings' => ['to line up']],
            ['kana' => 'ならべる', 'romaji' => 'naraberu', 'meanings' => ['to arrange', 'to line up (trans.)']],
            ['kana' => 'えらぶ', 'romaji' => 'erabu', 'meanings' => ['to choose']],
            ['kana' => 'さがす', 'romaji' => 'sagasu', 'meanings' => ['to search', 'to look for']],
            ['kana' => 'みつける', 'romaji' => 'mitsukeru', 'meanings' => ['to find']],
            ['kana' => 'おもう', 'romaji' => 'omou', 'meanings' => ['to think', 'to feel']],
            ['kana' => 'かんがえる', 'romaji' => 'kangaeru', 'meanings' => ['to consider', 'to think about']],
            ['kana' => 'うごく', 'romaji' => 'ugoku', 'meanings' => ['to move']],
            ['kana' => 'つづける', 'romaji' => 'tsuzukeru', 'meanings' => ['to continue']],
            ['kana' => 'とまる', 'romaji' => 'tomaru', 'meanings' => ['to stop (moving)']],
            ['kana' => 'とめる', 'romaji' => 'tomeru', 'meanings' => ['to stop (something)']],
            ['kana' => 'はじまる', 'romaji' => 'hajimaru', 'meanings' => ['to begin (intransitive)']],
            ['kana' => 'はじめる', 'romaji' => 'hajimeru', 'meanings' => ['to begin (transitive)']],
            ['kana' => 'おわる', 'romaji' => 'owaru', 'meanings' => ['to end', 'to finish']],
            ['kana' => 'きまる', 'romaji' => 'kimaru', 'meanings' => ['to be decided']],
            ['kana' => 'きめる', 'romaji' => 'kimeru', 'meanings' => ['to decide']],
            ['kana' => 'つたわる', 'romaji' => 'tsutawaru', 'meanings' => ['to be transmitted']],
        ]);

        // N4 Part 2
        $this->seedCategory('n4-part-2', 'N4 Part 2', [
            ['kana' => 'うける', 'romaji' => 'ukeru', 'meanings' => ['to receive', 'to take (an exam)']],
            ['kana' => 'まにあう', 'romaji' => 'maniau', 'meanings' => ['to be on time']],
            ['kana' => 'おくれる', 'romaji' => 'okureru', 'meanings' => ['to be late']],
            ['kana' => 'ぬぐ', 'romaji' => 'nugu', 'meanings' => ['to take off (clothes)']],
            ['kana' => 'はく', 'romaji' => 'haku', 'meanings' => ['to wear (lower body)']],
            ['kana' => 'きる', 'romaji' => 'kiru', 'meanings' => ['to wear (upper body)']],
            ['kana' => 'かぶる', 'romaji' => 'kaburu', 'meanings' => ['to wear (on head)']],
            ['kana' => 'やめる', 'romaji' => 'yameru', 'meanings' => ['to quit', 'to stop doing']],
            ['kana' => 'よやくする', 'romaji' => 'yoyaku suru', 'meanings' => ['to reserve', 'to book']],
            ['kana' => 'けっこんする', 'romaji' => 'kekkon suru', 'meanings' => ['to marry']],
            ['kana' => 'しつもんする', 'romaji' => 'shitsumon suru', 'meanings' => ['to ask a question']],
            ['kana' => 'うけつける', 'romaji' => 'uketsukeru', 'meanings' => ['to accept', 'to receive (forms)']],
            ['kana' => 'きえる', 'romaji' => 'kieru', 'meanings' => ['to disappear', 'to go out']],
            ['kana' => 'わらう', 'romaji' => 'warau', 'meanings' => ['to laugh', 'to smile']],
            ['kana' => 'なく', 'romaji' => 'naku', 'meanings' => ['to cry']],
            ['kana' => 'おこる', 'romaji' => 'okoru', 'meanings' => ['to get angry']],
            ['kana' => 'よろこぶ', 'romaji' => 'yorokobu', 'meanings' => ['to be happy']],
            ['kana' => 'まよう', 'romaji' => 'mayou', 'meanings' => ['to be lost', 'to be unsure']],
            ['kana' => 'むかえる', 'romaji' => 'mukaeru', 'meanings' => ['to welcome', 'to pick up (person)']],
            ['kana' => 'とどける', 'romaji' => 'todokeru', 'meanings' => ['to deliver']],
            ['kana' => 'きく（たずねる）', 'romaji' => 'kiku (tazuneru)', 'meanings' => ['to ask (a question)']],
            ['kana' => 'とぶ', 'romaji' => 'tobu', 'meanings' => ['to fly', 'to jump']],
        ]);

        // Formal Verb Forms
        $this->seedCategory('formal-verb-forms', 'Formal Verb Forms', [
            ['kana' => 'ます', 'romaji' => 'masu', 'meanings' => ['polite present / future']],
            ['kana' => 'ません', 'romaji' => 'masen', 'meanings' => ['polite negative']],
            ['kana' => 'ました', 'romaji' => 'mashita', 'meanings' => ['polite past']],
            ['kana' => 'ませんでした', 'romaji' => 'masen deshita', 'meanings' => ['polite past negative']],
            ['kana' => 'たい', 'romaji' => 'tai', 'meanings' => ['want to']],
            ['kana' => 'たいですか', 'romaji' => 'tai desu ka', 'meanings' => ['want to?']],
            ['kana' => 'たいください', 'romaji' => 'tai kudesai', 'meanings' => ['please do']],
            ['kana' => 'てもいいですか', 'romaji' => 'te mo ii desuka', 'meanings' => ['may I...?']],
            ['kana' => 'てはいけません', 'romaji' => 'te wa ikemasen', 'meanings' => ['must not']],
        ]);

        // Casual Verb Forms
        $this->seedCategory('casual-verb-forms', 'Casual Verb Forms', [
            ['kana' => 'る / う / く', 'romaji' => 'ru / u / ku', 'meanings' => ['dictionary form endings']],
            ['kana' => 'ない', 'romaji' => 'nai', 'meanings' => ["negative (don't)"]],
            ['kana' => 'た', 'romaji' => 'ta', 'meanings' => ['past (did)']],
            ['kana' => 'なかった', 'romaji' => 'nakatta', 'meanings' => ["past negative (didn't)"]],
            ['kana' => 'よう / おう', 'romaji' => 'you / ou', 'meanings' => ["volitional (let's ...)"]],
            ['kana' => 'られる / える', 'romaji' => 'rareru / eru', 'meanings' => ['potential (can do)']],
            ['kana' => 'られる', 'romaji' => 'rareru', 'meanings' => ['passive (be done)']],
            ['kana' => 'させる', 'romaji' => 'saseru', 'meanings' => ['causative (make / let do)']],
            ['kana' => 'たら', 'romaji' => 'tara', 'meanings' => ['conditional (if ...)']],
            ['kana' => 'て', 'romaji' => 'te', 'meanings' => ['te-form (linking, request, command)']],
            ['kana' => 'ちゃう / じゃう', 'romaji' => 'chou / jou', 'meanings' => ['completed / accidental (casual)']],
        ]);

        // Question Words
        $this->seedCategory('question-words', 'Question Words', [
            ['kana' => 'なに / なん', 'romaji' => 'nani / nan', 'meanings' => ['what']],
            ['kana' => 'どこ', 'romaji' => 'doko', 'meanings' => ['where']],
            ['kana' => 'いつ', 'romaji' => 'itsu', 'meanings' => ['when']],
            ['kana' => 'いくら', 'romaji' => 'ikura', 'meanings' => ['how much']],
            ['kana' => 'どう', 'romaji' => 'dou', 'meanings' => ['how']],
            ['kana' => 'どうして / なぜ', 'romaji' => 'doushite / naze', 'meanings' => ['why']],
            ['kana' => 'だれ', 'romaji' => 'dare', 'meanings' => ['who (casual)']],
            ['kana' => 'どなた', 'romaji' => 'donata', 'meanings' => ['who (polite)']],
            ['kana' => 'どれ', 'romaji' => 'dore', 'meanings' => ['which one']],
            ['kana' => 'どの', 'romaji' => 'dono', 'meanings' => ['which (before a noun)']],
            ['kana' => 'どんな', 'romaji' => 'donna', 'meanings' => ['what kind of']],
            ['kana' => 'どのくらい', 'romaji' => 'dono kurai', 'meanings' => ['how long']],
            ['kana' => 'どれくらい', 'romaji' => 'dore kurai', 'meanings' => ['how much']],
        ]);

        // Copulas
        $this->seedCategory('copulas', 'Copulas', [
            ['kana' => 'です', 'romaji' => 'desu', 'meanings' => ['polite "is" / "are"']],
            ['kana' => 'だ', 'romaji' => 'da', 'meanings' => ['casual "is" / "are"']],
            ['kana' => 'じゃない', 'romaji' => 'ja nai', 'meanings' => ['casual negative (is not)']],
            ['kana' => 'ではありません', 'romaji' => 'de wa arimasen', 'meanings' => ['polite negative']],
            ['kana' => 'でした', 'romaji' => 'deshita', 'meanings' => ['polite past']],
            ['kana' => 'だった', 'romaji' => 'datta', 'meanings' => ['casual past']],
            ['kana' => 'じゃなかった', 'romaji' => 'ja nakatta', 'meanings' => ['casual past negative']],
            ['kana' => 'ではありませんでした', 'romaji' => 'de wa arimasen deshita', 'meanings' => ['polite past negative']],
        ]);

        // Topics
        $this->seedCategory('topics', 'Topics', [
            ['kana' => 'わたし', 'romaji' => 'watashi', 'meanings' => ['I', 'me']],
            ['kana' => 'あなた', 'romaji' => 'anata', 'meanings' => ['you']],
            ['kana' => 'かれ', 'romaji' => 'kare', 'meanings' => ['he', 'him']],
            ['kana' => 'かのじょ', 'romaji' => 'kanojo', 'meanings' => ['she', 'her']],
            ['kana' => 'かぞく', 'romaji' => 'kazoku', 'meanings' => ['family']],
            ['kana' => 'こども', 'romaji' => 'kodomo', 'meanings' => ['child']],
            ['kana' => 'せんせい', 'romaji' => 'sensei', 'meanings' => ['teacher']],
            ['kana' => 'がくせい', 'romaji' => 'gakusei', 'meanings' => ['student']],
            ['kana' => 'ともだち', 'romaji' => 'tomodachi', 'meanings' => ['friend']],
            ['kana' => 'ひと', 'romaji' => 'hito', 'meanings' => ['person', 'people']],
        ]);

        // Objects
        // Food & Drinks
        $this->seedCategory('foods-and-drinks', 'Foods & Drinks', [
            ['kana' => 'ごはん', 'romaji' => 'gohan', 'meanings' => ['rice', 'meal']],
            ['kana' => 'パン', 'romaji' => 'pan', 'meanings' => ['bread']],
            ['kana' => 'にく', 'romaji' => 'niku', 'meanings' => ['meat']],
            ['kana' => 'さかな', 'romaji' => 'sakana', 'meanings' => ['fish']],
            ['kana' => 'たまご', 'romaji' => 'tamago', 'meanings' => ['egg']],
            ['kana' => 'やさい', 'romaji' => 'yasai', 'meanings' => ['vegetables']],
            ['kana' => 'くだもの', 'romaji' => 'kudamono', 'meanings' => ['fruit']],
            ['kana' => 'みず', 'romaji' => 'mizu', 'meanings' => ['water']],
            ['kana' => 'おちゃ', 'romaji' => 'ocha', 'meanings' => ['tea']],
            ['kana' => 'コーヒー', 'romaji' => 'koohii', 'meanings' => ['coffee']],
            ['kana' => 'ジュース', 'romaji' => 'juusu', 'meanings' => ['juice']],
            ['kana' => 'ビール', 'romaji' => 'biiru', 'meanings' => ['beer']],
            ['kana' => 'ワイン', 'romaji' => 'wain', 'meanings' => ['wine']],
            ['kana' => 'スープ', 'romaji' => 'suupu', 'meanings' => ['soup']],
            ['kana' => 'サラダ', 'romaji' => 'sarada', 'meanings' => ['salad']],
            ['kana' => 'カレー', 'romaji' => 'karee', 'meanings' => ['curry']],
            ['kana' => 'みそしる', 'romaji' => 'misoshiru', 'meanings' => ['miso soup']],
            ['kana' => 'うどん', 'romaji' => 'udon', 'meanings' => ['udon']],
            ['kana' => 'そば', 'romaji' => 'soba', 'meanings' => ['soba']],
            ['kana' => 'ラーメン', 'romaji' => 'raamen', 'meanings' => ['ramen']],
            ['kana' => 'ぎゅうにゅう', 'romaji' => 'gyuunyuu', 'meanings' => ['milk']],
            ['kana' => 'チーズ', 'romaji' => 'chiizu', 'meanings' => ['cheese']],
            ['kana' => 'バター', 'romaji' => 'bataa', 'meanings' => ['butter']],
            ['kana' => 'ケーキ', 'romaji' => 'keeki', 'meanings' => ['cake']],
            ['kana' => 'クッキー', 'romaji' => 'kukkii', 'meanings' => ['cookie']],
            ['kana' => 'アイスクリーム', 'romaji' => 'aisukuriimu', 'meanings' => ['ice cream']],
            ['kana' => 'あめ', 'romaji' => 'ame', 'meanings' => ['candy']],
            ['kana' => 'おにぎり', 'romaji' => 'onigiri', 'meanings' => ['riceball']],
            ['kana' => 'べんとう', 'romaji' => 'bentou', 'meanings' => ['boxed lunch']],
            ['kana' => 'ピザ', 'romaji' => 'piza', 'meanings' => ['pizza']],
            ['kana' => 'ハンバーガー', 'romaji' => 'hanbaagaa', 'meanings' => ['hamburger']],
            ['kana' => 'ポテト', 'romaji' => 'poteto', 'meanings' => ['potato', 'fries']],
            ['kana' => 'さら', 'romaji' => 'sara', 'meanings' => ['plate']],
            ['kana' => 'コップ', 'romaji' => 'koppu', 'meanings' => ['cup', 'glass']],
            ['kana' => 'フォーク', 'romaji' => 'fooku', 'meanings' => ['fork']],
            ['kana' => 'スプーン', 'romaji' => 'supuun', 'meanings' => ['spoon']],
            ['kana' => 'ナイフ', 'romaji' => 'naifu', 'meanings' => ['knife']],
            ['kana' => 'レストラン', 'romaji' => 'resutoran', 'meanings' => ['restaurant']],
            ['kana' => 'メニュー', 'romaji' => 'menyuu', 'meanings' => ['menu']],
        ]);

        // Shopping
        self::seedCategory('shopping', 'Shopping', [
            ['kana' => 'さいふ', 'romaji' => 'saifu', 'meanings' => ['wallet']],
            ['kana' => 'おかね', 'romaji' => 'okane', 'meanings' => ['money']],
            ['kana' => 'カード', 'romaji' => 'kaado', 'meanings' => ['card', 'credit card', 'debit card']],
            ['kana' => 'レジ', 'romaji' => 'reji', 'meanings' => ['register', 'checkout']],
            ['kana' => 'ふくろ', 'romaji' => 'fukuro', 'meanings' => ['bag']],
            ['kana' => 'レジぶくろ', 'romaji' => 'rejibukuro', 'meanings' => ['plastic shopping bag']],
            ['kana' => 'セール', 'romaji' => 'seeru', 'meanings' => ['sale']],
            ['kana' => 'サイズ', 'romaji' => 'saizu', 'meanings' => ['size']],
            ['kana' => 'シャツ', 'romaji' => 'shatsu', 'meanings' => ['shirt']],
            ['kana' => 'ズボン', 'romaji' => 'zubon', 'meanings' => ['pants']],
            ['kana' => 'スカート', 'romaji' => 'sukaato', 'meanings' => ['skirt']],
            ['kana' => 'ワンピース', 'romaji' => 'wanpiisu', 'meanings' => ['dress']],
            ['kana' => 'コート', 'romaji' => 'kooto', 'meanings' => ['coat']],
            ['kana' => 'ジャケット', 'romaji' => 'jaketto', 'meanings' => ['jacket']],
            ['kana' => 'くつ', 'romaji' => 'kutsu', 'meanings' => ['shoes']],
            ['kana' => 'くつした', 'romaji' => 'kutsushita', 'meanings' => ['socks']],
            ['kana' => 'ぼうし', 'romaji' => 'boushi', 'meanings' => ['hat']],
            ['kana' => 'てぶくろ', 'romaji' => 'tebukuro', 'meanings' => ['gloves']],
            ['kana' => 'かばん', 'romaji' => 'kaban', 'meanings' => ['bag']],
            ['kana' => 'ネクタイ', 'romaji' => 'nekutai', 'meanings' => ['necktie']],
            ['kana' => 'ベルト', 'romaji' => 'beruto', 'meanings' => ['belt']],
            ['kana' => 'サンダル', 'romaji' => 'sandaru', 'meanings' => ['sandals']],
            ['kana' => 'ブーツ', 'romaji' => 'buutsu', 'meanings' => ['boots']],
            ['kana' => 'アクセサリー', 'romaji' => 'akusesarii', 'meanings' => ['accessories']],
            ['kana' => 'てちょう', 'romaji' => 'techou', 'meanings' => ['notebook', 'pocket diary']],
            ['kana' => 'えんぴつ', 'romaji' => 'enpitsu', 'meanings' => ['pencil']],
            ['kana' => 'ペン', 'romaji' => 'pen', 'meanings' => ['pen']],
            ['kana' => 'ノート', 'romaji' => 'nooto', 'meanings' => ['notebook']],
            ['kana' => 'かさ', 'romaji' => 'kasa', 'meanings' => ['umbrella']],
        ]);

        // Konbini & Supermarket
        self::seedCategory('konbini-and-supermarket', 'Konbini & Supermarket', [
            ['kana' => 'カップめん', 'romaji' => 'kappu men', 'meanings' => ['cup noodles']],
            ['kana' => 'チョコ', 'romaji' => 'choko', 'meanings' => ['chocolate']],
            ['kana' => 'アイス', 'romaji' => 'aisu', 'meanings' => ['ice cream']],
            ['kana' => 'しんぶん', 'romaji' => 'shinbun', 'meanings' => ['newspaper']],
            ['kana' => 'ざっし', 'romaji' => 'zasshi', 'meanings' => ['magazine']],
            ['kana' => 'でんち', 'romaji' => 'denchi', 'meanings' => ['batteries']],
            ['kana' => 'シャンプー', 'romaji' => 'shanpuu', 'meanings' => ['shampoo']],
            ['kana' => 'リンス', 'romaji' => 'rinsu', 'meanings' => ['conditioner']],
            ['kana' => 'はぶらし', 'romaji' => 'haburashi', 'meanings' => ['toothbrush']],
            ['kana' => 'はみがき', 'romaji' => 'hamigaki', 'meanings' => ['toothpaste']],
            ['kana' => 'ごみぶくろ', 'romaji' => 'gomibukuro', 'meanings' => ['trash bag']],
            ['kana' => 'マスク', 'romaji' => 'masuku', 'meanings' => ['face mask']],
            ['kana' => 'ひやけどめ', 'romaji' => 'hiyakedome', 'meanings' => ['sunscreen']],
            ['kana' => 'カイロ', 'romaji' => 'kairo', 'meanings' => ['disposable hand warmer']],
            ['kana' => 'ばんそうこう', 'romaji' => 'bansoukou', 'meanings' => ['band-aid']],
            ['kana' => 'テープ', 'romaji' => 'teepu', 'meanings' => ['tape']],
            ['kana' => 'のり', 'romaji' => 'nori', 'meanings' => ['glue']],
            ['kana' => 'えんぴつけずり', 'romaji' => 'enpitsukezuri', 'meanings' => ['pencil sharpener']],
            ['kana' => 'ライター', 'romaji' => 'raitaa', 'meanings' => ['lighter']],
            ['kana' => 'せんぷうき', 'romaji' => 'senpuuki', 'meanings' => ['electric fan']],
            ['kana' => 'でんきゅう', 'romaji' => 'denkyuu', 'meanings' => ['light bulb']],
            ['kana' => 'メモちょう', 'romaji' => 'memo chou', 'meanings' => ['memo pad']],
            ['kana' => 'メールびん', 'romaji' => 'meerubin', 'meanings' => ['mailing envelope']],
            ['kana' => 'ふうとう', 'romaji' => 'fuutou', 'meanings' => ['envelope']],
            ['kana' => 'きって', 'romaji' => 'kitte', 'meanings' => ['stamp']],
            ['kana' => 'はがき', 'romaji' => 'hagaki', 'meanings' => ['postcard']],
            ['kana' => 'ティッシュ', 'romaji' => 'tisshu', 'meanings' => ['tissue']],
            ['kana' => 'トイレットペーパー', 'romaji' => 'toiretto peepaa', 'meanings' => ['toilet paper']],
        ]);

        // Household & Toiletries
        self::seedCategory('household-and-toiletries', 'Household & Toiletries', [
            ['kana' => 'タオル', 'romaji' => 'taoru', 'meanings' => ['towel']],
            ['kana' => 'バスタオル', 'romaji' => 'basutaoru', 'meanings' => ['bath towel']],
            ['kana' => 'せっけん', 'romaji' => 'sekken', 'meanings' => ['soap']],
            ['kana' => 'シャワー', 'romaji' => 'shawaa', 'meanings' => ['shower']],
            ['kana' => 'トイレ', 'romaji' => 'toire', 'meanings' => ['toilet']],
            ['kana' => 'おふろ', 'romaji' => 'ofuro', 'meanings' => ['bath']],
            ['kana' => 'ふろおけ', 'romaji' => 'furooke', 'meanings' => ['bath bucket']],
            ['kana' => 'トイレブラシ', 'romaji' => 'toire burashi', 'meanings' => ['toilet brush']],
            ['kana' => 'そうじき', 'romaji' => 'soujiki', 'meanings' => ['vacuum cleaner']],
            ['kana' => 'ほうき', 'romaji' => 'houki', 'meanings' => ['broom']],
            ['kana' => 'ちりとり', 'romaji' => 'chiritori', 'meanings' => ['dustpan']],
            ['kana' => 'モップ', 'romaji' => 'moppu', 'meanings' => ['mop']],
            ['kana' => 'ごみばこ', 'romaji' => 'gomibako', 'meanings' => ['trash bin']],
            ['kana' => 'でんき', 'romaji' => 'denki', 'meanings' => ['electricity', 'light']],
            ['kana' => 'スイッチ', 'romaji' => 'suicchi', 'meanings' => ['switch']],
            ['kana' => 'エアコン', 'romaji' => 'eakon', 'meanings' => ['air conditioner']],
            ['kana' => 'ストーブ', 'romaji' => 'sutoobu', 'meanings' => ['heater']],
            ['kana' => 'まど', 'romaji' => 'mado', 'meanings' => ['window']],
            ['kana' => 'ドア', 'romaji' => 'doa', 'meanings' => ['door']],
            ['kana' => 'かがみ', 'romaji' => 'kagami', 'meanings' => ['mirror']],
            ['kana' => 'カーテン', 'romaji' => 'kaaten', 'meanings' => ['curtain']],
            ['kana' => 'ベッド', 'romaji' => 'beddo', 'meanings' => ['bed']],
            ['kana' => 'まくら', 'romaji' => 'makura', 'meanings' => ['pillow']],
            ['kana' => 'ふとん', 'romaji' => 'futon', 'meanings' => ['futon']],
            ['kana' => 'もうふ', 'romaji' => 'moufu', 'meanings' => ['blanket']],
            ['kana' => 'たんす', 'romaji' => 'tansu', 'meanings' => ['dresser', 'chest']],
            ['kana' => 'ハンガー', 'romaji' => 'hangaa', 'meanings' => ['hanger']],
            ['kana' => 'アイロン', 'romaji' => 'airon', 'meanings' => ['iron']],
            ['kana' => 'せんたくき', 'romaji' => 'sentakuki', 'meanings' => ['washing machine']],
            ['kana' => 'ものほし', 'romaji' => 'monohoshi', 'meanings' => ['laundry hanger']],
        ]);

        // Tech & Tools
        self::seedCategory('tech-and-tools', 'Tech & Tools', [
            ['kana' => 'スマホ', 'romaji' => 'sumaho', 'meanings' => ['smartphone']],
            ['kana' => 'けいたい', 'romaji' => 'keitai', 'meanings' => ['cellphone']],
            ['kana' => 'パソコン', 'romaji' => 'pasokon', 'meanings' => ['computer', 'laptop']],
            ['kana' => 'タブレット', 'romaji' => 'taburetto', 'meanings' => ['tablet']],
            ['kana' => 'でんわ', 'romaji' => 'denwa', 'meanings' => ['telephone']],
            ['kana' => 'イヤホン', 'romaji' => 'iyahon', 'meanings' => ['earphones']],
            ['kana' => 'ヘッドホン', 'romaji' => 'heddohon', 'meanings' => ['headphones']],
            ['kana' => 'リモコン', 'romaji' => 'rimokon', 'meanings' => ['remote control']],
            ['kana' => 'マウス', 'romaji' => 'mausu', 'meanings' => ['computer mouse']],
            ['kana' => 'キーボード', 'romaji' => 'kiiboodo', 'meanings' => ['keyboard']],
            ['kana' => 'スクリーン', 'romaji' => 'sukuriin', 'meanings' => ['screen']],
            ['kana' => 'ワイファイルーター', 'romaji' => 'waifai ruutaa', 'meanings' => ['WiFi router']],
            ['kana' => 'ケーブル', 'romaji' => 'keeburu', 'meanings' => ['cable']],
            ['kana' => 'じゅうでんき', 'romaji' => 'juudenki', 'meanings' => ['charger']],
            ['kana' => 'USBメモリ', 'romaji' => 'yuuesubii memori', 'meanings' => ['USB drive']],
            ['kana' => 'SDカード', 'romaji' => 'esudii kaado', 'meanings' => ['SD card']],
            ['kana' => 'カメラ', 'romaji' => 'kamera', 'meanings' => ['camera']],
            ['kana' => 'ラジオ', 'romaji' => 'rajio', 'meanings' => ['radio']],
            ['kana' => 'テレビ', 'romaji' => 'terebi', 'meanings' => ['television']],
            ['kana' => 'プリンター', 'romaji' => 'purintaa', 'meanings' => ['printer']],
            ['kana' => 'スキャナー', 'romaji' => 'sukyanaa', 'meanings' => ['scanner']],
            ['kana' => 'とけい', 'romaji' => 'tokei', 'meanings' => ['clock', 'watch']],
            ['kana' => 'アラーム', 'romaji' => 'araamu', 'meanings' => ['alarm']],
            ['kana' => 'はさみ', 'romaji' => 'hasami', 'meanings' => ['scissors']],
            ['kana' => 'ドライバー', 'romaji' => 'doraibaa', 'meanings' => ['screwdriver']],
            ['kana' => 'レンチ', 'romaji' => 'renchi', 'meanings' => ['wrench']],
            ['kana' => 'かなづち', 'romaji' => 'kanazuchi', 'meanings' => ['hammer']],
            ['kana' => 'ものさし', 'romaji' => 'monosashi', 'meanings' => ['ruler']],
            ['kana' => 'ホッチキス', 'romaji' => 'hotchikisu', 'meanings' => ['stapler']],
            ['kana' => 'カッター', 'romaji' => 'kattaa', 'meanings' => ['box cutter']],
            ['kana' => 'クリップ', 'romaji' => 'kurippu', 'meanings' => ['paper clip']],
            ['kana' => 'じょうぎ', 'romaji' => 'jougi', 'meanings' => ['ruler (alternative)']],
        ]);

        // Government/Admin/Paperwork
        self::seedCategory('government-admin-paperwork', 'Government/Admin/Paperwork', [
            ['kana' => 'パスポート', 'romaji' => 'pasupooto', 'meanings' => ['passport']],
            ['kana' => 'しょうめいしょ', 'romaji' => 'shoumeisho', 'meanings' => ['certificate', 'proof of ID']],
            ['kana' => 'がいこくじんカード', 'romaji' => 'gaikokujin kaado', 'meanings' => ['residence card']],
            ['kana' => 'かみ', 'romaji' => 'kami', 'meanings' => ['paper']],
            ['kana' => 'しょるい', 'romaji' => 'shorui', 'meanings' => ['document']],
            ['kana' => 'しんせいしょ', 'romaji' => 'shinseisho', 'meanings' => ['application form']],
            ['kana' => 'もうしこみしょ', 'romaji' => 'moushikomisho', 'meanings' => ['registration form']],
            ['kana' => 'はんこ', 'romaji' => 'hanko', 'meanings' => ['personal seal']],
            ['kana' => 'いんかん', 'romaji' => 'inkan', 'meanings' => ['registered seal']],
            ['kana' => 'じゅうしょ', 'romaji' => 'juusho', 'meanings' => ['address']],
            ['kana' => 'けいたいばんごう', 'romaji' => 'keitai bangou', 'meanings' => ['mobile number']],
            ['kana' => 'ばんごう', 'romaji' => 'bangou', 'meanings' => ['number']],
            ['kana' => 'せいねんがっぴ', 'romaji' => 'seinengappi', 'meanings' => ['date of birth']],
            ['kana' => 'けんこうほけん', 'romaji' => 'kenkou hoken', 'meanings' => ['health insurance']],
            ['kana' => 'こくみんねんきん', 'romaji' => 'kokumin nenkin', 'meanings' => ['national pension']],
            ['kana' => 'ぜいきん', 'romaji' => 'zeikin', 'meanings' => ['tax']],
            ['kana' => 'くやくしょ', 'romaji' => 'kuyakusho', 'meanings' => ['ward office']],
            ['kana' => 'としょかん', 'romaji' => 'toshokan', 'meanings' => ['library']],
            ['kana' => 'ゆうびんきょく', 'romaji' => 'yuubinkyoku', 'meanings' => ['post office']],
            ['kana' => 'ぎんこう', 'romaji' => 'ginkou', 'meanings' => ['bank']],
            ['kana' => 'ATM', 'romaji' => 'eeteemu', 'meanings' => ['ATM']],
            ['kana' => 'こうざ', 'romaji' => 'kouza', 'meanings' => ['bank account']],
            ['kana' => 'キャッシュカード', 'romaji' => 'kyashu kaado', 'meanings' => ['cash card', 'bank card']],
            ['kana' => 'てがみ', 'romaji' => 'tegami', 'meanings' => ['letter']],
            ['kana' => 'にゅうがくしょうめいしょ', 'romaji' => 'nyuugaku shoumeisho', 'meanings' => ['school enrollment certificate']],
            ['kana' => 'がくせいしょう', 'romaji' => 'gakuseisho', 'meanings' => ['student ID']],
            ['kana' => 'こうふしょ', 'romaji' => 'koufusho', 'meanings' => ['official receipt', 'issue slip']],
            ['kana' => 'じゅうみんひょう', 'romaji' => 'juuminhyou', 'meanings' => ['residence certificate']],
            ['kana' => 'せいふく', 'romaji' => 'seifuku', 'meanings' => ['uniform']],
            ['kana' => 'こくみんけんこうほけん', 'romaji' => 'kokumin kenkou hoken', 'meanings' => ['national health insurance']],
        ]);
    }

    private function seedCategory(string $slug, string $type, array $items): void
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        foreach ($items as $entry) {
            $this->createItemPair($category->id, $type, $entry);
        }
    }

    private function createItemPair(int $categoryId, string $type, array $entry): void
    {
        $meanings = $entry['meanings'];
        $mainMeaning = $meanings[0];

        // Handle optional extra fullMeaning with parentheses
        if (preg_match('/^(.+?)\s*\((.+)\)$/', $mainMeaning, $matches)) {
            $cleanMeaning = trim($matches[1]);
            $fullMeaning = trim($mainMeaning);
        } else {
            $cleanMeaning = $mainMeaning;
            $fullMeaning = null;
        }

        $altPrompts = array_slice($meanings, 1);
        if ($fullMeaning && $fullMeaning !== $cleanMeaning) {
            array_unshift($altPrompts, $fullMeaning);
        }

        // Split kana/romaji on slashes
        $kanaVariants = preg_split('/\s*\/\s*/u', $entry['kana']);
        $romajiVariants = preg_split('/\s*\/\s*/', $entry['romaji']);

        $mainKana = $kanaVariants[0];
        $altKana = array_slice($kanaVariants, 1);
        $altRomaji = array_slice($romajiVariants, 1);

        // Recognition
        Item::create([
            'category_id' => $categoryId,
            'prompt' => $entry['kana'],
            'answer' => $cleanMeaning,
            'romaji' => $entry['romaji'] ?? '',
            'direction' => 'recognition',
            'type' => $type,
            'extra_data' => !empty($altPrompts) ? json_encode(['alt_answers' => $altPrompts]) : null,
        ]);

        // Define kana-only types where romaji should NOT be accepted for recall
        $kanaOnlyTypes = ['Main Kana', 'Dakuten Kana', 'Combination Kana', 'All Kana'];

        // Prepare alt answers for recall
        $recallAltAnswers = in_array($type, $kanaOnlyTypes)
            ? $altKana
            : array_merge($altKana, $altRomaji);
        $recallExtra = [];

        if (!empty($altPrompts)) {
            $recallExtra['alt_prompts'] = $altPrompts;
        }

        if (!empty($recallAltAnswers)) {
            $recallExtra['alt_answers'] = $recallAltAnswers;
        }

        // Recall
        Item::create([
            'category_id' => $categoryId,
            'prompt' => $fullMeaning ?? $cleanMeaning,
            'answer' => $mainKana,
            'romaji' => $romajiVariants[0] ?? '',
            'direction' => 'recall',
            'type' => $type,
            'extra_data' => !empty($recallExtra) ? json_encode($recallExtra) : null,
        ]);
    }
}
