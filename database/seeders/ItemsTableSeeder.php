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
        $this->seedCategory('hiragana-dakuten-kana', 'Dakuten Kana', [
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
        $this->seedCategory('hiragana-combination-kana', 'Combination Kana', [
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
        $this->seedCategory('hiragana-all-kana', 'All Kana', [
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

        // Katakana
        //Main Katakana
        $this->seedCategory('katakana-main-kana', 'Main Kana', [
            ['kana' => 'ア', 'romaji' => 'a', 'meanings' => ['a']],
            ['kana' => 'イ', 'romaji' => 'i', 'meanings' => ['i']],
            ['kana' => 'ウ', 'romaji' => 'u', 'meanings' => ['u']],
            ['kana' => 'エ', 'romaji' => 'e', 'meanings' => ['e']],
            ['kana' => 'オ', 'romaji' => 'o', 'meanings' => ['o']],

            ['kana' => 'カ', 'romaji' => 'ka', 'meanings' => ['ka']],
            ['kana' => 'キ', 'romaji' => 'ki', 'meanings' => ['ki']],
            ['kana' => 'ク', 'romaji' => 'ku', 'meanings' => ['ku']],
            ['kana' => 'ケ', 'romaji' => 'ke', 'meanings' => ['ke']],
            ['kana' => 'コ', 'romaji' => 'ko', 'meanings' => ['ko']],

            ['kana' => 'サ', 'romaji' => 'sa', 'meanings' => ['sa']],
            ['kana' => 'シ', 'romaji' => 'shi', 'meanings' => ['shi']],
            ['kana' => 'ス', 'romaji' => 'su', 'meanings' => ['su']],
            ['kana' => 'セ', 'romaji' => 'se', 'meanings' => ['se']],
            ['kana' => 'ソ', 'romaji' => 'so', 'meanings' => ['so']],

            ['kana' => 'タ', 'romaji' => 'ta', 'meanings' => ['ta']],
            ['kana' => 'チ', 'romaji' => 'chi', 'meanings' => ['chi']],
            ['kana' => 'ツ', 'romaji' => 'tsu', 'meanings' => ['tsu']],
            ['kana' => 'テ', 'romaji' => 'te', 'meanings' => ['te']],
            ['kana' => 'ト', 'romaji' => 'to', 'meanings' => ['to']],

            ['kana' => 'ナ', 'romaji' => 'na', 'meanings' => ['na']],
            ['kana' => 'ニ', 'romaji' => 'ni', 'meanings' => ['ni']],
            ['kana' => 'ヌ', 'romaji' => 'nu', 'meanings' => ['nu']],
            ['kana' => 'ネ', 'romaji' => 'ne', 'meanings' => ['ne']],
            ['kana' => 'ノ', 'romaji' => 'no', 'meanings' => ['no']],

            ['kana' => 'ハ', 'romaji' => 'ha', 'meanings' => ['ha']],
            ['kana' => 'ヒ', 'romaji' => 'hi', 'meanings' => ['hi']],
            ['kana' => 'フ', 'romaji' => 'fu', 'meanings' => ['fu']],
            ['kana' => 'ヘ', 'romaji' => 'he', 'meanings' => ['he']],
            ['kana' => 'ホ', 'romaji' => 'ho', 'meanings' => ['ho']],

            ['kana' => 'マ', 'romaji' => 'ma', 'meanings' => ['ma']],
            ['kana' => 'ミ', 'romaji' => 'mi', 'meanings' => ['mi']],
            ['kana' => 'ム', 'romaji' => 'mu', 'meanings' => ['mu']],
            ['kana' => 'メ', 'romaji' => 'me', 'meanings' => ['me']],
            ['kana' => 'モ', 'romaji' => 'mo', 'meanings' => ['mo']],

            ['kana' => 'ヤ', 'romaji' => 'ya', 'meanings' => ['ya']],
            ['kana' => 'ユ', 'romaji' => 'yu', 'meanings' => ['yu']],
            ['kana' => 'ヨ', 'romaji' => 'yo', 'meanings' => ['yo']],

            ['kana' => 'ラ', 'romaji' => 'ra', 'meanings' => ['ra']],
            ['kana' => 'リ', 'romaji' => 'ri', 'meanings' => ['ri']],
            ['kana' => 'ル', 'romaji' => 'ru', 'meanings' => ['ru']],
            ['kana' => 'レ', 'romaji' => 're', 'meanings' => ['re']],
            ['kana' => 'ロ', 'romaji' => 'ro', 'meanings' => ['ro']],

            ['kana' => 'ワ', 'romaji' => 'wa', 'meanings' => ['wa']],
            ['kana' => 'ヲ', 'romaji' => 'wo', 'meanings' => ['wo']],
            ['kana' => 'ン', 'romaji' => 'n', 'meanings' => ['n']],
        ]);

        // Dakuten Kana
        $this->seedCategory('katakana-dakuten-kana', 'Dakuten Kana', [
            ['kana' => 'ガ', 'romaji' => 'ga', 'meanings' => ['ga']],
            ['kana' => 'ギ', 'romaji' => 'gi', 'meanings' => ['gi']],
            ['kana' => 'グ', 'romaji' => 'gu', 'meanings' => ['gu']],
            ['kana' => 'ゲ', 'romaji' => 'ge', 'meanings' => ['ge']],
            ['kana' => 'ゴ', 'romaji' => 'go', 'meanings' => ['go']],

            ['kana' => 'ザ', 'romaji' => 'za', 'meanings' => ['za']],
            ['kana' => 'ジ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'ズ', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'ゼ', 'romaji' => 'ze', 'meanings' => ['ze']],
            ['kana' => 'ゾ', 'romaji' => 'zo', 'meanings' => ['zo']],

            ['kana' => 'ダ', 'romaji' => 'da', 'meanings' => ['da']],
            ['kana' => 'ヂ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'ヅ', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'デ', 'romaji' => 'de', 'meanings' => ['de']],
            ['kana' => 'ド', 'romaji' => 'do', 'meanings' => ['do']],

            ['kana' => 'バ', 'romaji' => 'ba', 'meanings' => ['ba']],
            ['kana' => 'ビ', 'romaji' => 'bi', 'meanings' => ['bi']],
            ['kana' => 'ブ', 'romaji' => 'bu', 'meanings' => ['bu']],
            ['kana' => 'ベ', 'romaji' => 'be', 'meanings' => ['be']],
            ['kana' => 'ボ', 'romaji' => 'bo', 'meanings' => ['bo']],

            ['kana' => 'パ', 'romaji' => 'pa', 'meanings' => ['pa']],
            ['kana' => 'ピ', 'romaji' => 'pi', 'meanings' => ['pi']],
            ['kana' => 'プ', 'romaji' => 'pu', 'meanings' => ['pu']],
            ['kana' => 'ペ', 'romaji' => 'pe', 'meanings' => ['pe']],
            ['kana' => 'ポ', 'romaji' => 'po', 'meanings' => ['po']],

            ['kana' => 'ヴ', 'romaji' => 'vu', 'meanings' => ['vu']],
        ]);

        // Combination Kana
        $this->seedCategory('katakana-combination-kana', 'Combination Kana', [
            ['kana' => 'キャ', 'romaji' => 'kya', 'meanings' => ['kya']],
            ['kana' => 'キュ', 'romaji' => 'kyu', 'meanings' => ['kyu']],
            ['kana' => 'キョ', 'romaji' => 'kyo', 'meanings' => ['kyo']],

            ['kana' => 'シャ', 'romaji' => 'sha', 'meanings' => ['sha']],
            ['kana' => 'シュ', 'romaji' => 'shu', 'meanings' => ['shu']],
            ['kana' => 'ショ', 'romaji' => 'sho', 'meanings' => ['sho']],

            ['kana' => 'チャ', 'romaji' => 'cha', 'meanings' => ['cha']],
            ['kana' => 'チュ', 'romaji' => 'chu', 'meanings' => ['chu']],
            ['kana' => 'チョ', 'romaji' => 'cho', 'meanings' => ['cho']],

            ['kana' => 'ニャ', 'romaji' => 'nya', 'meanings' => ['nya']],
            ['kana' => 'ニュ', 'romaji' => 'nyu', 'meanings' => ['nyu']],
            ['kana' => 'ニョ', 'romaji' => 'nyo', 'meanings' => ['nyo']],

            ['kana' => 'ヒャ', 'romaji' => 'hya', 'meanings' => ['hya']],
            ['kana' => 'ヒュ', 'romaji' => 'hyu', 'meanings' => ['hyu']],
            ['kana' => 'ヒョ', 'romaji' => 'hyo', 'meanings' => ['hyo']],

            ['kana' => 'ミャ', 'romaji' => 'mya', 'meanings' => ['mya']],
            ['kana' => 'ミュ', 'romaji' => 'myu', 'meanings' => ['myu']],
            ['kana' => 'ミョ', 'romaji' => 'myo', 'meanings' => ['myo']],

            ['kana' => 'リャ', 'romaji' => 'rya', 'meanings' => ['rya']],
            ['kana' => 'リュ', 'romaji' => 'ryu', 'meanings' => ['ryu']],
            ['kana' => 'リョ', 'romaji' => 'ryo', 'meanings' => ['ryo']],

            ['kana' => 'ギャ', 'romaji' => 'gya', 'meanings' => ['gya']],
            ['kana' => 'ギュ', 'romaji' => 'gyu', 'meanings' => ['gyu']],
            ['kana' => 'ギョ', 'romaji' => 'gyo', 'meanings' => ['gyo']],

            ['kana' => 'ジャ', 'romaji' => 'ja', 'meanings' => ['ja']],
            ['kana' => 'ジュ', 'romaji' => 'ju', 'meanings' => ['ju']],
            ['kana' => 'ジョ', 'romaji' => 'jo', 'meanings' => ['jo']],

            ['kana' => 'ヂャ', 'romaji' => 'dya', 'meanings' => ['dya']],
            ['kana' => 'ヂュ', 'romaji' => 'dyu', 'meanings' => ['dyu']],
            ['kana' => 'ヂョ', 'romaji' => 'dyo', 'meanings' => ['dyo']],

            ['kana' => 'ビャ', 'romaji' => 'bya', 'meanings' => ['bya']],
            ['kana' => 'ビュ', 'romaji' => 'byu', 'meanings' => ['byu']],
            ['kana' => 'ビョ', 'romaji' => 'byo', 'meanings' => ['byo']],

            ['kana' => 'ピャ', 'romaji' => 'pya', 'meanings' => ['pya']],
            ['kana' => 'ピュ', 'romaji' => 'pyu', 'meanings' => ['pyu']],
            ['kana' => 'ピョ', 'romaji' => 'pyo', 'meanings' => ['pyo']],

            ['kana' => 'ヴァ', 'romaji' => 'va', 'meanings' => ['va']],
            ['kana' => 'ヴィ', 'romaji' => 'vi', 'meanings' => ['vi']],
            ['kana' => 'ヴェ', 'romaji' => 've', 'meanings' => ['ve']],
            ['kana' => 'ヴォ', 'romaji' => 'vo', 'meanings' => ['vo']],
            ['kana' => 'ヴュ', 'romaji' => 'vyu', 'meanings' => ['vyu']],

            ['kana' => 'ウィ', 'romaji' => 'wi', 'meanings' => ['wi']],
            ['kana' => 'ウェ', 'romaji' => 'we', 'meanings' => ['we']],
            ['kana' => 'ウォ', 'romaji' => 'wo', 'meanings' => ['wo']],

            ['kana' => 'ファ', 'romaji' => 'fa', 'meanings' => ['fa']],
            ['kana' => 'フィ', 'romaji' => 'fi', 'meanings' => ['fi']],
            ['kana' => 'フェ', 'romaji' => 'fe', 'meanings' => ['fe']],
            ['kana' => 'フォ', 'romaji' => 'fo', 'meanings' => ['fo']],
            ['kana' => 'フュ', 'romaji' => 'fyu', 'meanings' => ['fyu']],

            ['kana' => 'ツァ', 'romaji' => 'tsa', 'meanings' => ['tsa']],
            ['kana' => 'ツィ', 'romaji' => 'tsi', 'meanings' => ['tsi']],
            ['kana' => 'ツェ', 'romaji' => 'tse', 'meanings' => ['tse']],
            ['kana' => 'ツォ', 'romaji' => 'tso', 'meanings' => ['tso']],

            ['kana' => 'シェ', 'romaji' => 'she', 'meanings' => ['she']],

            ['kana' => 'ジェ', 'romaji' => 'je', 'meanings' => ['je']],

            ['kana' => 'チェ', 'romaji' => 'che', 'meanings' => ['che']],

            ['kana' => 'ティ', 'romaji' => 'ti', 'meanings' => ['ti']],
            ['kana' => 'ディ', 'romaji' => 'di', 'meanings' => ['di']],
            ['kana' => 'デュ', 'romaji' => 'dyu', 'meanings' => ['dyu']],
            ['kana' => 'トゥ', 'romaji' => 'tu', 'meanings' => ['tu']],
            ['kana' => 'ドゥ', 'romaji' => 'du', 'meanings' => ['du']],
            ['kana' => 'イェ', 'romaji' => 'ye', 'meanings' => ['ye']],
        ]);

        // All Kana
        $this->seedCategory('katakana-all-kana', 'All Kana', [
            ['kana' => 'ア', 'romaji' => 'a', 'meanings' => ['a']],
            ['kana' => 'イ', 'romaji' => 'i', 'meanings' => ['i']],
            ['kana' => 'ウ', 'romaji' => 'u', 'meanings' => ['u']],
            ['kana' => 'エ', 'romaji' => 'e', 'meanings' => ['e']],
            ['kana' => 'オ', 'romaji' => 'o', 'meanings' => ['o']],
            ['kana' => 'カ', 'romaji' => 'ka', 'meanings' => ['ka']],
            ['kana' => 'キ', 'romaji' => 'ki', 'meanings' => ['ki']],
            ['kana' => 'ク', 'romaji' => 'ku', 'meanings' => ['ku']],
            ['kana' => 'ケ', 'romaji' => 'ke', 'meanings' => ['ke']],
            ['kana' => 'コ', 'romaji' => 'ko', 'meanings' => ['ko']],
            ['kana' => 'サ', 'romaji' => 'sa', 'meanings' => ['sa']],
            ['kana' => 'シ', 'romaji' => 'shi', 'meanings' => ['shi']],
            ['kana' => 'ス', 'romaji' => 'su', 'meanings' => ['su']],
            ['kana' => 'セ', 'romaji' => 'se', 'meanings' => ['se']],
            ['kana' => 'ソ', 'romaji' => 'so', 'meanings' => ['so']],
            ['kana' => 'タ', 'romaji' => 'ta', 'meanings' => ['ta']],
            ['kana' => 'チ', 'romaji' => 'chi', 'meanings' => ['chi']],
            ['kana' => 'ツ', 'romaji' => 'tsu', 'meanings' => ['tsu']],
            ['kana' => 'テ', 'romaji' => 'te', 'meanings' => ['te']],
            ['kana' => 'ト', 'romaji' => 'to', 'meanings' => ['to']],
            ['kana' => 'ナ', 'romaji' => 'na', 'meanings' => ['na']],
            ['kana' => 'ニ', 'romaji' => 'ni', 'meanings' => ['ni']],
            ['kana' => 'ヌ', 'romaji' => 'nu', 'meanings' => ['nu']],
            ['kana' => 'ネ', 'romaji' => 'ne', 'meanings' => ['ne']],
            ['kana' => 'ノ', 'romaji' => 'no', 'meanings' => ['no']],
            ['kana' => 'ハ', 'romaji' => 'ha', 'meanings' => ['ha']],
            ['kana' => 'ヒ', 'romaji' => 'hi', 'meanings' => ['hi']],
            ['kana' => 'フ', 'romaji' => 'fu', 'meanings' => ['fu']],
            ['kana' => 'ヘ', 'romaji' => 'he', 'meanings' => ['he']],
            ['kana' => 'ホ', 'romaji' => 'ho', 'meanings' => ['ho']],
            ['kana' => 'マ', 'romaji' => 'ma', 'meanings' => ['ma']],
            ['kana' => 'ミ', 'romaji' => 'mi', 'meanings' => ['mi']],
            ['kana' => 'ム', 'romaji' => 'mu', 'meanings' => ['mu']],
            ['kana' => 'メ', 'romaji' => 'me', 'meanings' => ['me']],
            ['kana' => 'モ', 'romaji' => 'mo', 'meanings' => ['mo']],
            ['kana' => 'ヤ', 'romaji' => 'ya', 'meanings' => ['ya']],
            ['kana' => 'ユ', 'romaji' => 'yu', 'meanings' => ['yu']],
            ['kana' => 'ヨ', 'romaji' => 'yo', 'meanings' => ['yo']],
            ['kana' => 'ラ', 'romaji' => 'ra', 'meanings' => ['ra']],
            ['kana' => 'リ', 'romaji' => 'ri', 'meanings' => ['ri']],
            ['kana' => 'ル', 'romaji' => 'ru', 'meanings' => ['ru']],
            ['kana' => 'レ', 'romaji' => 're', 'meanings' => ['re']],
            ['kana' => 'ロ', 'romaji' => 'ro', 'meanings' => ['ro']],
            ['kana' => 'ワ', 'romaji' => 'wa', 'meanings' => ['wa']],
            ['kana' => 'ヲ', 'romaji' => 'wo', 'meanings' => ['wo']],
            ['kana' => 'ン', 'romaji' => 'n', 'meanings' => ['n']],
            ['kana' => 'ガ', 'romaji' => 'ga', 'meanings' => ['ga']],
            ['kana' => 'ギ', 'romaji' => 'gi', 'meanings' => ['gi']],
            ['kana' => 'グ', 'romaji' => 'gu', 'meanings' => ['gu']],
            ['kana' => 'ゲ', 'romaji' => 'ge', 'meanings' => ['ge']],
            ['kana' => 'ゴ', 'romaji' => 'go', 'meanings' => ['go']],
            ['kana' => 'ザ', 'romaji' => 'za', 'meanings' => ['za']],
            ['kana' => 'ジ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'ズ', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'ゼ', 'romaji' => 'ze', 'meanings' => ['ze']],
            ['kana' => 'ゾ', 'romaji' => 'zo', 'meanings' => ['zo']],
            ['kana' => 'ダ', 'romaji' => 'da', 'meanings' => ['da']],
            ['kana' => 'ヂ', 'romaji' => 'ji', 'meanings' => ['ji']],
            ['kana' => 'ヅ', 'romaji' => 'zu', 'meanings' => ['zu']],
            ['kana' => 'デ', 'romaji' => 'de', 'meanings' => ['de']],
            ['kana' => 'ド', 'romaji' => 'do', 'meanings' => ['do']],
            ['kana' => 'バ', 'romaji' => 'ba', 'meanings' => ['ba']],
            ['kana' => 'ビ', 'romaji' => 'bi', 'meanings' => ['bi']],
            ['kana' => 'ブ', 'romaji' => 'bu', 'meanings' => ['bu']],
            ['kana' => 'ベ', 'romaji' => 'be', 'meanings' => ['be']],
            ['kana' => 'ボ', 'romaji' => 'bo', 'meanings' => ['bo']],
            ['kana' => 'パ', 'romaji' => 'pa', 'meanings' => ['pa']],
            ['kana' => 'ピ', 'romaji' => 'pi', 'meanings' => ['pi']],
            ['kana' => 'プ', 'romaji' => 'pu', 'meanings' => ['pu']],
            ['kana' => 'ペ', 'romaji' => 'pe', 'meanings' => ['pe']],
            ['kana' => 'ポ', 'romaji' => 'po', 'meanings' => ['po']],
            ['kana' => 'ヴ', 'romaji' => 'vu', 'meanings' => ['vu']],
            ['kana' => 'キャ', 'romaji' => 'kya', 'meanings' => ['kya']],
            ['kana' => 'キュ', 'romaji' => 'kyu', 'meanings' => ['kyu']],
            ['kana' => 'キョ', 'romaji' => 'kyo', 'meanings' => ['kyo']],
            ['kana' => 'シャ', 'romaji' => 'sha', 'meanings' => ['sha']],
            ['kana' => 'シュ', 'romaji' => 'shu', 'meanings' => ['shu']],
            ['kana' => 'ショ', 'romaji' => 'sho', 'meanings' => ['sho']],
            ['kana' => 'チャ', 'romaji' => 'cha', 'meanings' => ['cha']],
            ['kana' => 'チュ', 'romaji' => 'chu', 'meanings' => ['chu']],
            ['kana' => 'チョ', 'romaji' => 'cho', 'meanings' => ['cho']],
            ['kana' => 'ニャ', 'romaji' => 'nya', 'meanings' => ['nya']],
            ['kana' => 'ニュ', 'romaji' => 'nyu', 'meanings' => ['nyu']],
            ['kana' => 'ニョ', 'romaji' => 'nyo', 'meanings' => ['nyo']],
            ['kana' => 'ヒャ', 'romaji' => 'hya', 'meanings' => ['hya']],
            ['kana' => 'ヒュ', 'romaji' => 'hyu', 'meanings' => ['hyu']],
            ['kana' => 'ヒョ', 'romaji' => 'hyo', 'meanings' => ['hyo']],
            ['kana' => 'ミャ', 'romaji' => 'mya', 'meanings' => ['mya']],
            ['kana' => 'ミュ', 'romaji' => 'myu', 'meanings' => ['myu']],
            ['kana' => 'ミョ', 'romaji' => 'myo', 'meanings' => ['myo']],
            ['kana' => 'リャ', 'romaji' => 'rya', 'meanings' => ['rya']],
            ['kana' => 'リュ', 'romaji' => 'ryu', 'meanings' => ['ryu']],
            ['kana' => 'リョ', 'romaji' => 'ryo', 'meanings' => ['ryo']],
            ['kana' => 'ギャ', 'romaji' => 'gya', 'meanings' => ['gya']],
            ['kana' => 'ギュ', 'romaji' => 'gyu', 'meanings' => ['gyu']],
            ['kana' => 'ギョ', 'romaji' => 'gyo', 'meanings' => ['gyo']],
            ['kana' => 'ジャ', 'romaji' => 'ja', 'meanings' => ['ja']],
            ['kana' => 'ジュ', 'romaji' => 'ju', 'meanings' => ['ju']],
            ['kana' => 'ジョ', 'romaji' => 'jo', 'meanings' => ['jo']],
            ['kana' => 'ヂャ', 'romaji' => 'dya', 'meanings' => ['dya']],
            ['kana' => 'ヂュ', 'romaji' => 'dyu', 'meanings' => ['dyu']],
            ['kana' => 'ヂョ', 'romaji' => 'dyo', 'meanings' => ['dyo']],
            ['kana' => 'ビャ', 'romaji' => 'bya', 'meanings' => ['bya']],
            ['kana' => 'ビュ', 'romaji' => 'byu', 'meanings' => ['byu']],
            ['kana' => 'ビョ', 'romaji' => 'byo', 'meanings' => ['byo']],
            ['kana' => 'ピャ', 'romaji' => 'pya', 'meanings' => ['pya']],
            ['kana' => 'ピュ', 'romaji' => 'pyu', 'meanings' => ['pyu']],
            ['kana' => 'ピョ', 'romaji' => 'pyo', 'meanings' => ['pyo']],
            ['kana' => 'ヴァ', 'romaji' => 'va', 'meanings' => ['va']],
            ['kana' => 'ヴィ', 'romaji' => 'vi', 'meanings' => ['vi']],
            ['kana' => 'ヴェ', 'romaji' => 've', 'meanings' => ['ve']],
            ['kana' => 'ヴォ', 'romaji' => 'vo', 'meanings' => ['vo']],
            ['kana' => 'ヴュ', 'romaji' => 'vyu', 'meanings' => ['vyu']],
            ['kana' => 'ウィ', 'romaji' => 'wi', 'meanings' => ['wi']],
            ['kana' => 'ウェ', 'romaji' => 'we', 'meanings' => ['we']],
            ['kana' => 'ウォ', 'romaji' => 'wo', 'meanings' => ['wo']],
            ['kana' => 'ファ', 'romaji' => 'fa', 'meanings' => ['fa']],
            ['kana' => 'フィ', 'romaji' => 'fi', 'meanings' => ['fi']],
            ['kana' => 'フェ', 'romaji' => 'fe', 'meanings' => ['fe']],
            ['kana' => 'フォ', 'romaji' => 'fo', 'meanings' => ['fo']],
            ['kana' => 'フュ', 'romaji' => 'fyu', 'meanings' => ['fyu']],
            ['kana' => 'ツァ', 'romaji' => 'tsa', 'meanings' => ['tsa']],
            ['kana' => 'ツィ', 'romaji' => 'tsi', 'meanings' => ['tsi']],
            ['kana' => 'ツェ', 'romaji' => 'tse', 'meanings' => ['tse']],
            ['kana' => 'ツォ', 'romaji' => 'tso', 'meanings' => ['tso']],
            ['kana' => 'シェ', 'romaji' => 'she', 'meanings' => ['she']],
            ['kana' => 'ジェ', 'romaji' => 'je', 'meanings' => ['je']],
            ['kana' => 'チェ', 'romaji' => 'che', 'meanings' => ['che']],
            ['kana' => 'ティ', 'romaji' => 'ti', 'meanings' => ['ti']],
            ['kana' => 'ディ', 'romaji' => 'di', 'meanings' => ['di']],
            ['kana' => 'デュ', 'romaji' => 'dyu', 'meanings' => ['dyu']],
            ['kana' => 'トゥ', 'romaji' => 'tu', 'meanings' => ['tu']],
            ['kana' => 'ドゥ', 'romaji' => 'du', 'meanings' => ['du']],
            ['kana' => 'イェ', 'romaji' => 'ye', 'meanings' => ['ye']],
        ]);

        // Kanji N5
        // Numbers & Time
        $this->seedCategory('kanji-n5-numbers-and-time', 'Numbers & Time', [
            ['kana' => '一', 'romaji' => 'ichi', 'meanings' => [
                'en' => ['one'],
                'nl' => ['één']
            ]],
            ['kana' => '二', 'romaji' => 'ni', 'meanings' => [
                'en' => ['two'],
                'nl' => ['twee']
            ]],
            ['kana' => '三', 'romaji' => 'san', 'meanings' => [
                'en' => ['three'],
                'nl' => ['drie']
            ]],
            ['kana' => '四', 'romaji' => 'shi / yon', 'meanings' => [
                'en' => ['four'],
                'nl' => ['vier']
            ]],
            ['kana' => '五', 'romaji' => 'go', 'meanings' => [
                'en' => ['five'],
                'nl' => ['vijf']
            ]],
            ['kana' => '六', 'romaji' => 'roku', 'meanings' => [
                'en' => ['six'],
                'nl' => ['zes']
            ]],
            ['kana' => '七', 'romaji' => 'shichi / nana', 'meanings' => [
                'en' => ['seven'],
                'nl' => ['zeven']
            ]],
            ['kana' => '八', 'romaji' => 'hachi', 'meanings' => [
                'en' => ['eight'],
                'nl' => ['acht']
            ]],
            ['kana' => '九', 'romaji' => 'kyuu / ku', 'meanings' => [
                'en' => ['nine'],
                'nl' => ['negen']
            ]],
            ['kana' => '十', 'romaji' => 'juu', 'meanings' => [
                'en' => ['ten'],
                'nl' => ['tien']
            ]],
            ['kana' => '百', 'romaji' => 'hyaku', 'meanings' => [
                'en' => ['hundred'],
                'nl' => ['honderd']
            ]],
            ['kana' => '千', 'romaji' => 'sen', 'meanings' => [
                'en' => ['thousand'],
                'nl' => ['duizend']
            ]],
            ['kana' => '万', 'romaji' => 'man', 'meanings' => [
                'en' => ['ten thousand'],
                'nl' => ['tienduizend']
            ]],
            ['kana' => '時', 'romaji' => 'ji', 'meanings' => [
                'en' => ["o'clock", 'time'],
                'nl' => ['uur', 'tijd']
            ]],
            ['kana' => '分', 'romaji' => 'fun / pun', 'meanings' => [
                'en' => ['minute', 'part'],
                'nl' => ['minuut', 'deel']
            ]],
            ['kana' => '半', 'romaji' => 'han', 'meanings' => [
                'en' => ['half'],
                'nl' => ['half']
            ]],
        ]);

        // People & Pronouns
        $this->seedCategory('kanji-n5-people-and-pronouns', 'People & Pronouns', [
            ['kana' => '人', 'romaji' => 'hito / jin / nin', 'meanings' => [
                'en' => ['person'],
                'nl' => ['persoon']
            ]],
            ['kana' => '私', 'romaji' => 'watashi', 'meanings' => [
                'en' => ['I', 'me'],
                'nl' => ['ik', 'mij']
            ]],
            ['kana' => '男', 'romaji' => 'otoko', 'meanings' => [
                'en' => ['man', 'male'],
                'nl' => ['man', 'mannelijk']
            ]],
            ['kana' => '女', 'romaji' => 'onna', 'meanings' => [
                'en' => ['woman', 'female'],
                'nl' => ['vrouw', 'vrouwelijk']
            ]],
            ['kana' => '子', 'romaji' => 'ko', 'meanings' => [
                'en' => ['child'],
                'nl' => ['kind']
            ]],
            ['kana' => '父', 'romaji' => 'chichi', 'meanings' => [
                'en' => ['father'],
                'nl' => ['vader']
            ]],
            ['kana' => '母', 'romaji' => 'haha', 'meanings' => [
                'en' => ['mother'],
                'nl' => ['moeder']
            ]],
            ['kana' => '友', 'romaji' => 'tomo', 'meanings' => [
                'en' => ['friend'],
                'nl' => ['vriend']
            ]],
            ['kana' => '名', 'romaji' => 'na / mei / myou', 'meanings' => [
                'en' => ['name'],
                'nl' => ['naam']
            ]],
        ]);

        // Nature & Environment
        $this->seedCategory('kanji-n5-nature-and-environment', 'Nature & Environment', [
            ['kana' => '山', 'romaji' => 'yama / san', 'meanings' => [
                'en' => ['mountain'],
                'nl' => ['berg']
            ]],
            ['kana' => '川', 'romaji' => 'kawa', 'meanings' => [
                'en' => ['river'],
                'nl' => ['rivier']
            ]],
            ['kana' => '田', 'romaji' => 'ta / den', 'meanings' => [
                'en' => ['rice field'],
                'nl' => ['rijstveld']
            ]],
            ['kana' => '天', 'romaji' => 'ten', 'meanings' => [
                'en' => ['heaven', 'sky'],
                'nl' => ['hemel', 'lucht']
            ]],
            ['kana' => '気', 'romaji' => 'ki', 'meanings' => [
                'en' => ['spirit', 'air'],
                'nl' => ['geest', 'lucht']
            ]],
            ['kana' => '空', 'romaji' => 'sora / kuu / kara', 'meanings' => [
                'en' => ['sky', 'empty'],
                'nl' => ['lucht', 'leeg']
            ]],
            ['kana' => '雨', 'romaji' => 'ame', 'meanings' => [
                'en' => ['rain'],
                'nl' => ['regen']
            ]],
            ['kana' => '火', 'romaji' => 'hi / ka', 'meanings' => [
                'en' => ['fire'],
                'nl' => ['vuur']
            ]],
            ['kana' => '水', 'romaji' => 'mizu / sui', 'meanings' => [
                'en' => ['water'],
                'nl' => ['water']
            ]],
            ['kana' => '木', 'romaji' => 'ki / moku', 'meanings' => [
                'en' => ['tree', 'wood'],
                'nl' => ['boom', 'hout']
            ]],
            ['kana' => '金', 'romaji' => 'kane / kin', 'meanings' => [
                'en' => ['gold', 'money'],
                'nl' => ['goud', 'geld']
            ]],
            ['kana' => '土', 'romaji' => 'tsuchi / do', 'meanings' => [
                'en' => ['earth', 'soil'],
                'nl' => ['aarde', 'grond']
            ]],
        ]);

        // Daily Life & School
        $this->seedCategory('kanji-n5-daily-life-and-school', 'Daily Life & School', [
            ['kana' => '日', 'romaji' => 'hi / nichi / jitsu', 'meanings' => [
                'en' => ['day', 'sun'],
                'nl' => ['dag', 'zon']
            ]],
            ['kana' => '月', 'romaji' => 'tsuki / getsu / gatsu', 'meanings' => [
                'en' => ['moon', 'month'],
                'nl' => ['maan', 'maand']
            ]],
            ['kana' => '年', 'romaji' => 'toshi / nen', 'meanings' => [
                'en' => ['year'],
                'nl' => ['jaar']
            ]],
            ['kana' => '先', 'romaji' => 'saki / sen', 'meanings' => [
                'en' => ['ahead', 'previous'],
                'nl' => ['vooruit', 'vorige']
            ]],
            ['kana' => '生', 'romaji' => 'sei / shou / ikiru / nama', 'meanings' => [
                'en' => ['life', 'birth', 'raw'],
                'nl' => ['leven', 'geboorte', 'rauw']
            ]],
            ['kana' => '学', 'romaji' => 'gaku / mana', 'meanings' => [
                'en' => ['study', 'learning'],
                'nl' => ['studie', 'leren']
            ]],
            ['kana' => '校', 'romaji' => 'kou', 'meanings' => [
                'en' => ['school'],
                'nl' => ['school']
            ]],
            ['kana' => '時', 'romaji' => 'ji', 'meanings' => [
                'en' => ['time', 'hour'],
                'nl' => ['tijd', 'uur']
            ]],
            ['kana' => '間', 'romaji' => 'aida / kan', 'meanings' => [
                'en' => ['interval', 'space'],
                'nl' => ['interval', 'ruimte']
            ]],
        ]);

        // Common Verbs & Adjectives
        $this->seedCategory('kanji-n5-verbs-and-adjectives', 'Common Verbs & Adjectives', [
            ['kana' => '行', 'romaji' => 'iku / kou / gyou', 'meanings' => [
                'en' => ['to go'],
                'nl' => ['gaan']
            ]],
            ['kana' => '来', 'romaji' => 'kuru / rai', 'meanings' => [
                'en' => ['to come'],
                'nl' => ['komen']
            ]],
            ['kana' => '見', 'romaji' => 'miru / ken', 'meanings' => [
                'en' => ['to see'],
                'nl' => ['zien']
            ]],
            ['kana' => '聞', 'romaji' => 'kiku / bun', 'meanings' => [
                'en' => ['to hear'],
                'nl' => ['horen']
            ]],
            ['kana' => '言', 'romaji' => 'iu / gen / gon', 'meanings' => [
                'en' => ['to say'],
                'nl' => ['zeggen']
            ]],
            ['kana' => '食', 'romaji' => 'taberu / shoku', 'meanings' => [
                'en' => ['to eat'],
                'nl' => ['eten']
            ]],
            ['kana' => '飲', 'romaji' => 'nomu / in', 'meanings' => [
                'en' => ['to drink'],
                'nl' => ['drinken']
            ]],
            ['kana' => '出', 'romaji' => 'deru / shutsu', 'meanings' => [
                'en' => ['to exit', 'to go out'],
                'nl' => ['uitgaan', 'verlaten']
            ]],
            ['kana' => '入', 'romaji' => 'hairu / nyuu', 'meanings' => [
                'en' => ['to enter'],
                'nl' => ['binnenkomen']
            ]],
            ['kana' => '立', 'romaji' => 'tatsu / ritsu', 'meanings' => [
                'en' => ['to stand'],
                'nl' => ['staan']
            ]],
            ['kana' => '休', 'romaji' => 'yasumu / kyuu', 'meanings' => [
                'en' => ['to rest'],
                'nl' => ['rusten']
            ]],
            ['kana' => '買', 'romaji' => 'kau', 'meanings' => [
                'en' => ['to buy'],
                'nl' => ['kopen']
            ]],
            ['kana' => '高', 'romaji' => 'takai / kou', 'meanings' => [
                'en' => ['tall', 'expensive'],
                'nl' => ['lang', 'duur']
            ]],
            ['kana' => '安', 'romaji' => 'yasui / an', 'meanings' => [
                'en' => ['cheap', 'peaceful'],
                'nl' => ['goedkoop', 'vreedzaam']
            ]],
            ['kana' => '大', 'romaji' => 'ookii / dai / tai', 'meanings' => [
                'en' => ['big'],
                'nl' => ['groot']
            ]],
            ['kana' => '小', 'romaji' => 'chiisai / shou', 'meanings' => [
                'en' => ['small'],
                'nl' => ['klein']
            ]],
        ]);

        // Kanji N4
        // Verbs & Actions
        $this->seedCategory('kanji-n4-verbs-and-actions', 'Verbs & Actions', [
            ['kana' => '働', 'romaji' => 'hataraku', 'meanings' => [
                'en' => ['to work'],
                'nl' => ['werken']
            ]],
            ['kana' => '走', 'romaji' => 'hashiru', 'meanings' => [
                'en' => ['to run'],
                'nl' => ['rennen']
            ]],
            ['kana' => '泳', 'romaji' => 'oyogu', 'meanings' => [
                'en' => ['to swim'],
                'nl' => ['zwemmen']
            ]],
            ['kana' => '持', 'romaji' => 'motsu', 'meanings' => [
                'en' => ['to hold'],
                'nl' => ['vasthouden']
            ]],
            ['kana' => '開', 'romaji' => 'hiraku / aku / kai', 'meanings' => [
                'en' => ['to open'],
                'nl' => ['openen']
            ]],
            ['kana' => '閉', 'romaji' => 'tojiru / shimaru / hei', 'meanings' => [
                'en' => ['to close'],
                'nl' => ['sluiten']
            ]],
            ['kana' => '始', 'romaji' => 'hajimeru / hajimaru', 'meanings' => [
                'en' => ['to begin'],
                'nl' => ['beginnen']
            ]],
            ['kana' => '終', 'romaji' => 'owaru / shu', 'meanings' => [
                'en' => ['to end'],
                'nl' => ['eindigen']
            ]],
        ]);

        // Time & Frequency
        $this->seedCategory('kanji-n4-time-and-frequency', 'Time & Frequency', [
            ['kana' => '曜', 'romaji' => 'you', 'meanings' => [
                'en' => ['day of the week'],
                'nl' => ['weekdag']
            ]],
            ['kana' => '毎', 'romaji' => 'mai', 'meanings' => [
                'en' => ['every'],
                'nl' => ['iedere']
            ]],
            ['kana' => '週', 'romaji' => 'shuu', 'meanings' => [
                'en' => ['week'],
                'nl' => ['week']
            ]],
            ['kana' => '昨', 'romaji' => 'saku', 'meanings' => [
                'en' => ['last (past)', 'yesterday'],
                'nl' => ['vorige', 'gisteren']
            ]],
            ['kana' => '晩', 'romaji' => 'ban', 'meanings' => [
                'en' => ['evening'],
                'nl' => ['avond']
            ]],
            ['kana' => '午', 'romaji' => 'go', 'meanings' => [
                'en' => ['noon'],
                'nl' => ['middag']
            ]],
        ]);

        // Places & Directions
        $this->seedCategory('kanji-n4-places-and-directions', 'Places & Directions', [
            ['kana' => '駅', 'romaji' => 'eki', 'meanings' => [
                'en' => ['station'],
                'nl' => ['station']
            ]],
            ['kana' => '店', 'romaji' => 'mise / ten', 'meanings' => [
                'en' => ['shop'],
                'nl' => ['winkel']
            ]],
            ['kana' => '場', 'romaji' => 'ba / jou', 'meanings' => [
                'en' => ['place'],
                'nl' => ['plek']
            ]],
            ['kana' => '館', 'romaji' => 'kan', 'meanings' => [
                'en' => ['building (hall)'],
                'nl' => ['gebouw', 'zaal']
            ]],
            ['kana' => '所', 'romaji' => 'tokoro / sho', 'meanings' => [
                'en' => ['place'],
                'nl' => ['plaats']
            ]],
            ['kana' => '近', 'romaji' => 'chikai / kin', 'meanings' => [
                'en' => ['near'],
                'nl' => ['dichtbij']
            ]],
            ['kana' => '遠', 'romaji' => 'tooi / en', 'meanings' => [
                'en' => ['far'],
                'nl' => ['ver']
            ]],
            ['kana' => '通', 'romaji' => 'tooru / tsuu', 'meanings' => [
                'en' => ['to pass', 'traffic'],
                'nl' => ['passeren', 'verkeer']
            ]],
        ]);

        // Emotions & States
        $this->seedCategory('kanji-n4-emotions-and-states', 'Emotions & States', [
            ['kana' => '楽', 'romaji' => 'tanoshii / raku / gaku', 'meanings' => [
                'en' => ['fun', 'comfort', 'music'],
                'nl' => ['plezier', 'comfort', 'muziek']
            ]],
            ['kana' => '悲', 'romaji' => 'kanashii / hi', 'meanings' => [
                'en' => ['sad'],
                'nl' => ['verdrietig']
            ]],
            ['kana' => '怒', 'romaji' => 'okoru / do', 'meanings' => [
                'en' => ['angry'],
                'nl' => ['boos']
            ]],
            ['kana' => '思', 'romaji' => 'omou / shi', 'meanings' => [
                'en' => ['to think'],
                'nl' => ['denken']
            ]],
            ['kana' => '知', 'romaji' => 'shiru / chi', 'meanings' => [
                'en' => ['to know'],
                'nl' => ['weten']
            ]],
            ['kana' => '忘', 'romaji' => 'wasureru / bou', 'meanings' => [
                'en' => ['to forget'],
                'nl' => ['vergeten']
            ]],
        ]);

        // Family & People
        $this->seedCategory('kanji-n4-family-and-people', 'Family & People', [
            ['kana' => '兄', 'romaji' => 'ani / kei / kyou', 'meanings' => [
                'en' => ['older brother'],
                'nl' => ['oudere broer']
            ]],
            ['kana' => '弟', 'romaji' => 'otouto / dai / tei', 'meanings' => [
                'en' => ['younger brother'],
                'nl' => ['jongere broer', 'broertje']
            ]],
            ['kana' => '姉', 'romaji' => 'ane / shi', 'meanings' => [
                'en' => ['older sister'],
                'nl' => ['oudere zus']
            ]],
            ['kana' => '妹', 'romaji' => 'imouto / mai', 'meanings' => [
                'en' => ['younger sister'],
                'nl' => ['jongere zus', 'zusje']
            ]],
            ['kana' => '家', 'romaji' => 'ie / ka / ke', 'meanings' => [
                'en' => ['house', 'home'],
                'nl' => ['huis', 'thuis']
            ]],
            ['kana' => '族', 'romaji' => 'zoku', 'meanings' => [
                'en' => ['tribe', 'family'],
                'nl' => ['stam', 'familie']
            ]],
        ]);

        // Common Nouns & Adjectives
        $this->seedCategory('kanji-n4-nouns-and-adjectives', 'Common Nouns & Adjectives', [
            ['kana' => '色', 'romaji' => 'iro / shoku', 'meanings' => [
                'en' => ['color'],
                'nl' => ['kleur']
            ]],
            ['kana' => '音', 'romaji' => 'oto / on', 'meanings' => [
                'en' => ['sound'],
                'nl' => ['geluid']
            ]],
            ['kana' => '光', 'romaji' => 'hikari / kou', 'meanings' => [
                'en' => ['light'],
                'nl' => ['licht']
            ]],
            ['kana' => '新', 'romaji' => 'atarashii / shin', 'meanings' => [
                'en' => ['new'],
                'nl' => ['nieuw']
            ]],
            ['kana' => '古', 'romaji' => 'furui / ko', 'meanings' => [
                'en' => ['old'],
                'nl' => ['oud']
            ]],
            ['kana' => '明', 'romaji' => 'akarui / mei', 'meanings' => [
                'en' => ['bright'],
                'nl' => ['helder']
            ]],
            ['kana' => '暗', 'romaji' => 'kurai / an', 'meanings' => [
                'en' => ['dark'],
                'nl' => ['donker']
            ]],
            ['kana' => '強', 'romaji' => 'tsuyoi / kyou', 'meanings' => [
                'en' => ['strong'],
                'nl' => ['sterk']
            ]],
        ]);


        // Kanji N3
        // Work & Business
        $this->seedCategory('kanji-n3-work-and-business', 'Work & Business', [
            ['kana' => '会', 'romaji' => 'kai', 'meanings' => [
                'en' => ['meeting', 'association'],
                'nl' => ['vergadering', 'vereniging'],
            ]],
            ['kana' => '業', 'romaji' => 'gyou', 'meanings' => [
                'en' => ['business', 'vocation'],
                'nl' => ['bedrijf', 'beroep'],
            ]],
            ['kana' => '仕', 'romaji' => 'shi', 'meanings' => [
                'en' => ['to serve', 'work'],
                'nl' => ['dienen', 'werk'],
            ]],
            ['kana' => '職', 'romaji' => 'shoku', 'meanings' => [
                'en' => ['job', 'employment'],
                'nl' => ['baan', 'werkgelegenheid'],
            ]],
            ['kana' => '課', 'romaji' => 'ka', 'meanings' => [
                'en' => ['section', 'lesson'],
                'nl' => ['sectie', 'les'],
            ]],
            ['kana' => '務', 'romaji' => 'mu', 'meanings' => [
                'en' => ['duty', 'task'],
                'nl' => ['plicht', 'taak'],
            ]],
            ['kana' => '給', 'romaji' => 'kyuu', 'meanings' => [
                'en' => ['salary', 'wage'],
                'nl' => ['salaris', 'loon'],
            ]],
            ['kana' => '責', 'romaji' => 'seki', 'meanings' => [
                'en' => ['responsibility'],
                'nl' => ['verantwoordelijkheid'],
            ]],
            ['kana' => '任', 'romaji' => 'nin', 'meanings' => [
                'en' => ['duty', 'assignment'],
                'nl' => ['verplichting', 'taak'],
            ]],
            ['kana' => '報', 'romaji' => 'hou', 'meanings' => [
                'en' => ['report', 'news'],
                'nl' => ['rapport', 'nieuws'],
            ]],
        ]);

        // School & Learning
        $this->seedCategory('kanji-n3-school-and-learning', 'School & Learning', [
            ['kana' => '課', 'romaji' => 'ka', 'meanings' => [
                'en' => ['lesson', 'section'],
                'nl' => ['les', 'sectie'],
            ]],
            ['kana' => '試', 'romaji' => 'shi', 'meanings' => [
                'en' => ['test', 'try'],
                'nl' => ['toets', 'proberen'],
            ]],
            ['kana' => '験', 'romaji' => 'ken', 'meanings' => [
                'en' => ['test', 'experience'],
                'nl' => ['test', 'ervaring'],
            ]],
            ['kana' => '質', 'romaji' => 'shitsu', 'meanings' => [
                'en' => ['quality', 'question'],
                'nl' => ['kwaliteit', 'vraag'],
            ]],
            ['kana' => '問', 'romaji' => 'mon', 'meanings' => [
                'en' => ['question'],
                'nl' => ['vraag'],
            ]],
            ['kana' => '答', 'romaji' => 'tou', 'meanings' => [
                'en' => ['answer'],
                'nl' => ['antwoord'],
            ]],
            ['kana' => '教', 'romaji' => 'kyou', 'meanings' => [
                'en' => ['teach', 'religion'],
                'nl' => ['onderwijzen', 'religie'],
            ]],
            ['kana' => '授', 'romaji' => 'ju', 'meanings' => [
                'en' => ['instruct', 'grant'],
                'nl' => ['instrueren', 'toekennen'],
            ]],
            ['kana' => '宿', 'romaji' => 'shuku', 'meanings' => [
                'en' => ['lodge', 'homework'],
                'nl' => ['onderkomen', 'huiswerk'],
            ]],
            ['kana' => '研', 'romaji' => 'ken', 'meanings' => [
                'en' => ['research'],
                'nl' => ['onderzoek'],
            ]],
        ]);

        // Emotions & Psychology
        $this->seedCategory('kanji-n3-emotions-and-psychology', 'Emotions & Psychology', [
            ['kana' => '感', 'romaji' => 'kan', 'meanings' => [
                'en' => ['feeling', 'emotion'],
                'nl' => ['gevoel', 'emotie'],
            ]],
            ['kana' => '情', 'romaji' => 'jou', 'meanings' => [
                'en' => ['emotion', 'condition'],
                'nl' => ['gevoel', 'toestand'],
            ]],
            ['kana' => '怒', 'romaji' => 'do', 'meanings' => [
                'en' => ['anger'],
                'nl' => ['woede'],
            ]],
            ['kana' => '喜', 'romaji' => 'ki', 'meanings' => [
                'en' => ['joy'],
                'nl' => ['vreugde'],
            ]],
            ['kana' => '悲', 'romaji' => 'hi', 'meanings' => [
                'en' => ['sadness'],
                'nl' => ['verdriet'],
            ]],
            ['kana' => '恥', 'romaji' => 'chi', 'meanings' => [
                'en' => ['shame'],
                'nl' => ['schaamte'],
            ]],
            ['kana' => '欲', 'romaji' => 'yoku', 'meanings' => [
                'en' => ['desire'],
                'nl' => ['verlangen'],
            ]],
            ['kana' => '恋', 'romaji' => 'koi', 'meanings' => [
                'en' => ['romantic love'],
                'nl' => ['romantische liefde'],
            ]],
            ['kana' => '愛', 'romaji' => 'ai', 'meanings' => [
                'en' => ['love'],
                'nl' => ['liefde'],
            ]],
            ['kana' => '怖', 'romaji' => 'fu', 'meanings' => [
                'en' => ['fear'],
                'nl' => ['angst'],
            ]],
        ]);

        // Daily Activities
        $this->seedCategory('kanji-n3-daily-activities', 'Daily Activities', [
            ['kana' => '洗', 'romaji' => 'sen', 'meanings' => [
                'en' => ['wash'],
                'nl' => ['wassen'],
            ]],
            ['kana' => '掃', 'romaji' => 'sou', 'meanings' => [
                'en' => ['sweep'],
                'nl' => ['vegen'],
            ]],
            ['kana' => '起', 'romaji' => 'ki', 'meanings' => [
                'en' => ['wake up'],
                'nl' => ['wakker worden'],
            ]],
            ['kana' => '寝', 'romaji' => 'shin', 'meanings' => [
                'en' => ['sleep'],
                'nl' => ['slapen'],
            ]],
            ['kana' => '遊', 'romaji' => 'yuu', 'meanings' => [
                'en' => ['play'],
                'nl' => ['spelen'],
            ]],
            ['kana' => '働', 'romaji' => 'dou', 'meanings' => [
                'en' => ['work'],
                'nl' => ['werken'],
            ]],
            ['kana' => '習', 'romaji' => 'shuu', 'meanings' => [
                'en' => ['learn'],
                'nl' => ['leren'],
            ]],
            ['kana' => '準', 'romaji' => 'jun', 'meanings' => [
                'en' => ['prepare'],
                'nl' => ['voorbereiden'],
            ]],
            ['kana' => '終', 'romaji' => 'shuu', 'meanings' => [
                'en' => ['end'],
                'nl' => ['einde'],
            ]],
            ['kana' => '始', 'romaji' => 'shi', 'meanings' => [
                'en' => ['begin'],
                'nl' => ['beginnen'],
            ]],
        ]);

        // Time & Seasons
        $this->seedCategory('kanji-n3-time-and-seasons', 'Time & Seasons', [
            ['kana' => '秒', 'romaji' => 'byou', 'meanings' => [
                'en' => ['second (time)'],
                'nl' => ['seconde'],
            ]],
            ['kana' => '季', 'romaji' => 'ki', 'meanings' => [
                'en' => ['season'],
                'nl' => ['seizoen'],
            ]],
            ['kana' => '節', 'romaji' => 'setsu', 'meanings' => [
                'en' => ['season', 'joint'],
                'nl' => ['seizoen', 'gewricht'],
            ]],
            ['kana' => '昨', 'romaji' => 'saku', 'meanings' => [
                'en' => ['last (year/day)'],
                'nl' => ['vorig (jaar/dag)'],
            ]],
            ['kana' => '晩', 'romaji' => 'ban', 'meanings' => [
                'en' => ['evening'],
                'nl' => ['avond'],
            ]],
            ['kana' => '夜', 'romaji' => 'ya', 'meanings' => [
                'en' => ['night'],
                'nl' => ['nacht'],
            ]],
            ['kana' => '朝', 'romaji' => 'chou', 'meanings' => [
                'en' => ['morning'],
                'nl' => ['ochtend'],
            ]],
            ['kana' => '昼', 'romaji' => 'chuu', 'meanings' => [
                'en' => ['noon'],
                'nl' => ['middag'],
            ]],
            ['kana' => '末', 'romaji' => 'matsu', 'meanings' => [
                'en' => ['end'],
                'nl' => ['einde'],
            ]],
            ['kana' => '週', 'romaji' => 'shuu', 'meanings' => [
                'en' => ['week'],
                'nl' => ['week'],
            ]],
        ]);

        // Nature & Environment
        $this->seedCategory('kanji-n3-nature-and-environment', 'Nature & Environment', [
            ['kana' => '湖', 'romaji' => 'ko', 'meanings' => [
                'en' => ['lake'],
                'nl' => ['meer'],
            ]],
            ['kana' => '島', 'romaji' => 'tou', 'meanings' => [
                'en' => ['island'],
                'nl' => ['eiland'],
            ]],
            ['kana' => '岸', 'romaji' => 'gan', 'meanings' => [
                'en' => ['shore'],
                'nl' => ['kust'],
            ]],
            ['kana' => '砂', 'romaji' => 'sa', 'meanings' => [
                'en' => ['sand'],
                'nl' => ['zand'],
            ]],
            ['kana' => '氷', 'romaji' => 'hyou', 'meanings' => [
                'en' => ['ice'],
                'nl' => ['ijs'],
            ]],
            ['kana' => '波', 'romaji' => 'ha', 'meanings' => [
                'en' => ['wave'],
                'nl' => ['golf'],
            ]],
            ['kana' => '岩', 'romaji' => 'gan', 'meanings' => [
                'en' => ['rock'],
                'nl' => ['rots'],
            ]],
            ['kana' => '星', 'romaji' => 'sei', 'meanings' => [
                'en' => ['star'],
                'nl' => ['ster'],
            ]],
            ['kana' => '暑', 'romaji' => 'sho', 'meanings' => [
                'en' => ['hot (weather)'],
                'nl' => ['heet (weer)'],
            ]],
            ['kana' => '寒', 'romaji' => 'kan', 'meanings' => [
                'en' => ['cold'],
                'nl' => ['koud'],
            ]],
        ]);

        // Body & Health
        $this->seedCategory('kanji-n3-body-and-health', 'Body & Health', [
            ['kana' => '頭', 'romaji' => 'tou', 'meanings' => [
                'en' => ['head'],
                'nl' => ['hoofd'],
            ]],
            ['kana' => '顔', 'romaji' => 'gan', 'meanings' => [
                'en' => ['face'],
                'nl' => ['gezicht'],
            ]],
            ['kana' => '首', 'romaji' => 'shu', 'meanings' => [
                'en' => ['neck'],
                'nl' => ['nek'],
            ]],
            ['kana' => '胸', 'romaji' => 'kyou', 'meanings' => [
                'en' => ['chest'],
                'nl' => ['borst'],
            ]],
            ['kana' => '腹', 'romaji' => 'fuku', 'meanings' => [
                'en' => ['belly'],
                'nl' => ['buik'],
            ]],
            ['kana' => '背', 'romaji' => 'hai', 'meanings' => [
                'en' => ['back'],
                'nl' => ['rug'],
            ]],
            ['kana' => '骨', 'romaji' => 'kotsu', 'meanings' => [
                'en' => ['bone'],
                'nl' => ['bot'],
            ]],
            ['kana' => '病', 'romaji' => 'byou', 'meanings' => [
                'en' => ['illness'],
                'nl' => ['ziekte'],
            ]],
            ['kana' => '痛', 'romaji' => 'tsuu', 'meanings' => [
                'en' => ['pain'],
                'nl' => ['pijn'],
            ]],
            ['kana' => '薬', 'romaji' => 'yaku', 'meanings' => [
                'en' => ['medicine'],
                'nl' => ['medicijn'],
            ]],
        ]);

        // Movement & Travel
        $this->seedCategory('kanji-n3-movement-and-travel', 'Movement & Travel', [
            ['kana' => '速', 'romaji' => 'soku', 'meanings' => [
                'en' => ['fast'],
                'nl' => ['snel'],
            ]],
            ['kana' => '遅', 'romaji' => 'chi', 'meanings' => [
                'en' => ['slow'],
                'nl' => ['langzaam'],
            ]],
            ['kana' => '通', 'romaji' => 'tsuu', 'meanings' => [
                'en' => ['pass', 'commute'],
                'nl' => ['passeren', 'forensen'],
            ]],
            ['kana' => '進', 'romaji' => 'shin', 'meanings' => [
                'en' => ['advance'],
                'nl' => ['vooruitgang'],
            ]],
            ['kana' => '退', 'romaji' => 'tai', 'meanings' => [
                'en' => ['retreat'],
                'nl' => ['terugtrekken'],
            ]],
            ['kana' => '運', 'romaji' => 'un', 'meanings' => [
                'en' => ['carry', 'luck'],
                'nl' => ['dragen', 'geluk'],
            ]],
            ['kana' => '泊', 'romaji' => 'haku', 'meanings' => [
                'en' => ['stay overnight'],
                'nl' => ['overnachten'],
            ]],
            ['kana' => '遊', 'romaji' => 'yuu', 'meanings' => [
                'en' => ['play'],
                'nl' => ['spelen'],
            ]],
            ['kana' => '降', 'romaji' => 'kou', 'meanings' => [
                'en' => ['descend'],
                'nl' => ['afdalen'],
            ]],
            ['kana' => '乗', 'romaji' => 'jou', 'meanings' => [
                'en' => ['ride'],
                'nl' => ['rijden'],
            ]],
        ]);

        // People & Society
        $this->seedCategory('kanji-n3-people-and-society', 'People & Society', [
            ['kana' => '役', 'romaji' => 'yaku', 'meanings' => [
                'en' => ['role'],
                'nl' => ['rol'],
            ]],
            ['kana' => '民', 'romaji' => 'min', 'meanings' => [
                'en' => ['people'],
                'nl' => ['volk'],
            ]],
            ['kana' => '軍', 'romaji' => 'gun', 'meanings' => [
                'en' => ['military'],
                'nl' => ['leger'],
            ]],
            ['kana' => '警', 'romaji' => 'kei', 'meanings' => [
                'en' => ['police'],
                'nl' => ['politie'],
            ]],
            ['kana' => '官', 'romaji' => 'kan', 'meanings' => [
                'en' => ['government official'],
                'nl' => ['overheidsfunctionaris'],
            ]],
            ['kana' => '裁', 'romaji' => 'sai', 'meanings' => [
                'en' => ['judge'],
                'nl' => ['rechter'],
            ]],
            ['kana' => '争', 'romaji' => 'sou', 'meanings' => [
                'en' => ['conflict'],
                'nl' => ['conflict'],
            ]],
            ['kana' => '議', 'romaji' => 'gi', 'meanings' => [
                'en' => ['deliberation'],
                'nl' => ['overleg'],
            ]],
            ['kana' => '党', 'romaji' => 'tou', 'meanings' => [
                'en' => ['party'],
                'nl' => ['partij'],
            ]],
            ['kana' => '族', 'romaji' => 'zoku', 'meanings' => [
                'en' => ['family', 'tribe'],
                'nl' => ['familie', 'stam'],
            ]],
        ]);


        // Tools & Objects
        $this->seedCategory('kanji-n3-tools-and-objects', 'Tools & Objects', [
            ['kana' => '箱', 'romaji' => 'hako', 'meanings' => [
                'en' => ['box'],
                'nl' => ['doos'],
            ]],
            ['kana' => '鏡', 'romaji' => 'kagami', 'meanings' => [
                'en' => ['mirror'],
                'nl' => ['spiegel'],
            ]],
            ['kana' => '傘', 'romaji' => 'kasa', 'meanings' => [
                'en' => ['umbrella'],
                'nl' => ['paraplu'],
            ]],
            ['kana' => '棚', 'romaji' => 'tana', 'meanings' => [
                'en' => ['shelf'],
                'nl' => ['plank'],
            ]],
            ['kana' => '針', 'romaji' => 'hari', 'meanings' => [
                'en' => ['needle'],
                'nl' => ['naald'],
            ]],
            ['kana' => '布', 'romaji' => 'nuno', 'meanings' => [
                'en' => ['cloth'],
                'nl' => ['stof'],
            ]],
            ['kana' => '机', 'romaji' => 'tsukue', 'meanings' => [
                'en' => ['desk'],
                'nl' => ['bureau'],
            ]],
            ['kana' => '椅', 'romaji' => 'i', 'meanings' => [
                'en' => ['chair (stem)'],
                'nl' => ['stoel (stam)'],
            ]],
            ['kana' => '皿', 'romaji' => 'sara', 'meanings' => [
                'en' => ['plate'],
                'nl' => ['bord'],
            ]],
            ['kana' => '匙', 'romaji' => 'saji', 'meanings' => [
                'en' => ['spoon'],
                'nl' => ['lepel'],
            ]],
        ]);

// Food & Cooking
        $this->seedCategory('kanji-n3-food-and-cooking', 'Food & Cooking', [
            ['kana' => '油', 'romaji' => 'abura', 'meanings' => [
                'en' => ['oil'],
                'nl' => ['olie'],
            ]],
            ['kana' => '塩', 'romaji' => 'shio', 'meanings' => [
                'en' => ['salt'],
                'nl' => ['zout'],
            ]],
            ['kana' => '砂糖', 'romaji' => 'satou', 'meanings' => [
                'en' => ['sugar'],
                'nl' => ['suiker'],
            ]],
            ['kana' => '醤', 'romaji' => 'shou', 'meanings' => [
                'en' => ['soy sauce'],
                'nl' => ['sojasaus'],
            ]],
            ['kana' => '酒', 'romaji' => 'sake', 'meanings' => [
                'en' => ['alcohol'],
                'nl' => ['alcohol'],
            ]],
            ['kana' => '皿', 'romaji' => 'sara', 'meanings' => [
                'en' => ['plate'],
                'nl' => ['bord'],
            ]],
            ['kana' => '鍋', 'romaji' => 'nabe', 'meanings' => [
                'en' => ['pot'],
                'nl' => ['pan'],
            ]],
            ['kana' => '焼', 'romaji' => 'yaki', 'meanings' => [
                'en' => ['grill'],
                'nl' => ['grillen'],
            ]],
            ['kana' => '煮', 'romaji' => 'ni', 'meanings' => [
                'en' => ['boil'],
                'nl' => ['koken'],
            ]],
            ['kana' => '炒', 'romaji' => 'itame', 'meanings' => [
                'en' => ['stir-fry'],
                'nl' => ['roerbakken'],
            ]],
        ]);

// Abstract Concepts
        $this->seedCategory('kanji-n3-abstract-concepts', 'Abstract Concepts', [
            ['kana' => '愛', 'romaji' => 'ai', 'meanings' => [
                'en' => ['love'],
                'nl' => ['liefde'],
            ]],
            ['kana' => '夢', 'romaji' => 'yume', 'meanings' => [
                'en' => ['dream'],
                'nl' => ['droom'],
            ]],
            ['kana' => '望', 'romaji' => 'bou', 'meanings' => [
                'en' => ['hope'],
                'nl' => ['hoop'],
            ]],
            ['kana' => '命', 'romaji' => 'inochi', 'meanings' => [
                'en' => ['life'],
                'nl' => ['leven'],
            ]],
            ['kana' => '感', 'romaji' => 'kan', 'meanings' => [
                'en' => ['feeling'],
                'nl' => ['gevoel'],
            ]],
            ['kana' => '想', 'romaji' => 'sou', 'meanings' => [
                'en' => ['thought'],
                'nl' => ['gedachte'],
            ]],
            ['kana' => '信', 'romaji' => 'shin', 'meanings' => [
                'en' => ['trust'],
                'nl' => ['vertrouwen'],
            ]],
            ['kana' => '義', 'romaji' => 'gi', 'meanings' => [
                'en' => ['justice'],
                'nl' => ['rechtvaardigheid'],
            ]],
            ['kana' => '念', 'romaji' => 'nen', 'meanings' => [
                'en' => ['wish', 'thought'],
                'nl' => ['wens', 'gedachte'],
            ]],
            ['kana' => '意', 'romaji' => 'i', 'meanings' => [
                'en' => ['intention'],
                'nl' => ['intentie'],
            ]],
        ]);

// Verbs (Group 1)
        $this->seedCategory('kanji-n3-verbs-group-1', 'Verbs (Group 1)', [
            ['kana' => '打', 'romaji' => 'da', 'meanings' => [
                'en' => ['hit'],
                'nl' => ['slaan'],
            ]],
            ['kana' => '引', 'romaji' => 'in', 'meanings' => [
                'en' => ['pull'],
                'nl' => ['trekken'],
            ]],
            ['kana' => '押', 'romaji' => 'ou', 'meanings' => [
                'en' => ['push'],
                'nl' => ['duwen'],
            ]],
            ['kana' => '切', 'romaji' => 'setsu', 'meanings' => [
                'en' => ['cut'],
                'nl' => ['snijden'],
            ]],
            ['kana' => '持', 'romaji' => 'ji', 'meanings' => [
                'en' => ['hold'],
                'nl' => ['vasthouden'],
            ]],
            ['kana' => '使', 'romaji' => 'shi', 'meanings' => [
                'en' => ['use'],
                'nl' => ['gebruiken'],
            ]],
            ['kana' => '書', 'romaji' => 'sho', 'meanings' => [
                'en' => ['write'],
                'nl' => ['schrijven'],
            ]],
            ['kana' => '読', 'romaji' => 'doku', 'meanings' => [
                'en' => ['read'],
                'nl' => ['lezen'],
            ]],
            ['kana' => '立', 'romaji' => 'ritsu', 'meanings' => [
                'en' => ['stand'],
                'nl' => ['staan'],
            ]],
            ['kana' => '座', 'romaji' => 'za', 'meanings' => [
                'en' => ['sit'],
                'nl' => ['zitten'],
            ]],
        ]);

// Verbs (Group 2)
        $this->seedCategory('kanji-n3-verbs-group-2', 'Verbs (Group 2)', [
            ['kana' => '食', 'romaji' => 'shoku', 'meanings' => [
                'en' => ['eat'],
                'nl' => ['eten'],
            ]],
            ['kana' => '見', 'romaji' => 'ken', 'meanings' => [
                'en' => ['see'],
                'nl' => ['zien'],
            ]],
            ['kana' => '開', 'romaji' => 'kai', 'meanings' => [
                'en' => ['open'],
                'nl' => ['openen'],
            ]],
            ['kana' => '閉', 'romaji' => 'hei', 'meanings' => [
                'en' => ['close'],
                'nl' => ['sluiten'],
            ]],
            ['kana' => '出', 'romaji' => 'shutsu', 'meanings' => [
                'en' => ['exit'],
                'nl' => ['uitgang'],
            ]],
            ['kana' => '入', 'romaji' => 'nyuu', 'meanings' => [
                'en' => ['enter'],
                'nl' => ['binnenkomen'],
            ]],
            ['kana' => '始', 'romaji' => 'shi', 'meanings' => [
                'en' => ['begin'],
                'nl' => ['beginnen'],
            ]],
            ['kana' => '終', 'romaji' => 'shuu', 'meanings' => [
                'en' => ['end'],
                'nl' => ['einde'],
            ]],
            ['kana' => '考', 'romaji' => 'kou', 'meanings' => [
                'en' => ['think'],
                'nl' => ['denken'],
            ]],
            ['kana' => '答', 'romaji' => 'tou', 'meanings' => [
                'en' => ['answer'],
                'nl' => ['antwoord'],
            ]],
        ]);

// Adjectives & Descriptions
        $this->seedCategory('kanji-n3-adjectives-and-descriptions', 'Adjectives & Descriptions', [
            ['kana' => '重', 'romaji' => 'omo(i)', 'meanings' => [
                'en' => ['heavy'],
                'nl' => ['zwaar'],
            ]],
            ['kana' => '軽', 'romaji' => 'karu(i)', 'meanings' => [
                'en' => ['light (weight)'],
                'nl' => ['licht (gewicht)'],
            ]],
            ['kana' => '太', 'romaji' => 'futo(i)', 'meanings' => [
                'en' => ['thick', 'fat'],
                'nl' => ['dik', 'vet'],
            ]],
            ['kana' => '細', 'romaji' => 'hoso(i)', 'meanings' => [
                'en' => ['thin', 'slender'],
                'nl' => ['dun', 'slank'],
            ]],
            ['kana' => '強', 'romaji' => 'tsuyo(i)', 'meanings' => [
                'en' => ['strong'],
                'nl' => ['sterk'],
            ]],
            ['kana' => '弱', 'romaji' => 'yowa(i)', 'meanings' => [
                'en' => ['weak'],
                'nl' => ['zwak'],
            ]],
            ['kana' => '深', 'romaji' => 'fuka(i)', 'meanings' => [
                'en' => ['deep'],
                'nl' => ['diep'],
            ]],
            ['kana' => '浅', 'romaji' => 'asa(i)', 'meanings' => [
                'en' => ['shallow'],
                'nl' => ['oppervlakkig'],
            ]],
            ['kana' => '明', 'romaji' => 'aka(rui)', 'meanings' => [
                'en' => ['bright'],
                'nl' => ['helder'],
            ]],
            ['kana' => '暗', 'romaji' => 'kura(i)', 'meanings' => [
                'en' => ['dark'],
                'nl' => ['donker'],
            ]],
        ]);

        // Seed Core Particles
        $core = Category::where('slug', 'core-particles')->firstOrFail();

        $particles = [
            ['kana' => 'は', 'romaji' => 'wa', 'meanings' => [
                'en' => ['topic marker'],
                'nl' => ['onderwerpmarkeerder'],
            ]],
            ['kana' => 'を', 'romaji' => 'o', 'meanings' => [
                'en' => ['direct object'],
                'nl' => ['lijdend voorwerp'],
            ]],
            ['kana' => 'に', 'romaji' => 'ni', 'meanings' => [
                'en' => ['direction', 'time'],
                'nl' => ['richting', 'tijd'],
            ]],
            ['kana' => 'で', 'romaji' => 'de', 'meanings' => [
                'en' => ['place of action', 'means'],
                'nl' => ['plaats van handeling', 'middel'],
            ]],
            ['kana' => 'と', 'romaji' => 'to', 'meanings' => [
                'en' => ['and', 'with'],
                'nl' => ['en', 'met'],
            ]],
            ['kana' => 'も', 'romaji' => 'mo', 'meanings' => [
                'en' => ['also', 'too'],
                'nl' => ['ook', 'eveneens'],
            ]],
            ['kana' => 'が', 'romaji' => 'ga', 'meanings' => [
                'en' => ['subject', 'emphasis'],
                'nl' => ['onderwerp', 'nadruk'],
            ]],
            ['kana' => 'の', 'romaji' => 'no', 'meanings' => [
                'en' => ['possession', "'s"],
                'nl' => ['bezit', "'s"],
            ]],
            ['kana' => 'から', 'romaji' => 'kara', 'meanings' => [
                'en' => ['from', 'because'],
                'nl' => ['van', 'omdat'],
            ]],
            ['kana' => 'まで', 'romaji' => 'made', 'meanings' => [
                'en' => ['until', 'up to'],
                'nl' => ['tot', 'tot aan'],
            ]],
        ];

        foreach ($particles as $p) {
            $this->createItemPair($core->id, 'Core Particles', $p);
        }

        // Additional Particles
        $this->seedCategory('additional-particles', 'Additional Particles', [
            ['kana' => 'へ', 'romaji' => 'e', 'meanings' => [
                'en' => ['direction'],
                'nl' => ['richting'],
            ]],
            ['kana' => 'や', 'romaji' => 'ya', 'meanings' => [
                'en' => ['and', 'non-exhaustive list'],
                'nl' => ['en', 'niet-uitputtende lijst'],
            ]],
            ['kana' => 'ね', 'romaji' => 'ne', 'meanings' => [
                'en' => ['right?', 'agreement'],
                'nl' => ['hè?', 'instemming'],
            ]],
            ['kana' => 'よ', 'romaji' => 'yo', 'meanings' => [
                'en' => ['emphasis'],
                'nl' => ['nadruk'],
            ]],
            ['kana' => 'だけ', 'romaji' => 'dake', 'meanings' => [
                'en' => ['only'],
                'nl' => ['alleen'],
            ]],
            ['kana' => 'しか', 'romaji' => 'shika', 'meanings' => [
                'en' => ['only (with negative)'],
                'nl' => ['alleen (met negatie)'],
            ]],
            ['kana' => 'でも', 'romaji' => 'demo', 'meanings' => [
                'en' => ['even', 'but'],
                'nl' => ['zelfs', 'maar'],
            ]],
            ['kana' => 'ほど', 'romaji' => 'hodo', 'meanings' => [
                'en' => ['to the extent of', 'comparison'],
                'nl' => ['tot op zekere hoogte', 'vergelijking'],
            ]],
            ['kana' => 'ながら', 'romaji' => 'nagara', 'meanings' => [
                'en' => ['while doing', 'simultaneous actions'],
                'nl' => ['tijdens het doen', 'gelijktijdige handelingen'],
            ]],
        ]);

        // Verbs
        // N5 Part 1
        $this->seedCategory('n5-part-1', 'N5 Part 1', [
            ['kana' => 'たべる', 'romaji' => 'taberu', 'meanings' => [
                'en' => ['to eat'],
                'nl' => ['eten'],
            ]],
            ['kana' => 'のむ', 'romaji' => 'nomu', 'meanings' => [
                'en' => ['to drink'],
                'nl' => ['drinken'],
            ]],
            ['kana' => 'いく', 'romaji' => 'iku', 'meanings' => [
                'en' => ['to go'],
                'nl' => ['gaan'],
            ]],
            ['kana' => 'くる', 'romaji' => 'kuru', 'meanings' => [
                'en' => ['to come'],
                'nl' => ['komen'],
            ]],
            ['kana' => 'かえる', 'romaji' => 'kaeru', 'meanings' => [
                'en' => ['to return (home)'],
                'nl' => ['terugkeren (naar huis)'],
            ]],
            ['kana' => 'みる', 'romaji' => 'miru', 'meanings' => [
                'en' => ['to see', 'to watch', 'to look'],
                'nl' => ['zien', 'kijken', 'aanschouwen'],
            ]],
            ['kana' => 'きく', 'romaji' => 'kiku', 'meanings' => [
                'en' => ['to listen', 'to ask'],
                'nl' => ['luisteren', 'vragen'],
            ]],
            ['kana' => 'はなす', 'romaji' => 'hanasu', 'meanings' => [
                'en' => ['to speak', 'to talk'],
                'nl' => ['spreken', 'praten'],
            ]],
            ['kana' => 'よむ', 'romaji' => 'yomu', 'meanings' => [
                'en' => ['to read'],
                'nl' => ['lezen'],
            ]],
            ['kana' => 'かく', 'romaji' => 'kaku', 'meanings' => [
                'en' => ['to write'],
                'nl' => ['schrijven'],
            ]],
            ['kana' => 'かう', 'romaji' => 'kau', 'meanings' => [
                'en' => ['to buy'],
                'nl' => ['kopen'],
            ]],
            ['kana' => 'うる', 'romaji' => 'uru', 'meanings' => [
                'en' => ['to sell'],
                'nl' => ['verkopen'],
            ]],
            ['kana' => 'つかう', 'romaji' => 'tsukau', 'meanings' => [
                'en' => ['to use'],
                'nl' => ['gebruiken'],
            ]],
            ['kana' => 'する', 'romaji' => 'suru', 'meanings' => [
                'en' => ['to do'],
                'nl' => ['doen'],
            ]],
            ['kana' => 'ある', 'romaji' => 'aru', 'meanings' => [
                'en' => ['to exist (non-living)'],
                'nl' => ['bestaan (levenloos)'],
            ]],
            ['kana' => 'いる', 'romaji' => 'iru', 'meanings' => [
                'en' => ['to exist (living)', 'to need'],
                'nl' => ['bestaan (levend)', 'nodig hebben'],
            ]],
            ['kana' => 'おきる', 'romaji' => 'okiru', 'meanings' => [
                'en' => ['to wake up'],
                'nl' => ['wakker worden'],
            ]],
            ['kana' => 'ねる', 'romaji' => 'neru', 'meanings' => [
                'en' => ['to sleep'],
                'nl' => ['slapen'],
            ]],
            ['kana' => 'はたらく', 'romaji' => 'hataraku', 'meanings' => [
                'en' => ['to work'],
                'nl' => ['werken'],
            ]],
            ['kana' => 'やすむ', 'romaji' => 'yasumu', 'meanings' => [
                'en' => ['to rest', 'to take a break'],
                'nl' => ['rusten', 'pauze nemen'],
            ]],
            ['kana' => 'あう', 'romaji' => 'au', 'meanings' => [
                'en' => ['to meet'],
                'nl' => ['ontmoeten'],
            ]],
            ['kana' => 'あける', 'romaji' => 'akeru', 'meanings' => [
                'en' => ['to open'],
                'nl' => ['openen'],
            ]],
            ['kana' => 'しめる', 'romaji' => 'shimeru', 'meanings' => [
                'en' => ['to close'],
                'nl' => ['sluiten'],
            ]],
            ['kana' => 'はいる', 'romaji' => 'hairu', 'meanings' => [
                'en' => ['to enter'],
                'nl' => ['binnenkomen'],
            ]],
            ['kana' => 'でる', 'romaji' => 'deru', 'meanings' => [
                'en' => ['to exit', 'to leave'],
                'nl' => ['verlaten', 'uitgaan'],
            ]],
            ['kana' => 'すわる', 'romaji' => 'suwaru', 'meanings' => [
                'en' => ['to sit'],
                'nl' => ['zitten'],
            ]],
            ['kana' => 'たつ', 'romaji' => 'tatsu', 'meanings' => [
                'en' => ['to stand'],
                'nl' => ['opstaan'],
            ]],
            ['kana' => 'まつ', 'romaji' => 'matsu', 'meanings' => [
                'en' => ['to wait'],
                'nl' => ['wachten'],
            ]],
            ['kana' => 'もつ', 'romaji' => 'motsu', 'meanings' => [
                'en' => ['to hold', 'to carry'],
                'nl' => ['vasthouden', 'dragen'],
            ]],
            ['kana' => 'およぐ', 'romaji' => 'oyogu', 'meanings' => [
                'en' => ['to swim'],
                'nl' => ['zwemmen'],
            ]],
        ]);

        // N5 Part 2
        $this->seedCategory('n5-part-2', 'N5 Part 2', [
            ['kana' => 'はしる', 'romaji' => 'hashiru', 'meanings' => [
                'en' => ['to run'],
                'nl' => ['rennen'],
            ]],
            ['kana' => 'あるく', 'romaji' => 'aruku', 'meanings' => [
                'en' => ['to walk'],
                'nl' => ['lopen'],
            ]],
            ['kana' => 'のる', 'romaji' => 'noru', 'meanings' => [
                'en' => ['to ride', 'to get on'],
                'nl' => ['rijden', 'instappen'],
            ]],
            ['kana' => 'おりる', 'romaji' => 'oriru', 'meanings' => [
                'en' => ['to get off', 'to descend'],
                'nl' => ['uitstappen', 'afdalen'],
            ]],
            ['kana' => 'いれる', 'romaji' => 'ireru', 'meanings' => [
                'en' => ['to put in', 'to insert'],
                'nl' => ['erin doen', 'invoegen'],
            ]],
            ['kana' => 'だす', 'romaji' => 'dasu', 'meanings' => [
                'en' => ['to take out', 'to submit'],
                'nl' => ['uithalen', 'indienen'],
            ]],
            ['kana' => 'つける', 'romaji' => 'tsukeru', 'meanings' => [
                'en' => ['to turn on'],
                'nl' => ['aanzetten'],
            ]],
            ['kana' => 'けす', 'romaji' => 'kesu', 'meanings' => [
                'en' => ['to turn off', 'to erase'],
                'nl' => ['uitzetten', 'wissen'],
            ]],
            ['kana' => 'あらう', 'romaji' => 'arau', 'meanings' => [
                'en' => ['to wash'],
                'nl' => ['wassen'],
            ]],
            ['kana' => 'そうじする', 'romaji' => 'souji suru', 'meanings' => [
                'en' => ['to clean'],
                'nl' => ['schoonmaken'],
            ]],
            ['kana' => 'せんたくする', 'romaji' => 'sentaku suru', 'meanings' => [
                'en' => ['to do laundry'],
                'nl' => ['de was doen'],
            ]],
            ['kana' => 'りょうりする', 'romaji' => 'ryouri suru', 'meanings' => [
                'en' => ['to cook'],
                'nl' => ['koken'],
            ]],
            ['kana' => 'べんきょうする', 'romaji' => 'benkyou suru', 'meanings' => [
                'en' => ['to study'],
                'nl' => ['studeren'],
            ]],
            ['kana' => 'けんがくする', 'romaji' => 'kengaku suru', 'meanings' => [
                'en' => ['to tour', 'to observe'],
                'nl' => ['bezichtigen', 'observeren'],
            ]],
            ['kana' => 'でんわする', 'romaji' => 'denwa suru', 'meanings' => [
                'en' => ['to call (by phone)'],
                'nl' => ['bellen'],
            ]],
            ['kana' => 'うんてんする', 'romaji' => 'unten suru', 'meanings' => [
                'en' => ['to drive'],
                'nl' => ['rijden'],
            ]],
            ['kana' => 'つくる', 'romaji' => 'tsukuru', 'meanings' => [
                'en' => ['to make', 'to create'],
                'nl' => ['maken', 'creëren'],
            ]],
            ['kana' => 'なおす', 'romaji' => 'naosu', 'meanings' => [
                'en' => ['to fix', 'to repair'],
                'nl' => ['repareren', 'herstellen'],
            ]],
            ['kana' => 'つかれる', 'romaji' => 'tsukareru', 'meanings' => [
                'en' => ['to get tired'],
                'nl' => ['moe worden'],
            ]],
            ['kana' => 'おぼえる', 'romaji' => 'oboeru', 'meanings' => [
                'en' => ['to remember', 'to memorize'],
                'nl' => ['onthouden', 'uit het hoofd leren'],
            ]],
            ['kana' => 'わすれる', 'romaji' => 'wasureru', 'meanings' => [
                'en' => ['to forget'],
                'nl' => ['vergeten'],
            ]],
            ['kana' => 'しぬ', 'romaji' => 'shinu', 'meanings' => [
                'en' => ['to die'],
                'nl' => ['sterven'],
            ]],
            ['kana' => 'あそぶ', 'romaji' => 'asobu', 'meanings' => [
                'en' => ['to play', 'to hang out'],
                'nl' => ['spelen', 'rondhangen'],
            ]],
            ['kana' => 'ならう', 'romaji' => 'narau', 'meanings' => [
                'en' => ['to learn'],
                'nl' => ['leren'],
            ]],
            ['kana' => 'おしえる', 'romaji' => 'oshieru', 'meanings' => [
                'en' => ['to teach', 'to tell'],
                'nl' => ['onderwijzen', 'vertellen'],
            ]],
            ['kana' => 'つたえる', 'romaji' => 'tsutaeru', 'meanings' => [
                'en' => ['to convey', 'to report'],
                'nl' => ['overbrengen', 'melden'],
            ]],
            ['kana' => 'なる', 'romaji' => 'naru', 'meanings' => [
                'en' => ['to become'],
                'nl' => ['worden'],
            ]],
            ['kana' => 'もらう', 'romaji' => 'morau', 'meanings' => [
                'en' => ['to receive'],
                'nl' => ['ontvangen'],
            ]],
        ]);

        // N4 Part 1
        $this->seedCategory('n4-part-1', 'N4 Part 1', [
            ['kana' => 'かす', 'romaji' => 'kasu', 'meanings' => [
                'en' => ['to lend'],
                'nl' => ['uitlenen'],
            ]],
            ['kana' => 'かりる', 'romaji' => 'kariru', 'meanings' => [
                'en' => ['to borrow'],
                'nl' => ['lenen'],
            ]],
            ['kana' => 'なおる', 'romaji' => 'naoru', 'meanings' => [
                'en' => ['to recover', 'to be fixed'],
                'nl' => ['genezen', 'gerepareerd worden'],
            ]],
            ['kana' => 'こわす', 'romaji' => 'kowasu', 'meanings' => [
                'en' => ['to break (something)'],
                'nl' => ['kapot maken'],
            ]],
            ['kana' => 'こわれる', 'romaji' => 'kowareru', 'meanings' => [
                'en' => ['to be broken'],
                'nl' => ['kapot gaan'],
            ]],
            ['kana' => 'おちる', 'romaji' => 'ochiru', 'meanings' => [
                'en' => ['to fall', 'to drop'],
                'nl' => ['vallen', 'laten vallen'],
            ]],
            ['kana' => 'ひく', 'romaji' => 'hiku', 'meanings' => [
                'en' => ['to pull', 'to play (instrument)'],
                'nl' => ['trekken', '(instrument) bespelen'],
            ]],
            ['kana' => 'おす', 'romaji' => 'osu', 'meanings' => [
                'en' => ['to push'],
                'nl' => ['duwen'],
            ]],
            ['kana' => 'ならぶ', 'romaji' => 'narabu', 'meanings' => [
                'en' => ['to line up'],
                'nl' => ['in de rij staan'],
            ]],
            ['kana' => 'ならべる', 'romaji' => 'naraberu', 'meanings' => [
                'en' => ['to arrange', 'to line up (trans.)'],
                'nl' => ['ordenen', 'op een rij zetten'],
            ]],
            ['kana' => 'えらぶ', 'romaji' => 'erabu', 'meanings' => [
                'en' => ['to choose'],
                'nl' => ['kiezen'],
            ]],
            ['kana' => 'さがす', 'romaji' => 'sagasu', 'meanings' => [
                'en' => ['to search', 'to look for'],
                'nl' => ['zoeken'],
            ]],
            ['kana' => 'みつける', 'romaji' => 'mitsukeru', 'meanings' => [
                'en' => ['to find'],
                'nl' => ['vinden'],
            ]],
            ['kana' => 'おもう', 'romaji' => 'omou', 'meanings' => [
                'en' => ['to think', 'to feel'],
                'nl' => ['denken', 'voelen'],
            ]],
            ['kana' => 'かんがえる', 'romaji' => 'kangaeru', 'meanings' => [
                'en' => ['to consider', 'to think about'],
                'nl' => ['overwegen', 'nadenken over'],
            ]],
            ['kana' => 'うごく', 'romaji' => 'ugoku', 'meanings' => [
                'en' => ['to move'],
                'nl' => ['bewegen'],
            ]],
            ['kana' => 'つづける', 'romaji' => 'tsuzukeru', 'meanings' => [
                'en' => ['to continue'],
                'nl' => ['doorgaan'],
            ]],
            ['kana' => 'とまる', 'romaji' => 'tomaru', 'meanings' => [
                'en' => ['to stop (moving)'],
                'nl' => ['stoppen (met bewegen)'],
            ]],
            ['kana' => 'とめる', 'romaji' => 'tomeru', 'meanings' => [
                'en' => ['to stop (something)'],
                'nl' => ['iets stoppen'],
            ]],
            ['kana' => 'はじまる', 'romaji' => 'hajimaru', 'meanings' => [
                'en' => ['to begin (intransitive)'],
                'nl' => ['beginnen (zelfstandig)'],
            ]],
            ['kana' => 'はじめる', 'romaji' => 'hajimeru', 'meanings' => [
                'en' => ['to begin (transitive)'],
                'nl' => ['beginnen (iets)'],
            ]],
            ['kana' => 'おわる', 'romaji' => 'owaru', 'meanings' => [
                'en' => ['to end', 'to finish'],
                'nl' => ['eindigen', 'afronden'],
            ]],
            ['kana' => 'きまる', 'romaji' => 'kimaru', 'meanings' => [
                'en' => ['to be decided'],
                'nl' => ['beslist worden'],
            ]],
            ['kana' => 'きめる', 'romaji' => 'kimeru', 'meanings' => [
                'en' => ['to decide'],
                'nl' => ['beslissen'],
            ]],
            ['kana' => 'つたわる', 'romaji' => 'tsutawaru', 'meanings' => [
                'en' => ['to be transmitted'],
                'nl' => ['overgedragen worden'],
            ]],
        ]);

        // N4 Part 2
        $this->seedCategory('n4-part-2', 'N4 Part 2', [
            ['kana' => 'うける', 'romaji' => 'ukeru', 'meanings' => [
                'en' => ['to receive', 'to take (an exam)'],
                'nl' => ['ontvangen', '(examen) afleggen'],
            ]],
            ['kana' => 'まにあう', 'romaji' => 'maniau', 'meanings' => [
                'en' => ['to be on time'],
                'nl' => ['op tijd zijn'],
            ]],
            ['kana' => 'おくれる', 'romaji' => 'okureru', 'meanings' => [
                'en' => ['to be late'],
                'nl' => ['te laat zijn'],
            ]],
            ['kana' => 'ぬぐ', 'romaji' => 'nugu', 'meanings' => [
                'en' => ['to take off (clothes)'],
                'nl' => ['uittrekken (kleding)'],
            ]],
            ['kana' => 'はく', 'romaji' => 'haku', 'meanings' => [
                'en' => ['to wear (lower body)'],
                'nl' => ['dragen (onderlichaam)'],
            ]],
            ['kana' => 'きる', 'romaji' => 'kiru', 'meanings' => [
                'en' => ['to wear (upper body)'],
                'nl' => ['dragen (bovenlichaam)'],
            ]],
            ['kana' => 'かぶる', 'romaji' => 'kaburu', 'meanings' => [
                'en' => ['to wear (on head)'],
                'nl' => ['dragen (op het hoofd)'],
            ]],
            ['kana' => 'やめる', 'romaji' => 'yameru', 'meanings' => [
                'en' => ['to quit', 'to stop doing'],
                'nl' => ['stoppen', 'ophouden met'],
            ]],
            ['kana' => 'よやくする', 'romaji' => 'yoyaku suru', 'meanings' => [
                'en' => ['to reserve', 'to book'],
                'nl' => ['reserveren', 'boeken'],
            ]],
            ['kana' => 'けっこんする', 'romaji' => 'kekkon suru', 'meanings' => [
                'en' => ['to marry'],
                'nl' => ['trouwen'],
            ]],
            ['kana' => 'しつもんする', 'romaji' => 'shitsumon suru', 'meanings' => [
                'en' => ['to ask a question'],
                'nl' => ['een vraag stellen'],
            ]],
            ['kana' => 'うけつける', 'romaji' => 'uketsukeru', 'meanings' => [
                'en' => ['to accept', 'to receive (forms)'],
                'nl' => ['accepteren', '(formulieren) ontvangen'],
            ]],
            ['kana' => 'きえる', 'romaji' => 'kieru', 'meanings' => [
                'en' => ['to disappear', 'to go out'],
                'nl' => ['verdwijnen', 'uitgaan (licht)'],
            ]],
            ['kana' => 'わらう', 'romaji' => 'warau', 'meanings' => [
                'en' => ['to laugh', 'to smile'],
                'nl' => ['lachen', 'glimlachen'],
            ]],
            ['kana' => 'なく', 'romaji' => 'naku', 'meanings' => [
                'en' => ['to cry'],
                'nl' => ['huilen'],
            ]],
            ['kana' => 'おこる', 'romaji' => 'okoru', 'meanings' => [
                'en' => ['to get angry'],
                'nl' => ['boos worden'],
            ]],
            ['kana' => 'よろこぶ', 'romaji' => 'yorokobu', 'meanings' => [
                'en' => ['to be happy'],
                'nl' => ['blij zijn'],
            ]],
            ['kana' => 'まよう', 'romaji' => 'mayou', 'meanings' => [
                'en' => ['to be lost', 'to be unsure'],
                'nl' => ['verdwaald zijn', 'twijfelen'],
            ]],
            ['kana' => 'むかえる', 'romaji' => 'mukaeru', 'meanings' => [
                'en' => ['to welcome', 'to pick up (person)'],
                'nl' => ['verwelkomen', 'ophalen (persoon)'],
            ]],
            ['kana' => 'とどける', 'romaji' => 'todokeru', 'meanings' => [
                'en' => ['to deliver'],
                'nl' => ['bezorgen'],
            ]],
            ['kana' => 'きく（たずねる）', 'romaji' => 'kiku (tazuneru)', 'meanings' => [
                'en' => ['to ask (a question)'],
                'nl' => ['vragen (een vraag stellen)'],
            ]],
            ['kana' => 'とぶ', 'romaji' => 'tobu', 'meanings' => [
                'en' => ['to fly', 'to jump'],
                'nl' => ['vliegen', 'springen'],
            ]],
        ]);

        // Formal Verb Forms
        $this->seedCategory('formal-verb-forms', 'Formal Verb Forms', [
            ['kana' => 'ます', 'romaji' => 'masu', 'meanings' => [
                'en' => ['polite present', 'polite future'],
                'nl' => ['beleefde tegenwoordige', 'beleefde toekomstige tijd'],
            ]],
            ['kana' => 'ません', 'romaji' => 'masen', 'meanings' => [
                'en' => ['polite negative'],
                'nl' => ['beleefde ontkenning'],
            ]],
            ['kana' => 'ました', 'romaji' => 'mashita', 'meanings' => [
                'en' => ['polite past'],
                'nl' => ['beleefde verleden tijd'],
            ]],
            ['kana' => 'ませんでした', 'romaji' => 'masen deshita', 'meanings' => [
                'en' => ['polite past negative'],
                'nl' => ['beleefde verleden ontkenning'],
            ]],
            ['kana' => 'たい', 'romaji' => 'tai', 'meanings' => [
                'en' => ['want to'],
                'nl' => ['willen'],
            ]],
            ['kana' => 'たいですか', 'romaji' => 'tai desu ka', 'meanings' => [
                'en' => ['want to?'],
                'nl' => ['wil je?'],
            ]],
            ['kana' => 'たいください', 'romaji' => 'tai kudesai', 'meanings' => [
                'en' => ['please do'],
                'nl' => ['alsjeblieft doe het'],
            ]],
            ['kana' => 'てもいいですか', 'romaji' => 'te mo ii desuka', 'meanings' => [
                'en' => ['may I...?', 'may I?'],
                'nl' => ['mag ik...?', 'mag ik?'],
            ]],
            ['kana' => 'てはいけません', 'romaji' => 'te wa ikemasen', 'meanings' => [
                'en' => ['must not'],
                'nl' => ['mag niet'],
            ]],
        ]);

        // Casual Verb Forms
        $this->seedCategory('casual-verb-forms', 'Casual Verb Forms', [
            ['kana' => 'る / う / く', 'romaji' => 'ru / u / ku', 'meanings' => [
                'en' => ['dictionary form endings'],
                'nl' => ['woordenboekvorm-uitgangen'],
            ]],
            ['kana' => 'ない', 'romaji' => 'nai', 'meanings' => [
                'en' => ["negative (don't)"],
                'nl' => ['ontkenning (niet)'],
            ]],
            ['kana' => 'た', 'romaji' => 'ta', 'meanings' => [
                'en' => ['past (did)'],
                'nl' => ['verleden tijd (deed)'],
            ]],
            ['kana' => 'なかった', 'romaji' => 'nakatta', 'meanings' => [
                'en' => ["past negative (didn't)"],
                'nl' => ['verleden tijd ontkenning (deed niet)'],
            ]],
            ['kana' => 'よう / おう', 'romaji' => 'you / ou', 'meanings' => [
                'en' => ["volitional (let's ...)"],
                'nl' => ['intentioneel (laten we ...)'],
            ]],
            ['kana' => 'られる / える', 'romaji' => 'rareru / eru', 'meanings' => [
                'en' => ['potential (can do)'],
                'nl' => ['mogelijkheidsvorm (kunnen)'],
            ]],
            ['kana' => 'られる', 'romaji' => 'rareru', 'meanings' => [
                'en' => ['passive (be done)'],
                'nl' => ['lijdende vorm (gedaan worden)'],
            ]],
            ['kana' => 'させる', 'romaji' => 'saseru', 'meanings' => [
                'en' => ['causative (make / let do)'],
                'nl' => ['doen-vorm (laten doen / dwingen)'],
            ]],
            ['kana' => 'たら', 'romaji' => 'tara', 'meanings' => [
                'en' => ['conditional (if ...)'],
                'nl' => ['voorwaardelijk (als ...)'],
            ]],
            ['kana' => 'て', 'romaji' => 'te', 'meanings' => [
                'en' => ['te-form (linking, request, command)'],
                'nl' => ['te-vorm (verbinden, verzoek, bevel)'],
            ]],
            ['kana' => 'ちゃう / じゃう', 'romaji' => 'chou / jou', 'meanings' => [
                'en' => ['completed', 'accidental (casual)'],
                'nl' => ['afgerond', 'per ongeluk (informeel)'],
            ]],
        ]);

        // Question Words
        $this->seedCategory('question-words', 'Question Words', [
            ['kana' => 'なに / なん', 'romaji' => 'nani / nan', 'meanings' => [
                'en' => ['what'],
                'nl' => ['wat'],
            ]],
            ['kana' => 'どこ', 'romaji' => 'doko', 'meanings' => [
                'en' => ['where'],
                'nl' => ['waar'],
            ]],
            ['kana' => 'いつ', 'romaji' => 'itsu', 'meanings' => [
                'en' => ['when'],
                'nl' => ['wanneer'],
            ]],
            ['kana' => 'いくら', 'romaji' => 'ikura', 'meanings' => [
                'en' => ['how much'],
                'nl' => ['hoeveel (prijs)'],
            ]],
            ['kana' => 'どう', 'romaji' => 'dou', 'meanings' => [
                'en' => ['how'],
                'nl' => ['hoe'],
            ]],
            ['kana' => 'どうして / なぜ', 'romaji' => 'doushite / naze', 'meanings' => [
                'en' => ['why'],
                'nl' => ['waarom'],
            ]],
            ['kana' => 'だれ', 'romaji' => 'dare', 'meanings' => [
                'en' => ['who (casual)'],
                'nl' => ['wie (informeel)'],
            ]],
            ['kana' => 'どなた', 'romaji' => 'donata', 'meanings' => [
                'en' => ['who (polite)'],
                'nl' => ['wie (beleefd)'],
            ]],
            ['kana' => 'どれ', 'romaji' => 'dore', 'meanings' => [
                'en' => ['which one'],
                'nl' => ['welke (één van velen)'],
            ]],
            ['kana' => 'どの', 'romaji' => 'dono', 'meanings' => [
                'en' => ['which (before a noun)'],
                'nl' => ['welke (voor een zelfstandig naamwoord)'],
            ]],
            ['kana' => 'どんな', 'romaji' => 'donna', 'meanings' => [
                'en' => ['what kind of'],
                'nl' => ['wat voor soort'],
            ]],
            ['kana' => 'どのくらい', 'romaji' => 'dono kurai', 'meanings' => [
                'en' => ['how long'],
                'nl' => ['hoe lang'],
            ]],
            ['kana' => 'どれくらい', 'romaji' => 'dore kurai', 'meanings' => [
                'en' => ['how much'],
                'nl' => ['hoeveel'],
            ]],
        ]);

        // Copulas
        $this->seedCategory('copulas', 'Copulas', [
            ['kana' => 'です', 'romaji' => 'desu', 'meanings' => [
                'en' => ['polite "is"', 'polite "are"'],
                'nl' => ['beleefd "is"', 'beleefd "zijn"'],
            ]],
            ['kana' => 'だ', 'romaji' => 'da', 'meanings' => [
                'en' => ['casual "is"', 'casual "are"'],
                'nl' => ['informeel "is"', 'informeel "zijn"'],
            ]],
            ['kana' => 'じゃない', 'romaji' => 'ja nai', 'meanings' => [
                'en' => ['casual negative (is not)'],
                'nl' => ['informeel negatief (is niet)'],
            ]],
            ['kana' => 'ではありません', 'romaji' => 'de wa arimasen', 'meanings' => [
                'en' => ['polite negative'],
                'nl' => ['beleefd negatief'],
            ]],
            ['kana' => 'でした', 'romaji' => 'deshita', 'meanings' => [
                'en' => ['polite past'],
                'nl' => ['beleefd verleden tijd'],
            ]],
            ['kana' => 'だった', 'romaji' => 'datta', 'meanings' => [
                'en' => ['casual past'],
                'nl' => ['informeel verleden tijd'],
            ]],
            ['kana' => 'じゃなかった', 'romaji' => 'ja nakatta', 'meanings' => [
                'en' => ['casual past negative'],
                'nl' => ['informeel verleden negatief'],
            ]],
            ['kana' => 'ではありませんでした', 'romaji' => 'de wa arimasen deshita', 'meanings' => [
                'en' => ['polite past negative'],
                'nl' => ['beleefd verleden negatief'],
            ]],
        ]);

        // Topics
        $this->seedCategory('topics', 'Topics', [
            ['kana' => 'わたし', 'romaji' => 'watashi', 'meanings' => [
                'en' => ['I', 'me'],
                'nl' => ['ik', 'mij'],
            ]],
            ['kana' => 'あなた', 'romaji' => 'anata', 'meanings' => [
                'en' => ['you'],
                'nl' => ['jij', 'je', 'u'],
            ]],
            ['kana' => 'かれ', 'romaji' => 'kare', 'meanings' => [
                'en' => ['he', 'him'],
                'nl' => ['hij', 'hem'],
            ]],
            ['kana' => 'かのじょ', 'romaji' => 'kanojo', 'meanings' => [
                'en' => ['she', 'her'],
                'nl' => ['zij', 'haar'],
            ]],
            ['kana' => 'かぞく', 'romaji' => 'kazoku', 'meanings' => [
                'en' => ['family'],
                'nl' => ['familie'],
            ]],
            ['kana' => 'こども', 'romaji' => 'kodomo', 'meanings' => [
                'en' => ['child'],
                'nl' => ['kind'],
            ]],
            ['kana' => 'せんせい', 'romaji' => 'sensei', 'meanings' => [
                'en' => ['teacher'],
                'nl' => ['leraar', 'lerares'],
            ]],
            ['kana' => 'がくせい', 'romaji' => 'gakusei', 'meanings' => [
                'en' => ['student'],
                'nl' => ['student'],
            ]],
            ['kana' => 'ともだち', 'romaji' => 'tomodachi', 'meanings' => [
                'en' => ['friend'],
                'nl' => ['vriend', 'vriendin'],
            ]],
            ['kana' => 'ひと', 'romaji' => 'hito', 'meanings' => [
                'en' => ['person', 'people'],
                'nl' => ['persoon', 'mensen'],
            ]],
        ]);

        // Objects
        // Food & Drinks
        $this->seedCategory('foods-and-drinks', 'Foods & Drinks', [
            ['kana' => 'ごはん', 'romaji' => 'gohan', 'meanings' => [
                'en' => ['rice', 'meal'],
                'nl' => ['rijst', 'maaltijd'],
            ]],
            ['kana' => 'パン', 'romaji' => 'pan', 'meanings' => [
                'en' => ['bread'],
                'nl' => ['brood'],
            ]],
            ['kana' => 'にく', 'romaji' => 'niku', 'meanings' => [
                'en' => ['meat'],
                'nl' => ['vlees'],
            ]],
            ['kana' => 'さかな', 'romaji' => 'sakana', 'meanings' => [
                'en' => ['fish'],
                'nl' => ['vis'],
            ]],
            ['kana' => 'たまご', 'romaji' => 'tamago', 'meanings' => [
                'en' => ['egg'],
                'nl' => ['ei'],
            ]],
            ['kana' => 'やさい', 'romaji' => 'yasai', 'meanings' => [
                'en' => ['vegetables'],
                'nl' => ['groenten'],
            ]],
            ['kana' => 'くだもの', 'romaji' => 'kudamono', 'meanings' => [
                'en' => ['fruit'],
                'nl' => ['fruit'],
            ]],
            ['kana' => 'みず', 'romaji' => 'mizu', 'meanings' => [
                'en' => ['water'],
                'nl' => ['water'],
            ]],
            ['kana' => 'おちゃ', 'romaji' => 'ocha', 'meanings' => [
                'en' => ['tea'],
                'nl' => ['thee'],
            ]],
            ['kana' => 'コーヒー', 'romaji' => 'koohii', 'meanings' => [
                'en' => ['coffee'],
                'nl' => ['koffie'],
            ]],
            ['kana' => 'ジュース', 'romaji' => 'juusu', 'meanings' => [
                'en' => ['juice'],
                'nl' => ['sap'],
            ]],
            ['kana' => 'ビール', 'romaji' => 'biiru', 'meanings' => [
                'en' => ['beer'],
                'nl' => ['bier'],
            ]],
            ['kana' => 'ワイン', 'romaji' => 'wain', 'meanings' => [
                'en' => ['wine'],
                'nl' => ['wijn'],
            ]],
            ['kana' => 'スープ', 'romaji' => 'suupu', 'meanings' => [
                'en' => ['soup'],
                'nl' => ['soep'],
            ]],
            ['kana' => 'サラダ', 'romaji' => 'sarada', 'meanings' => [
                'en' => ['salad'],
                'nl' => ['salade'],
            ]],
            ['kana' => 'カレー', 'romaji' => 'karee', 'meanings' => [
                'en' => ['curry'],
                'nl' => ['curry'],
            ]],
            ['kana' => 'みそしる', 'romaji' => 'misoshiru', 'meanings' => [
                'en' => ['miso soup'],
                'nl' => ['miso-soep'],
            ]],
            ['kana' => 'うどん', 'romaji' => 'udon', 'meanings' => [
                'en' => ['udon'],
                'nl' => ['udon'],
            ]],
            ['kana' => 'そば', 'romaji' => 'soba', 'meanings' => [
                'en' => ['soba'],
                'nl' => ['soba'],
            ]],
            ['kana' => 'ラーメン', 'romaji' => 'raamen', 'meanings' => [
                'en' => ['ramen'],
                'nl' => ['ramen'],
            ]],
            ['kana' => 'ぎゅうにゅう', 'romaji' => 'gyuunyuu', 'meanings' => [
                'en' => ['milk'],
                'nl' => ['melk'],
            ]],
            ['kana' => 'チーズ', 'romaji' => 'chiizu', 'meanings' => [
                'en' => ['cheese'],
                'nl' => ['kaas'],
            ]],
            ['kana' => 'バター', 'romaji' => 'bataa', 'meanings' => [
                'en' => ['butter'],
                'nl' => ['boter'],
            ]],
            ['kana' => 'ケーキ', 'romaji' => 'keeki', 'meanings' => [
                'en' => ['cake'],
                'nl' => ['taart'],
            ]],
            ['kana' => 'クッキー', 'romaji' => 'kukkii', 'meanings' => [
                'en' => ['cookie'],
                'nl' => ['koekje'],
            ]],
            ['kana' => 'アイスクリーム', 'romaji' => 'aisukuriimu', 'meanings' => [
                'en' => ['ice cream'],
                'nl' => ['ijs'],
            ]],
            ['kana' => 'あめ', 'romaji' => 'ame', 'meanings' => [
                'en' => ['candy'],
                'nl' => ['snoep'],
            ]],
            ['kana' => 'おにぎり', 'romaji' => 'onigiri', 'meanings' => [
                'en' => ['riceball'],
                'nl' => ['rijstbal'],
            ]],
            ['kana' => 'べんとう', 'romaji' => 'bentou', 'meanings' => [
                'en' => ['boxed lunch'],
                'nl' => ['bento'],
            ]],
            ['kana' => 'ピザ', 'romaji' => 'piza', 'meanings' => [
                'en' => ['pizza'],
                'nl' => ['pizza'],
            ]],
            ['kana' => 'ハンバーガー', 'romaji' => 'hanbaagaa', 'meanings' => [
                'en' => ['hamburger'],
                'nl' => ['hamburger'],
            ]],
            ['kana' => 'ポテト', 'romaji' => 'poteto', 'meanings' => [
                'en' => ['potato', 'fries'],
                'nl' => ['aardappel', 'friet'],
            ]],
            ['kana' => 'さら', 'romaji' => 'sara', 'meanings' => [
                'en' => ['plate'],
                'nl' => ['bord'],
            ]],
            ['kana' => 'コップ', 'romaji' => 'koppu', 'meanings' => [
                'en' => ['cup', 'glass'],
                'nl' => ['kop', 'glas'],
            ]],
            ['kana' => 'フォーク', 'romaji' => 'fooku', 'meanings' => [
                'en' => ['fork'],
                'nl' => ['vork'],
            ]],
            ['kana' => 'スプーン', 'romaji' => 'supuun', 'meanings' => [
                'en' => ['spoon'],
                'nl' => ['lepel'],
            ]],
            ['kana' => 'ナイフ', 'romaji' => 'naifu', 'meanings' => [
                'en' => ['knife'],
                'nl' => ['mes'],
            ]],
            ['kana' => 'レストラン', 'romaji' => 'resutoran', 'meanings' => [
                'en' => ['restaurant'],
                'nl' => ['restaurant'],
            ]],
            ['kana' => 'メニュー', 'romaji' => 'menyuu', 'meanings' => [
                'en' => ['menu'],
                'nl' => ['menu'],
            ]],
        ]);

        // Shopping
        $this->seedCategory('shopping', 'Shopping', [
            ['kana' => 'さいふ', 'romaji' => 'saifu', 'meanings' => [
                'en' => ['wallet'],
                'nl' => ['portemonnee'],
            ]],
            ['kana' => 'おかね', 'romaji' => 'okane', 'meanings' => [
                'en' => ['money'],
                'nl' => ['geld'],
            ]],
            ['kana' => 'カード', 'romaji' => 'kaado', 'meanings' => [
                'en' => ['card', 'credit card', 'debit card'],
                'nl' => ['kaart', 'creditcard', 'pinpas'],
            ]],
            ['kana' => 'レジ', 'romaji' => 'reji', 'meanings' => [
                'en' => ['register', 'checkout'],
                'nl' => ['kassa'],
            ]],
            ['kana' => 'ふくろ', 'romaji' => 'fukuro', 'meanings' => [
                'en' => ['bag'],
                'nl' => ['tas', 'zak'],
            ]],
            ['kana' => 'レジぶくろ', 'romaji' => 'rejibukuro', 'meanings' => [
                'en' => ['plastic shopping bag'],
                'nl' => ['plastic boodschappentas'],
            ]],
            ['kana' => 'セール', 'romaji' => 'seeru', 'meanings' => [
                'en' => ['sale'],
                'nl' => ['uitverkoop'],
            ]],
            ['kana' => 'サイズ', 'romaji' => 'saizu', 'meanings' => [
                'en' => ['size'],
                'nl' => ['maat'],
            ]],
            ['kana' => 'シャツ', 'romaji' => 'shatsu', 'meanings' => [
                'en' => ['shirt'],
                'nl' => ['overhemd'],
            ]],
            ['kana' => 'ズボン', 'romaji' => 'zubon', 'meanings' => [
                'en' => ['pants'],
                'nl' => ['broek'],
            ]],
            ['kana' => 'スカート', 'romaji' => 'sukaato', 'meanings' => [
                'en' => ['skirt'],
                'nl' => ['rok'],
            ]],
            ['kana' => 'ワンピース', 'romaji' => 'wanpiisu', 'meanings' => [
                'en' => ['dress'],
                'nl' => ['jurk'],
            ]],
            ['kana' => 'コート', 'romaji' => 'kooto', 'meanings' => [
                'en' => ['coat'],
                'nl' => ['jas'],
            ]],
            ['kana' => 'ジャケット', 'romaji' => 'jaketto', 'meanings' => [
                'en' => ['jacket'],
                'nl' => ['jack', 'jasje'],
            ]],
            ['kana' => 'くつ', 'romaji' => 'kutsu', 'meanings' => [
                'en' => ['shoes'],
                'nl' => ['schoenen'],
            ]],
            ['kana' => 'くつした', 'romaji' => 'kutsushita', 'meanings' => [
                'en' => ['socks'],
                'nl' => ['sokken'],
            ]],
            ['kana' => 'ぼうし', 'romaji' => 'boushi', 'meanings' => [
                'en' => ['hat'],
                'nl' => ['hoed', 'pet'],
            ]],
            ['kana' => 'てぶくろ', 'romaji' => 'tebukuro', 'meanings' => [
                'en' => ['gloves'],
                'nl' => ['handschoenen'],
            ]],
            ['kana' => 'かばん', 'romaji' => 'kaban', 'meanings' => [
                'en' => ['bag'],
                'nl' => ['tas'],
            ]],
            ['kana' => 'ネクタイ', 'romaji' => 'nekutai', 'meanings' => [
                'en' => ['necktie'],
                'nl' => ['stropdas'],
            ]],
            ['kana' => 'ベルト', 'romaji' => 'beruto', 'meanings' => [
                'en' => ['belt'],
                'nl' => ['riem'],
            ]],
            ['kana' => 'サンダル', 'romaji' => 'sandaru', 'meanings' => [
                'en' => ['sandals'],
                'nl' => ['sandalen'],
            ]],
            ['kana' => 'ブーツ', 'romaji' => 'buutsu', 'meanings' => [
                'en' => ['boots'],
                'nl' => ['laarzen'],
            ]],
            ['kana' => 'アクセサリー', 'romaji' => 'akusesarii', 'meanings' => [
                'en' => ['accessories'],
                'nl' => ['accessoires'],
            ]],
            ['kana' => 'てちょう', 'romaji' => 'techou', 'meanings' => [
                'en' => ['notebook', 'pocket diary'],
                'nl' => ['notitieboekje', 'zakagenda'],
            ]],
            ['kana' => 'えんぴつ', 'romaji' => 'enpitsu', 'meanings' => [
                'en' => ['pencil'],
                'nl' => ['potlood'],
            ]],
            ['kana' => 'ペン', 'romaji' => 'pen', 'meanings' => [
                'en' => ['pen'],
                'nl' => ['pen'],
            ]],
            ['kana' => 'ノート', 'romaji' => 'nooto', 'meanings' => [
                'en' => ['notebook'],
                'nl' => ['schrift'],
            ]],
            ['kana' => 'かさ', 'romaji' => 'kasa', 'meanings' => [
                'en' => ['umbrella'],
                'nl' => ['paraplu'],
            ]],
        ]);

        // Konbini & Supermarket
        $this->seedCategory('konbini-and-supermarket', 'Konbini & Supermarket', [
            ['kana' => 'カップめん', 'romaji' => 'kappu men', 'meanings' => [
                'en' => ['cup noodles'],
                'nl' => ['instantnoedels'],
            ]],
            ['kana' => 'チョコ', 'romaji' => 'choko', 'meanings' => [
                'en' => ['chocolate'],
                'nl' => ['chocolade'],
            ]],
            ['kana' => 'アイス', 'romaji' => 'aisu', 'meanings' => [
                'en' => ['ice cream'],
                'nl' => ['ijs'],
            ]],
            ['kana' => 'しんぶん', 'romaji' => 'shinbun', 'meanings' => [
                'en' => ['newspaper'],
                'nl' => ['krant'],
            ]],
            ['kana' => 'ざっし', 'romaji' => 'zasshi', 'meanings' => [
                'en' => ['magazine'],
                'nl' => ['tijdschrift'],
            ]],
            ['kana' => 'でんち', 'romaji' => 'denchi', 'meanings' => [
                'en' => ['batteries'],
                'nl' => ['batterijen'],
            ]],
            ['kana' => 'シャンプー', 'romaji' => 'shanpuu', 'meanings' => [
                'en' => ['shampoo'],
                'nl' => ['shampoo'],
            ]],
            ['kana' => 'リンス', 'romaji' => 'rinsu', 'meanings' => [
                'en' => ['conditioner'],
                'nl' => ['conditioner'],
            ]],
            ['kana' => 'はぶらし', 'romaji' => 'haburashi', 'meanings' => [
                'en' => ['toothbrush'],
                'nl' => ['tandenborstel'],
            ]],
            ['kana' => 'はみがき', 'romaji' => 'hamigaki', 'meanings' => [
                'en' => ['toothpaste'],
                'nl' => ['tandpasta'],
            ]],
            ['kana' => 'ごみぶくろ', 'romaji' => 'gomibukuro', 'meanings' => [
                'en' => ['trash bag'],
                'nl' => ['vuilniszak'],
            ]],
            ['kana' => 'マスク', 'romaji' => 'masuku', 'meanings' => [
                'en' => ['face mask'],
                'nl' => ['mondkapje'],
            ]],
            ['kana' => 'ひやけどめ', 'romaji' => 'hiyakedome', 'meanings' => [
                'en' => ['sunscreen'],
                'nl' => ['zonnebrandcrème'],
            ]],
            ['kana' => 'カイロ', 'romaji' => 'kairo', 'meanings' => [
                'en' => ['disposable hand warmer'],
                'nl' => ['handwarmer'],
            ]],
            ['kana' => 'ばんそうこう', 'romaji' => 'bansoukou', 'meanings' => [
                'en' => ['band-aid'],
                'nl' => ['pleister'],
            ]],
            ['kana' => 'テープ', 'romaji' => 'teepu', 'meanings' => [
                'en' => ['tape'],
                'nl' => ['tape'],
            ]],
            ['kana' => 'のり', 'romaji' => 'nori', 'meanings' => [
                'en' => ['glue'],
                'nl' => ['lijm'],
            ]],
            ['kana' => 'えんぴつけずり', 'romaji' => 'enpitsukezuri', 'meanings' => [
                'en' => ['pencil sharpener'],
                'nl' => ['puntenslijper'],
            ]],
            ['kana' => 'ライター', 'romaji' => 'raitaa', 'meanings' => [
                'en' => ['lighter'],
                'nl' => ['aansteker'],
            ]],
            ['kana' => 'せんぷうき', 'romaji' => 'senpuuki', 'meanings' => [
                'en' => ['electric fan'],
                'nl' => ['ventilator'],
            ]],
            ['kana' => 'でんきゅう', 'romaji' => 'denkyuu', 'meanings' => [
                'en' => ['light bulb'],
                'nl' => ['gloeilamp'],
            ]],
            ['kana' => 'メモちょう', 'romaji' => 'memo chou', 'meanings' => [
                'en' => ['memo pad'],
                'nl' => ['notitieblok'],
            ]],
            ['kana' => 'メールびん', 'romaji' => 'meerubin', 'meanings' => [
                'en' => ['mailing envelope'],
                'nl' => ['verzendenvelop'],
            ]],
            ['kana' => 'ふうとう', 'romaji' => 'fuutou', 'meanings' => [
                'en' => ['envelope'],
                'nl' => ['envelop'],
            ]],
            ['kana' => 'きって', 'romaji' => 'kitte', 'meanings' => [
                'en' => ['stamp'],
                'nl' => ['postzegel'],
            ]],
            ['kana' => 'はがき', 'romaji' => 'hagaki', 'meanings' => [
                'en' => ['postcard'],
                'nl' => ['ansichtkaart'],
            ]],
            ['kana' => 'ティッシュ', 'romaji' => 'tisshu', 'meanings' => [
                'en' => ['tissue'],
                'nl' => ['zakdoekje'],
            ]],
            ['kana' => 'トイレットペーパー', 'romaji' => 'toiretto peepaa', 'meanings' => [
                'en' => ['toilet paper'],
                'nl' => ['toiletpapier'],
            ]],
        ]);

        // Household & Toiletries
        $this->seedCategory('household-and-toiletries', 'Household & Toiletries', [
            ['kana' => 'タオル', 'romaji' => 'taoru', 'meanings' => [
                'en' => ['towel'],
                'nl' => ['handdoek'],
            ]],
            ['kana' => 'バスタオル', 'romaji' => 'basutaoru', 'meanings' => [
                'en' => ['bath towel'],
                'nl' => ['badhanddoek'],
            ]],
            ['kana' => 'せっけん', 'romaji' => 'sekken', 'meanings' => [
                'en' => ['soap'],
                'nl' => ['zeep'],
            ]],
            ['kana' => 'シャワー', 'romaji' => 'shawaa', 'meanings' => [
                'en' => ['shower'],
                'nl' => ['douche'],
            ]],
            ['kana' => 'トイレ', 'romaji' => 'toire', 'meanings' => [
                'en' => ['toilet'],
                'nl' => ['toilet'],
            ]],
            ['kana' => 'おふろ', 'romaji' => 'ofuro', 'meanings' => [
                'en' => ['bath'],
                'nl' => ['bad'],
            ]],
            ['kana' => 'ふろおけ', 'romaji' => 'furooke', 'meanings' => [
                'en' => ['bath bucket'],
                'nl' => ['waskuipje'],
            ]],
            ['kana' => 'トイレブラシ', 'romaji' => 'toire burashi', 'meanings' => [
                'en' => ['toilet brush'],
                'nl' => ['wc-borstel'],
            ]],
            ['kana' => 'そうじき', 'romaji' => 'soujiki', 'meanings' => [
                'en' => ['vacuum cleaner'],
                'nl' => ['stofzuiger'],
            ]],
            ['kana' => 'ほうき', 'romaji' => 'houki', 'meanings' => [
                'en' => ['broom'],
                'nl' => ['bezem'],
            ]],
            ['kana' => 'ちりとり', 'romaji' => 'chiritori', 'meanings' => [
                'en' => ['dustpan'],
                'nl' => ['stofblik'],
            ]],
            ['kana' => 'モップ', 'romaji' => 'moppu', 'meanings' => [
                'en' => ['mop'],
                'nl' => ['dweil'],
            ]],
            ['kana' => 'ごみばこ', 'romaji' => 'gomibako', 'meanings' => [
                'en' => ['trash bin'],
                'nl' => ['prullenbak'],
            ]],
            ['kana' => 'でんき', 'romaji' => 'denki', 'meanings' => [
                'en' => ['electricity', 'light'],
                'nl' => ['elektriciteit', 'licht'],
            ]],
            ['kana' => 'スイッチ', 'romaji' => 'suicchi', 'meanings' => [
                'en' => ['switch'],
                'nl' => ['schakelaar'],
            ]],
            ['kana' => 'エアコン', 'romaji' => 'eakon', 'meanings' => [
                'en' => ['air conditioner'],
                'nl' => ['airco'],
            ]],
            ['kana' => 'ストーブ', 'romaji' => 'sutoobu', 'meanings' => [
                'en' => ['heater'],
                'nl' => ['kachel'],
            ]],
            ['kana' => 'まど', 'romaji' => 'mado', 'meanings' => [
                'en' => ['window'],
                'nl' => ['raam'],
            ]],
            ['kana' => 'ドア', 'romaji' => 'doa', 'meanings' => [
                'en' => ['door'],
                'nl' => ['deur'],
            ]],
            ['kana' => 'かがみ', 'romaji' => 'kagami', 'meanings' => [
                'en' => ['mirror'],
                'nl' => ['spiegel'],
            ]],
            ['kana' => 'カーテン', 'romaji' => 'kaaten', 'meanings' => [
                'en' => ['curtain'],
                'nl' => ['gordijn'],
            ]],
            ['kana' => 'ベッド', 'romaji' => 'beddo', 'meanings' => [
                'en' => ['bed'],
                'nl' => ['bed'],
            ]],
            ['kana' => 'まくら', 'romaji' => 'makura', 'meanings' => [
                'en' => ['pillow'],
                'nl' => ['kussen'],
            ]],
            ['kana' => 'ふとん', 'romaji' => 'futon', 'meanings' => [
                'en' => ['futon'],
                'nl' => ['futon'],
            ]],
            ['kana' => 'もうふ', 'romaji' => 'moufu', 'meanings' => [
                'en' => ['blanket'],
                'nl' => ['deken'],
            ]],
            ['kana' => 'たんす', 'romaji' => 'tansu', 'meanings' => [
                'en' => ['dresser', 'chest'],
                'nl' => ['ladekast', 'kist'],
            ]],
            ['kana' => 'ハンガー', 'romaji' => 'hangaa', 'meanings' => [
                'en' => ['hanger'],
                'nl' => ['kleerhanger'],
            ]],
            ['kana' => 'アイロン', 'romaji' => 'airon', 'meanings' => [
                'en' => ['iron'],
                'nl' => ['strijkijzer'],
            ]],
            ['kana' => 'せんたくき', 'romaji' => 'sentakuki', 'meanings' => [
                'en' => ['washing machine'],
                'nl' => ['wasmachine'],
            ]],
            ['kana' => 'ものほし', 'romaji' => 'monohoshi', 'meanings' => [
                'en' => ['laundry hanger'],
                'nl' => ['wasrek'],
            ]],
        ]);

        // Tech & Tools
        $this->seedCategory('tech-and-tools', 'Tech & Tools', [
            ['kana' => 'スマホ', 'romaji' => 'sumaho', 'meanings' => [
                'en' => ['smartphone'],
                'nl' => ['smartphone'],
            ]],
            ['kana' => 'けいたい', 'romaji' => 'keitai', 'meanings' => [
                'en' => ['cellphone'],
                'nl' => ['mobiele telefoon'],
            ]],
            ['kana' => 'パソコン', 'romaji' => 'pasokon', 'meanings' => [
                'en' => ['computer', 'laptop'],
                'nl' => ['computer', 'laptop'],
            ]],
            ['kana' => 'タブレット', 'romaji' => 'taburetto', 'meanings' => [
                'en' => ['tablet'],
                'nl' => ['tablet'],
            ]],
            ['kana' => 'でんわ', 'romaji' => 'denwa', 'meanings' => [
                'en' => ['telephone'],
                'nl' => ['telefoon'],
            ]],
            ['kana' => 'イヤホン', 'romaji' => 'iyahon', 'meanings' => [
                'en' => ['earphones'],
                'nl' => ['oordopjes'],
            ]],
            ['kana' => 'ヘッドホン', 'romaji' => 'heddohon', 'meanings' => [
                'en' => ['headphones'],
                'nl' => ['koptelefoon'],
            ]],
            ['kana' => 'リモコン', 'romaji' => 'rimokon', 'meanings' => [
                'en' => ['remote control'],
                'nl' => ['afstandbediening'],
            ]],
            ['kana' => 'マウス', 'romaji' => 'mausu', 'meanings' => [
                'en' => ['computer mouse'],
                'nl' => ['muis'],
            ]],
            ['kana' => 'キーボード', 'romaji' => 'kiiboodo', 'meanings' => [
                'en' => ['keyboard'],
                'nl' => ['toetsenbord'],
            ]],
            ['kana' => 'スクリーン', 'romaji' => 'sukuriin', 'meanings' => [
                'en' => ['screen'],
                'nl' => ['scherm'],
            ]],
            ['kana' => 'ワイファイルーター', 'romaji' => 'waifai ruutaa', 'meanings' => [
                'en' => ['WiFi router'],
                'nl' => ['wifi-router'],
            ]],
            ['kana' => 'ケーブル', 'romaji' => 'keeburu', 'meanings' => [
                'en' => ['cable'],
                'nl' => ['kabel'],
            ]],
            ['kana' => 'じゅうでんき', 'romaji' => 'juudenki', 'meanings' => [
                'en' => ['charger'],
                'nl' => ['oplader'],
            ]],
            ['kana' => 'USBメモリ', 'romaji' => 'yuuesubii memori', 'meanings' => [
                'en' => ['USB drive'],
                'nl' => ['USB-stick'],
            ]],
            ['kana' => 'SDカード', 'romaji' => 'esudii kaado', 'meanings' => [
                'en' => ['SD card'],
                'nl' => ['SD-kaart'],
            ]],
            ['kana' => 'カメラ', 'romaji' => 'kamera', 'meanings' => [
                'en' => ['camera'],
                'nl' => ['camera'],
            ]],
            ['kana' => 'ラジオ', 'romaji' => 'rajio', 'meanings' => [
                'en' => ['radio'],
                'nl' => ['radio'],
            ]],
            ['kana' => 'テレビ', 'romaji' => 'terebi', 'meanings' => [
                'en' => ['television'],
                'nl' => ['televisie'],
            ]],
            ['kana' => 'プリンター', 'romaji' => 'purintaa', 'meanings' => [
                'en' => ['printer'],
                'nl' => ['printer'],
            ]],
            ['kana' => 'スキャナー', 'romaji' => 'sukyanaa', 'meanings' => [
                'en' => ['scanner'],
                'nl' => ['scanner'],
            ]],
            ['kana' => 'とけい', 'romaji' => 'tokei', 'meanings' => [
                'en' => ['clock', 'watch'],
                'nl' => ['klok', 'horloge'],
            ]],
            ['kana' => 'アラーム', 'romaji' => 'araamu', 'meanings' => [
                'en' => ['alarm'],
                'nl' => ['wekker', 'alarm'],
            ]],
            ['kana' => 'はさみ', 'romaji' => 'hasami', 'meanings' => [
                'en' => ['scissors'],
                'nl' => ['schaar'],
            ]],
            ['kana' => 'ドライバー', 'romaji' => 'doraibaa', 'meanings' => [
                'en' => ['screwdriver'],
                'nl' => ['schroevendraaier'],
            ]],
            ['kana' => 'レンチ', 'romaji' => 'renchi', 'meanings' => [
                'en' => ['wrench'],
                'nl' => ['moersleutel'],
            ]],
            ['kana' => 'かなづち', 'romaji' => 'kanazuchi', 'meanings' => [
                'en' => ['hammer'],
                'nl' => ['hamer'],
            ]],
            ['kana' => 'ものさし', 'romaji' => 'monosashi', 'meanings' => [
                'en' => ['ruler'],
                'nl' => ['lineaal'],
            ]],
            ['kana' => 'ホッチキス', 'romaji' => 'hotchikisu', 'meanings' => [
                'en' => ['stapler'],
                'nl' => ['nietmachine'],
            ]],
            ['kana' => 'カッター', 'romaji' => 'kattaa', 'meanings' => [
                'en' => ['box cutter'],
                'nl' => ['stanleymes'],
            ]],
            ['kana' => 'クリップ', 'romaji' => 'kurippu', 'meanings' => [
                'en' => ['paper clip'],
                'nl' => ['paperclip'],
            ]],
            ['kana' => 'じょうぎ', 'romaji' => 'jougi', 'meanings' => [
                'en' => ['ruler (alternative)'],
                'nl' => ['liniaal (alternatief)'],
            ]],
        ]);

        // Government/Admin/Paperwork
        $this->seedCategory('government-admin-paperwork', 'Government/Admin/Paperwork', [
            ['kana' => 'パスポート', 'romaji' => 'pasupooto', 'meanings' => [
                'en' => ['passport'],
                'nl' => ['paspoort'],
            ]],
            ['kana' => 'しょうめいしょ', 'romaji' => 'shoumeisho', 'meanings' => [
                'en' => ['certificate', 'proof of ID'],
                'nl' => ['certificaat', 'bewijs van identiteit'],
            ]],
            ['kana' => 'がいこくじんカード', 'romaji' => 'gaikokujin kaado', 'meanings' => [
                'en' => ['residence card'],
                'nl' => ['verblijfskaart'],
            ]],
            ['kana' => 'かみ', 'romaji' => 'kami', 'meanings' => [
                'en' => ['paper'],
                'nl' => ['papier'],
            ]],
            ['kana' => 'しょるい', 'romaji' => 'shorui', 'meanings' => [
                'en' => ['document'],
                'nl' => ['document'],
            ]],
            ['kana' => 'しんせいしょ', 'romaji' => 'shinseisho', 'meanings' => [
                'en' => ['application form'],
                'nl' => ['aanvraagformulier'],
            ]],
            ['kana' => 'もうしこみしょ', 'romaji' => 'moushikomisho', 'meanings' => [
                'en' => ['registration form'],
                'nl' => ['inschrijfformulier'],
            ]],
            ['kana' => 'はんこ', 'romaji' => 'hanko', 'meanings' => [
                'en' => ['personal seal'],
                'nl' => ['persoonlijke stempel'],
            ]],
            ['kana' => 'いんかん', 'romaji' => 'inkan', 'meanings' => [
                'en' => ['registered seal'],
                'nl' => ['geregistreerde stempel'],
            ]],
            ['kana' => 'じゅうしょ', 'romaji' => 'juusho', 'meanings' => [
                'en' => ['address'],
                'nl' => ['adres'],
            ]],
            ['kana' => 'けいたいばんごう', 'romaji' => 'keitai bangou', 'meanings' => [
                'en' => ['mobile number'],
                'nl' => ['mobiel nummer'],
            ]],
            ['kana' => 'ばんごう', 'romaji' => 'bangou', 'meanings' => [
                'en' => ['number'],
                'nl' => ['nummer'],
            ]],
            ['kana' => 'せいねんがっぴ', 'romaji' => 'seinengappi', 'meanings' => [
                'en' => ['date of birth'],
                'nl' => ['geboortedatum'],
            ]],
            ['kana' => 'けんこうほけん', 'romaji' => 'kenkou hoken', 'meanings' => [
                'en' => ['health insurance'],
                'nl' => ['ziektekostenverzekering'],
            ]],
            ['kana' => 'こくみんねんきん', 'romaji' => 'kokumin nenkin', 'meanings' => [
                'en' => ['national pension'],
                'nl' => ['nationale pensioenregeling'],
            ]],
            ['kana' => 'ぜいきん', 'romaji' => 'zeikin', 'meanings' => [
                'en' => ['tax'],
                'nl' => ['belasting'],
            ]],
            ['kana' => 'くやくしょ', 'romaji' => 'kuyakusho', 'meanings' => [
                'en' => ['ward office'],
                'nl' => ['wijkkantoor'],
            ]],
            ['kana' => 'としょかん', 'romaji' => 'toshokan', 'meanings' => [
                'en' => ['library'],
                'nl' => ['bibliotheek'],
            ]],
            ['kana' => 'ゆうびんきょく', 'romaji' => 'yuubinkyoku', 'meanings' => [
                'en' => ['post office'],
                'nl' => ['postkantoor'],
            ]],
            ['kana' => 'ぎんこう', 'romaji' => 'ginkou', 'meanings' => [
                'en' => ['bank'],
                'nl' => ['bank'],
            ]],
            ['kana' => 'ATM', 'romaji' => 'eeteemu', 'meanings' => [
                'en' => ['ATM'],
                'nl' => ['geldautomaat'],
            ]],
            ['kana' => 'こうざ', 'romaji' => 'kouza', 'meanings' => [
                'en' => ['bank account'],
                'nl' => ['bankrekening'],
            ]],
            ['kana' => 'キャッシュカード', 'romaji' => 'kyashu kaado', 'meanings' => [
                'en' => ['cash card', 'bank card'],
                'nl' => ['pinpas', 'bankkaart'],
            ]],
            ['kana' => 'てがみ', 'romaji' => 'tegami', 'meanings' => [
                'en' => ['letter'],
                'nl' => ['brief'],
            ]],
            ['kana' => 'にゅうがくしょうめいしょ', 'romaji' => 'nyuugaku shoumeisho', 'meanings' => [
                'en' => ['school enrollment certificate'],
                'nl' => ['bewijs van schoolinschrijving'],
            ]],
            ['kana' => 'がくせいしょう', 'romaji' => 'gakuseisho', 'meanings' => [
                'en' => ['student ID'],
                'nl' => ['studentenkaart'],
            ]],
            ['kana' => 'こうふしょ', 'romaji' => 'koufusho', 'meanings' => [
                'en' => ['official receipt', 'issue slip'],
                'nl' => ['officieel ontvangstbewijs', 'uitgiftebon'],
            ]],
            ['kana' => 'じゅうみんひょう', 'romaji' => 'juuminhyou', 'meanings' => [
                'en' => ['residence certificate'],
                'nl' => ['inwonersverklaring'],
            ]],
            ['kana' => 'せいふく', 'romaji' => 'seifuku', 'meanings' => [
                'en' => ['uniform'],
                'nl' => ['uniform'],
            ]],
            ['kana' => 'こくみんけんこうほけん', 'romaji' => 'kokumin kenkou hoken', 'meanings' => [
                'en' => ['national health insurance'],
                'nl' => ['nationale ziektekostenverzekering'],
            ]],
        ]);

        // Counting
        // Basic Numbers
        $this->seedCategory('counting-numbers', 'Basic Numbers', [
            ['kana' => 'いち', 'romaji' => 'ichi', 'meanings' => ['1']],
            ['kana' => 'に', 'romaji' => 'ni', 'meanings' => ['2']],
            ['kana' => 'さん', 'romaji' => 'san', 'meanings' => ['3']],
            ['kana' => 'よん', 'romaji' => 'yon', 'meanings' => ['4', 'し']],
            ['kana' => 'ご', 'romaji' => 'go', 'meanings' => ['5']],
            ['kana' => 'ろく', 'romaji' => 'roku', 'meanings' => ['6']],
            ['kana' => 'なな', 'romaji' => 'nana', 'meanings' => ['7', 'しち']],
            ['kana' => 'はち', 'romaji' => 'hachi', 'meanings' => ['8']],
            ['kana' => 'きゅう', 'romaji' => 'kyuu', 'meanings' => ['9', 'く']],
            ['kana' => 'じゅう', 'romaji' => 'juu', 'meanings' => ['10']],
            ['kana' => 'じゅういち', 'romaji' => 'juuichi', 'meanings' => ['11']],
            ['kana' => 'じゅうに', 'romaji' => 'juuni', 'meanings' => ['12']],
            ['kana' => 'じゅうさん', 'romaji' => 'juusan', 'meanings' => ['13']],
            ['kana' => 'じゅうよん', 'romaji' => 'juuyon', 'meanings' => ['14', 'じゅうし']],
            ['kana' => 'じゅうご', 'romaji' => 'juugo', 'meanings' => ['15']],
            ['kana' => 'じゅうろく', 'romaji' => 'juuroku', 'meanings' => ['16']],
            ['kana' => 'じゅうなな', 'romaji' => 'juunana', 'meanings' => ['17', 'じゅうしち']],
            ['kana' => 'じゅうはち', 'romaji' => 'juuhachi', 'meanings' => ['18']],
            ['kana' => 'じゅうきゅう', 'romaji' => 'juukyuu', 'meanings' => ['19', 'じゅうく']],
            ['kana' => 'にじゅう', 'romaji' => 'nijuu', 'meanings' => ['20']],
            ['kana' => 'さんじゅう', 'romaji' => 'sanjuu', 'meanings' => ['30']],
            ['kana' => 'よんじゅう', 'romaji' => 'yonjuu', 'meanings' => ['40']],
            ['kana' => 'ごじゅう', 'romaji' => 'gojuu', 'meanings' => ['50']],
            ['kana' => 'ろくじゅう', 'romaji' => 'rokujuu', 'meanings' => ['60']],
            ['kana' => 'ななじゅう', 'romaji' => 'nanajuu', 'meanings' => ['70']],
            ['kana' => 'はちじゅう', 'romaji' => 'hachijuu', 'meanings' => ['80']],
            ['kana' => 'きゅうじゅう', 'romaji' => 'kyuujuu', 'meanings' => ['90']],
            ['kana' => 'ひゃく', 'romaji' => 'hyaku', 'meanings' => ['100']],
        ]);

        // People
        $this->seedCategory('counting-people', 'People', [
            ['kana' => 'ひとり', 'romaji' => 'hitori', 'meanings' => [
                'en' => ['1 person'],
                'nl' => ['1 persoon'],
            ]],
            ['kana' => 'ふたり', 'romaji' => 'futari', 'meanings' => [
                'en' => ['2 people'],
                'nl' => ['2 personen'],
            ]],
            ['kana' => 'さんにん', 'romaji' => 'sannin', 'meanings' => [
                'en' => ['3 people'],
                'nl' => ['3 personen'],
            ]],
            ['kana' => 'よにん', 'romaji' => 'yonin', 'meanings' => [
                'en' => ['4 people'],
                'nl' => ['4 personen'],
            ]],
            ['kana' => 'ごにん', 'romaji' => 'gonin', 'meanings' => [
                'en' => ['5 people'],
                'nl' => ['5 personen'],
            ]],
            ['kana' => 'ろくにん', 'romaji' => 'rokunin', 'meanings' => [
                'en' => ['6 people'],
                'nl' => ['6 personen'],
            ]],
            ['kana' => 'ななにん', 'romaji' => 'nananin', 'meanings' => [
                'en' => ['7 people'],
                'nl' => ['7 personen'],
            ]],
            ['kana' => 'はちにん', 'romaji' => 'hachinin', 'meanings' => [
                'en' => ['8 people'],
                'nl' => ['8 personen'],
            ]],
            ['kana' => 'きゅうにん', 'romaji' => 'kyuunin', 'meanings' => [
                'en' => ['9 people'],
                'nl' => ['9 personen'],
            ]],
            ['kana' => 'じゅうにん', 'romaji' => 'juunin', 'meanings' => [
                'en' => ['10 people'],
                'nl' => ['10 personen'],
            ]],
        ]);

        // Age
        $this->seedCategory('counting-age', 'Age', [
            ['kana' => 'いっさい', 'romaji' => 'issai', 'meanings' => [
                'en' => ['1 year old'],
                'nl' => ['1 jaar oud'],
            ]],
            ['kana' => 'にさい', 'romaji' => 'nisai', 'meanings' => [
                'en' => ['2 years old'],
                'nl' => ['2 jaar oud'],
            ]],
            ['kana' => 'さんさい', 'romaji' => 'sansai', 'meanings' => [
                'en' => ['3 years old'],
                'nl' => ['3 jaar oud'],
            ]],
            ['kana' => 'よんさい', 'romaji' => 'yonsai', 'meanings' => [
                'en' => ['4 years old'],
                'nl' => ['4 jaar oud'],
            ]],
            ['kana' => 'ごさい', 'romaji' => 'gosai', 'meanings' => [
                'en' => ['5 years old'],
                'nl' => ['5 jaar oud'],
            ]],
            ['kana' => 'ろくさい', 'romaji' => 'rokusai', 'meanings' => [
                'en' => ['6 years old'],
                'nl' => ['6 jaar oud'],
            ]],
            ['kana' => 'ななさい', 'romaji' => 'nanasai', 'meanings' => [
                'en' => ['7 years old'],
                'nl' => ['7 jaar oud'],
            ]],
            ['kana' => 'はっさい', 'romaji' => 'hassai', 'meanings' => [
                'en' => ['8 years old'],
                'nl' => ['8 jaar oud'],
            ]],
            ['kana' => 'きゅうさい', 'romaji' => 'kyuusai', 'meanings' => [
                'en' => ['9 years old'],
                'nl' => ['9 jaar oud'],
            ]],
            ['kana' => 'じゅっさい', 'romaji' => 'jussai', 'meanings' => [
                'en' => ['10 years old'],
                'nl' => ['10 jaar oud'],
            ]],
            ['kana' => 'じゅういっさい', 'romaji' => 'juuissai', 'meanings' => [
                'en' => ['11 years old'],
                'nl' => ['11 jaar oud'],
            ]],
            ['kana' => 'じゅうにさい', 'romaji' => 'juunisai', 'meanings' => [
                'en' => ['12 years old'],
                'nl' => ['12 jaar oud'],
            ]],
            ['kana' => 'じゅうさんさい', 'romaji' => 'juusansai', 'meanings' => [
                'en' => ['13 years old'],
                'nl' => ['13 jaar oud'],
            ]],
            ['kana' => 'じゅうよんさい', 'romaji' => 'juuyonsai', 'meanings' => [
                'en' => ['14 years old'],
                'nl' => ['14 jaar oud'],
            ]],
            ['kana' => 'じゅうごさい', 'romaji' => 'juugosai', 'meanings' => [
                'en' => ['15 years old'],
                'nl' => ['15 jaar oud'],
            ]],
            ['kana' => 'じゅうろくさい', 'romaji' => 'juurokusai', 'meanings' => [
                'en' => ['16 years old'],
                'nl' => ['16 jaar oud'],
            ]],
            ['kana' => 'じゅうななさい', 'romaji' => 'juunanasai', 'meanings' => [
                'en' => ['17 years old'],
                'nl' => ['17 jaar oud'],
            ]],
            ['kana' => 'じゅうはっさい', 'romaji' => 'juuhassai', 'meanings' => [
                'en' => ['18 years old'],
                'nl' => ['18 jaar oud'],
            ]],
            ['kana' => 'じゅうきゅうさい', 'romaji' => 'juukyuusai', 'meanings' => [
                'en' => ['19 years old'],
                'nl' => ['19 jaar oud'],
            ]],
            ['kana' => 'はたち', 'romaji' => 'hatachi', 'meanings' => [
                'en' => ['20 years old'],
                'nl' => ['20 jaar oud'],
            ]],
        ]);

        // Hours
        $this->seedCategory('counting-hours', 'Hours', [
            ['kana' => 'れいじ', 'romaji' => 'rei ji', 'meanings' => [
                'en' => ['0 o\'clock'],
                'nl' => ['0 uur'],
            ]],
            ['kana' => 'いちじ', 'romaji' => 'ichi ji', 'meanings' => [
                'en' => ['1 o\'clock'],
                'nl' => ['1 uur'],
            ]],
            ['kana' => 'にじ', 'romaji' => 'ni ji', 'meanings' => [
                'en' => ['2 o\'clock'],
                'nl' => ['2 uur'],
            ]],
            ['kana' => 'さんじ', 'romaji' => 'san ji', 'meanings' => [
                'en' => ['3 o\'clock'],
                'nl' => ['3 uur'],
            ]],
            ['kana' => 'よじ', 'romaji' => 'yo ji', 'meanings' => [
                'en' => ['4 o\'clock'],
                'nl' => ['4 uur'],
            ]],
            ['kana' => 'ごじ', 'romaji' => 'go ji', 'meanings' => [
                'en' => ['5 o\'clock'],
                'nl' => ['5 uur'],
            ]],
            ['kana' => 'ろくじ', 'romaji' => 'roku ji', 'meanings' => [
                'en' => ['6 o\'clock'],
                'nl' => ['6 uur'],
            ]],
            ['kana' => 'しちじ', 'romaji' => 'shichi ji', 'meanings' => [
                'en' => ['7 o\'clock'],
                'nl' => ['7 uur'],
            ]],
            ['kana' => 'はちじ', 'romaji' => 'hachi ji', 'meanings' => [
                'en' => ['8 o\'clock'],
                'nl' => ['8 uur'],
            ]],
            ['kana' => 'くじ', 'romaji' => 'ku ji', 'meanings' => [
                'en' => ['9 o\'clock'],
                'nl' => ['9 uur'],
            ]],
            ['kana' => 'じゅうじ', 'romaji' => 'juu ji', 'meanings' => [
                'en' => ['10 o\'clock'],
                'nl' => ['10 uur'],
            ]],
            ['kana' => 'じゅういちじ', 'romaji' => 'juuichi ji', 'meanings' => [
                'en' => ['11 o\'clock'],
                'nl' => ['11 uur'],
            ]],
            ['kana' => 'じゅうにじ', 'romaji' => 'juuni ji', 'meanings' => [
                'en' => ['12 o\'clock'],
                'nl' => ['12 uur'],
            ]],
            ['kana' => 'じゅうさんじ', 'romaji' => 'juusan ji', 'meanings' => [
                'en' => ['13 o\'clock'],
                'nl' => ['13 uur'],
            ]],
            ['kana' => 'じゅうよじ', 'romaji' => 'juuyo ji', 'meanings' => [
                'en' => ['14 o\'clock'],
                'nl' => ['14 uur'],
            ]],
            ['kana' => 'じゅうごじ', 'romaji' => 'juugo ji', 'meanings' => [
                'en' => ['15 o\'clock'],
                'nl' => ['15 uur'],
            ]],
            ['kana' => 'じゅうろくじ', 'romaji' => 'juuroku ji', 'meanings' => [
                'en' => ['16 o\'clock'],
                'nl' => ['16 uur'],
            ]],
            ['kana' => 'じゅうしちじ', 'romaji' => 'juushichi ji', 'meanings' => [
                'en' => ['17 o\'clock'],
                'nl' => ['17 uur'],
            ]],
            ['kana' => 'じゅうはちじ', 'romaji' => 'juuhachi ji', 'meanings' => [
                'en' => ['18 o\'clock'],
                'nl' => ['18 uur'],
            ]],
            ['kana' => 'じゅうくじ', 'romaji' => 'juuku ji', 'meanings' => [
                'en' => ['19 o\'clock'],
                'nl' => ['19 uur'],
            ]],
            ['kana' => 'にじゅうじ', 'romaji' => 'nijuu ji', 'meanings' => [
                'en' => ['20 o\'clock'],
                'nl' => ['20 uur'],
            ]],
            ['kana' => 'にじゅういちじ', 'romaji' => 'nijuuichi ji', 'meanings' => [
                'en' => ['21 o\'clock'],
                'nl' => ['21 uur'],
            ]],
            ['kana' => 'にじゅうにじ', 'romaji' => 'nijuuni ji', 'meanings' => [
                'en' => ['22 o\'clock'],
                'nl' => ['22 uur'],
            ]],
            ['kana' => 'にじゅうさんじ', 'romaji' => 'nijuusan ji', 'meanings' => [
                'en' => ['23 o\'clock'],
                'nl' => ['23 uur'],
            ]],
            ['kana' => 'にじゅうよじ', 'romaji' => 'nijuuyo ji', 'meanings' => [
                'en' => ['24 o\'clock'],
                'nl' => ['24 uur'],
            ]],
        ]);

        // Minutes
        $this->seedCategory('counting-minutes', 'Minutes', [
            ['kana' => 'いっぷん', 'romaji' => 'ippun', 'meanings' => [
                'en' => ['1 minute'],
                'nl' => ['1 minuut'],
            ]],
            ['kana' => 'にふん', 'romaji' => 'ni fun', 'meanings' => [
                'en' => ['2 minutes'],
                'nl' => ['2 minuten'],
            ]],
            ['kana' => 'さんぷん', 'romaji' => 'san pun', 'meanings' => [
                'en' => ['3 minutes'],
                'nl' => ['3 minuten'],
            ]],
            ['kana' => 'よんぷん', 'romaji' => 'yon pun', 'meanings' => [
                'en' => ['4 minutes'],
                'nl' => ['4 minuten'],
            ]],
            ['kana' => 'ごふん', 'romaji' => 'go fun', 'meanings' => [
                'en' => ['5 minutes'],
                'nl' => ['5 minuten'],
            ]],
            ['kana' => 'ろっぷん', 'romaji' => 'roppun', 'meanings' => [
                'en' => ['6 minutes'],
                'nl' => ['6 minuten'],
            ]],
            ['kana' => 'ななふん', 'romaji' => 'nana fun', 'meanings' => [
                'en' => ['7 minutes'],
                'nl' => ['7 minuten'],
            ]],
            ['kana' => 'はっぷん', 'romaji' => 'happun', 'meanings' => [
                'en' => ['8 minutes'],
                'nl' => ['8 minuten'],
            ]],
            ['kana' => 'きゅうふん', 'romaji' => 'kyuu fun', 'meanings' => [
                'en' => ['9 minutes'],
                'nl' => ['9 minuten'],
            ]],
            ['kana' => 'じゅっぷん', 'romaji' => 'juppun', 'meanings' => [
                'en' => ['10 minutes'],
                'nl' => ['10 minuten'],
            ]],
            ['kana' => 'じゅうごふん', 'romaji' => 'juugo fun', 'meanings' => [
                'en' => ['15 minutes'],
                'nl' => ['15 minuten'],
            ]],
            ['kana' => 'にじゅっぷん', 'romaji' => 'nijuppun', 'meanings' => [
                'en' => ['20 minutes'],
                'nl' => ['20 minuten'],
            ]],
            ['kana' => 'にじゅうごふん', 'romaji' => 'nijuugo fun', 'meanings' => [
                'en' => ['25 minutes'],
                'nl' => ['25 minuten'],
            ]],
            ['kana' => 'さんじゅっぷん', 'romaji' => 'sanjuppun', 'meanings' => [
                'en' => ['30 minutes'],
                'nl' => ['30 minuten'],
            ]],
            ['kana' => 'さんじゅうごふん', 'romaji' => 'sanjuugo fun', 'meanings' => [
                'en' => ['35 minutes'],
                'nl' => ['35 minuten'],
            ]],
            ['kana' => 'よんじゅっぷん', 'romaji' => 'yonjuppun', 'meanings' => [
                'en' => ['40 minutes'],
                'nl' => ['40 minuten'],
            ]],
            ['kana' => 'よんじゅうごふん', 'romaji' => 'yonjuugo fun', 'meanings' => [
                'en' => ['45 minutes'],
                'nl' => ['45 minuten'],
            ]],
            ['kana' => 'ごじゅっぷん', 'romaji' => 'gojuppun', 'meanings' => [
                'en' => ['50 minutes'],
                'nl' => ['50 minuten'],
            ]],
            ['kana' => 'ごじゅうごふん', 'romaji' => 'gojuugo fun', 'meanings' => [
                'en' => ['55 minutes'],
                'nl' => ['55 minuten'],
            ]],
            ['kana' => 'ろくじゅっぷん', 'romaji' => 'rokujuppun', 'meanings' => [
                'en' => ['60 minutes'],
                'nl' => ['60 minuten'],
            ]],
        ]);

        // Seconds
        $this->seedCategory('counting-seconds', 'Seconds', [
            ['kana' => 'いちびょう', 'romaji' => 'ichi byou', 'meanings' => [
                'en' => ['1 second'],
                'nl' => ['1 seconde'],
            ]],
            ['kana' => 'にびょう', 'romaji' => 'ni byou', 'meanings' => [
                'en' => ['2 seconds'],
                'nl' => ['2 seconden'],
            ]],
            ['kana' => 'さんびょう', 'romaji' => 'san byou', 'meanings' => [
                'en' => ['3 seconds'],
                'nl' => ['3 seconden'],
            ]],
            ['kana' => 'よんびょう', 'romaji' => 'yon byou', 'meanings' => [
                'en' => ['4 seconds'],
                'nl' => ['4 seconden'],
            ]],
            ['kana' => 'ごびょう', 'romaji' => 'go byou', 'meanings' => [
                'en' => ['5 seconds'],
                'nl' => ['5 seconden'],
            ]],
            ['kana' => 'ろくびょう', 'romaji' => 'roku byou', 'meanings' => [
                'en' => ['6 seconds'],
                'nl' => ['6 seconden'],
            ]],
            ['kana' => 'ななびょう', 'romaji' => 'nana byou', 'meanings' => [
                'en' => ['7 seconds'],
                'nl' => ['7 seconden'],
            ]],
            ['kana' => 'はちびょう', 'romaji' => 'hachi byou', 'meanings' => [
                'en' => ['8 seconds'],
                'nl' => ['8 seconden'],
            ]],
            ['kana' => 'きゅうびょう', 'romaji' => 'kyuu byou', 'meanings' => [
                'en' => ['9 seconds'],
                'nl' => ['9 seconden'],
            ]],
            ['kana' => 'じゅうびょう', 'romaji' => 'juu byou', 'meanings' => [
                'en' => ['10 seconds'],
                'nl' => ['10 seconden'],
            ]],
            ['kana' => 'じゅうごびょう', 'romaji' => 'juugo byou', 'meanings' => [
                'en' => ['15 seconds'],
                'nl' => ['15 seconden'],
            ]],
            ['kana' => 'さんじゅっびょう', 'romaji' => 'sanjuppyou', 'meanings' => [
                'en' => ['30 seconds'],
                'nl' => ['30 seconden'],
            ]],
            ['kana' => 'よんじゅうごびょう', 'romaji' => 'yonjuugo byou', 'meanings' => [
                'en' => ['45 seconds'],
                'nl' => ['45 seconden'],
            ]],
            ['kana' => 'ろくじゅっびょう', 'romaji' => 'rokujuppyou', 'meanings' => [
                'en' => ['60 seconds'],
                'nl' => ['60 seconden'],
            ]],
        ]);

        // Days
        $this->seedCategory('counting-days', 'Days', [
            ['kana' => 'ついたち', 'romaji' => 'tsuitachi', 'meanings' => [
                'en' => ['1st'],
                'nl' => ['1e'],
            ]],
            ['kana' => 'ふつか', 'romaji' => 'futsuka', 'meanings' => [
                'en' => ['2nd'],
                'nl' => ['2e'],
            ]],
            ['kana' => 'みっか', 'romaji' => 'mikka', 'meanings' => [
                'en' => ['3rd'],
                'nl' => ['3e'],
            ]],
            ['kana' => 'よっか', 'romaji' => 'yokka', 'meanings' => [
                'en' => ['4th'],
                'nl' => ['4e'],
            ]],
            ['kana' => 'いつか', 'romaji' => 'itsuka', 'meanings' => [
                'en' => ['5th'],
                'nl' => ['5e'],
            ]],
            ['kana' => 'むいか', 'romaji' => 'muika', 'meanings' => [
                'en' => ['6th'],
                'nl' => ['6e'],
            ]],
            ['kana' => 'なのか', 'romaji' => 'nanoka', 'meanings' => [
                'en' => ['7th'],
                'nl' => ['7e'],
            ]],
            ['kana' => 'ようか', 'romaji' => 'youka', 'meanings' => [
                'en' => ['8th'],
                'nl' => ['8e'],
            ]],
            ['kana' => 'ここのか', 'romaji' => 'kokonoka', 'meanings' => [
                'en' => ['9th'],
                'nl' => ['9e'],
            ]],
            ['kana' => 'とおか', 'romaji' => 'tooka', 'meanings' => [
                'en' => ['10th'],
                'nl' => ['10e'],
            ]],
            ['kana' => 'じゅういちにち', 'romaji' => 'juuichi nichi', 'meanings' => [
                'en' => ['11th'],
                'nl' => ['11e'],
            ]],
            ['kana' => 'じゅうににち', 'romaji' => 'juuni nichi', 'meanings' => [
                'en' => ['12th'],
                'nl' => ['12e'],
            ]],
            ['kana' => 'じゅうさんにち', 'romaji' => 'juusan nichi', 'meanings' => [
                'en' => ['13th'],
                'nl' => ['13e'],
            ]],
            ['kana' => 'じゅうよっか', 'romaji' => 'juuyokka', 'meanings' => [
                'en' => ['14th'],
                'nl' => ['14e'],
            ]],
            ['kana' => 'じゅうごにち', 'romaji' => 'juugo nichi', 'meanings' => [
                'en' => ['15th'],
                'nl' => ['15e'],
            ]],
            ['kana' => 'じゅうろくにち', 'romaji' => 'juuroku nichi', 'meanings' => [
                'en' => ['16th'],
                'nl' => ['16e'],
            ]],
            ['kana' => 'じゅうしちにち', 'romaji' => 'juushichi nichi', 'meanings' => [
                'en' => ['17th'],
                'nl' => ['17e'],
            ]],
            ['kana' => 'じゅうはちにち', 'romaji' => 'juuhachi nichi', 'meanings' => [
                'en' => ['18th'],
                'nl' => ['18e'],
            ]],
            ['kana' => 'じゅうくにち', 'romaji' => 'juuku nichi', 'meanings' => [
                'en' => ['19th'],
                'nl' => ['19e'],
            ]],
            ['kana' => 'はつか', 'romaji' => 'hatsuka', 'meanings' => [
                'en' => ['20th'],
                'nl' => ['20e'],
            ]],
            ['kana' => 'にじゅういちにち', 'romaji' => 'nijuuichi nichi', 'meanings' => [
                'en' => ['21st'],
                'nl' => ['21e'],
            ]],
            ['kana' => 'にじゅうににち', 'romaji' => 'nijuuni nichi', 'meanings' => [
                'en' => ['22nd'],
                'nl' => ['22e'],
            ]],
            ['kana' => 'にじゅうさんにち', 'romaji' => 'nijuusan nichi', 'meanings' => [
                'en' => ['23rd'],
                'nl' => ['23e'],
            ]],
            ['kana' => 'にじゅうよっか', 'romaji' => 'nijuuyokka', 'meanings' => [
                'en' => ['24th'],
                'nl' => ['24e'],
            ]],
            ['kana' => 'にじゅうごにち', 'romaji' => 'nijuugo nichi', 'meanings' => [
                'en' => ['25th'],
                'nl' => ['25e'],
            ]],
            ['kana' => 'にじゅうろくにち', 'romaji' => 'nijuuroku nichi', 'meanings' => [
                'en' => ['26th'],
                'nl' => ['26e'],
            ]],
            ['kana' => 'にじゅうしちにち', 'romaji' => 'nijuushichi nichi', 'meanings' => [
                'en' => ['27th'],
                'nl' => ['27e'],
            ]],
            ['kana' => 'にじゅうはちにち', 'romaji' => 'nijuuhachi nichi', 'meanings' => [
                'en' => ['28th'],
                'nl' => ['28e'],
            ]],
            ['kana' => 'にじゅうくにち', 'romaji' => 'nijuuku nichi', 'meanings' => [
                'en' => ['29th'],
                'nl' => ['29e'],
            ]],
            ['kana' => 'さんじゅうにち', 'romaji' => 'sanjuu nichi', 'meanings' => [
                'en' => ['30th'],
                'nl' => ['30e'],
            ]],
            ['kana' => 'さんじゅういちにち', 'romaji' => 'sanjuuichi nichi', 'meanings' => [
                'en' => ['31st'],
                'nl' => ['31e'],
            ]],
        ]);

        // Weeks
        $this->seedCategory('counting-weeks', 'Weeks', [
            ['kana' => 'いっしゅうかん', 'romaji' => 'isshuukan', 'meanings' => [
                'en' => ['1 week'],
                'nl' => ['1 week'],
            ]],
            ['kana' => 'にしゅうかん', 'romaji' => 'nishuukan', 'meanings' => [
                'en' => ['2 weeks'],
                'nl' => ['2 weken'],
            ]],
            ['kana' => 'さんしゅうかん', 'romaji' => 'sanshuukan', 'meanings' => [
                'en' => ['3 weeks'],
                'nl' => ['3 weken'],
            ]],
            ['kana' => 'よんしゅうかん', 'romaji' => 'yonshuukan', 'meanings' => [
                'en' => ['4 weeks'],
                'nl' => ['4 weken'],
            ]],
            ['kana' => 'ごしゅうかん', 'romaji' => 'goshuukan', 'meanings' => [
                'en' => ['5 weeks'],
                'nl' => ['5 weken'],
            ]],
            ['kana' => 'ろくしゅうかん', 'romaji' => 'rokushuukan', 'meanings' => [
                'en' => ['6 weeks'],
                'nl' => ['6 weken'],
            ]],
            ['kana' => 'ななしゅうかん', 'romaji' => 'nanashuukan', 'meanings' => [
                'en' => ['7 weeks'],
                'nl' => ['7 weken'],
            ]],
            ['kana' => 'はっしゅうかん', 'romaji' => 'hasshuukan', 'meanings' => [
                'en' => ['8 weeks'],
                'nl' => ['8 weken'],
            ]],
            ['kana' => 'きゅうしゅうかん', 'romaji' => 'kyuushuukan', 'meanings' => [
                'en' => ['9 weeks'],
                'nl' => ['9 weken'],
            ]],
            ['kana' => 'じゅっしゅうかん', 'romaji' => 'jusshuukan', 'meanings' => [
                'en' => ['10 weeks'],
                'nl' => ['10 weken'],
            ]],
            ['kana' => 'じゅうにしゅうかん', 'romaji' => 'juunishuukan', 'meanings' => [
                'en' => ['12 weeks'],
                'nl' => ['12 weken'],
            ]],
            ['kana' => 'じゅうろくしゅうかん', 'romaji' => 'juurokushuukan', 'meanings' => [
                'en' => ['16 weeks'],
                'nl' => ['16 weken'],
            ]],
            ['kana' => 'にじゅっしゅうかん', 'romaji' => 'nijusshuukan', 'meanings' => [
                'en' => ['20 weeks'],
                'nl' => ['20 weken'],
            ]],
        ]);

        // Months
        $this->seedCategory('counting-months', 'Months', [
            ['kana' => 'いっかげつ', 'romaji' => 'ikkagetsu', 'meanings' => [
                'en' => ['1 month'],
                'nl' => ['1 maand'],
            ]],
            ['kana' => 'にかげつ', 'romaji' => 'nikagetsu', 'meanings' => [
                'en' => ['2 months'],
                'nl' => ['2 maanden'],
            ]],
            ['kana' => 'さんかげつ', 'romaji' => 'sankagetsu', 'meanings' => [
                'en' => ['3 months'],
                'nl' => ['3 maanden'],
            ]],
            ['kana' => 'よんかげつ', 'romaji' => 'yonkagetsu', 'meanings' => [
                'en' => ['4 months'],
                'nl' => ['4 maanden'],
            ]],
            ['kana' => 'ごかげつ', 'romaji' => 'gokagetsu', 'meanings' => [
                'en' => ['5 months'],
                'nl' => ['5 maanden'],
            ]],
            ['kana' => 'ろっかげつ', 'romaji' => 'rokkagetsu', 'meanings' => [
                'en' => ['6 months'],
                'nl' => ['6 maanden'],
            ]],
            ['kana' => 'ななかげつ', 'romaji' => 'nanakagetsu', 'meanings' => [
                'en' => ['7 months'],
                'nl' => ['7 maanden'],
            ]],
            ['kana' => 'はちかげつ', 'romaji' => 'hachikagetsu', 'meanings' => [
                'en' => ['8 months'],
                'nl' => ['8 maanden'],
            ]],
            ['kana' => 'きゅうかげつ', 'romaji' => 'kyuukagetsu', 'meanings' => [
                'en' => ['9 months'],
                'nl' => ['9 maanden'],
            ]],
            ['kana' => 'じゅっかげつ', 'romaji' => 'jukkagetsu', 'meanings' => [
                'en' => ['10 months'],
                'nl' => ['10 maanden'],
            ]],
            ['kana' => 'じゅういっかげつ', 'romaji' => 'juuikkagetsu', 'meanings' => [
                'en' => ['11 months'],
                'nl' => ['11 maanden'],
            ]],
            ['kana' => 'じゅうにかげつ', 'romaji' => 'juunikagetsu', 'meanings' => [
                'en' => ['12 months'],
                'nl' => ['12 maanden'],
            ]],
            ['kana' => 'じゅうはちかげつ', 'romaji' => 'juuhachikagetsu', 'meanings' => [
                'en' => ['18 months'],
                'nl' => ['18 maanden'],
            ]],
            ['kana' => 'にじゅうよんかげつ', 'romaji' => 'nijuuyonkagetsu', 'meanings' => [
                'en' => ['24 months'],
                'nl' => ['24 maanden'],
            ]],
        ]);

        // Years
        $this->seedCategory('counting-years', 'Years', [
            ['kana' => 'いちねん', 'romaji' => 'ichi nen', 'meanings' => [
                'en' => ['1 year'],
                'nl' => ['1 jaar'],
            ]],
            ['kana' => 'にねん', 'romaji' => 'ni nen', 'meanings' => [
                'en' => ['2 years'],
                'nl' => ['2 jaar'],
            ]],
            ['kana' => 'さんねん', 'romaji' => 'san nen', 'meanings' => [
                'en' => ['3 years'],
                'nl' => ['3 jaar'],
            ]],
            ['kana' => 'よねん', 'romaji' => 'yo nen', 'meanings' => [
                'en' => ['4 years'],
                'nl' => ['4 jaar'],
            ]],
            ['kana' => 'ごねん', 'romaji' => 'go nen', 'meanings' => [
                'en' => ['5 years'],
                'nl' => ['5 jaar'],
            ]],
            ['kana' => 'ろくねん', 'romaji' => 'roku nen', 'meanings' => [
                'en' => ['6 years'],
                'nl' => ['6 jaar'],
            ]],
            ['kana' => 'ななねん', 'romaji' => 'nana nen', 'meanings' => [
                'en' => ['7 years'],
                'nl' => ['7 jaar'],
            ]],
            ['kana' => 'はちねん', 'romaji' => 'hachi nen', 'meanings' => [
                'en' => ['8 years'],
                'nl' => ['8 jaar'],
            ]],
            ['kana' => 'きゅうねん', 'romaji' => 'kyuu nen', 'meanings' => [
                'en' => ['9 years'],
                'nl' => ['9 jaar'],
            ]],
            ['kana' => 'じゅうねん', 'romaji' => 'juu nen', 'meanings' => [
                'en' => ['10 years'],
                'nl' => ['10 jaar'],
            ]],
            ['kana' => 'じゅうごねん', 'romaji' => 'juugo nen', 'meanings' => [
                'en' => ['15 years'],
                'nl' => ['15 jaar'],
            ]],
            ['kana' => 'にじゅうねん', 'romaji' => 'nijuu nen', 'meanings' => [
                'en' => ['20 years'],
                'nl' => ['20 jaar'],
            ]],
            ['kana' => 'にじゅうごねん', 'romaji' => 'nijuugo nen', 'meanings' => [
                'en' => ['25 years'],
                'nl' => ['25 jaar'],
            ]],
            ['kana' => 'さんじゅうねん', 'romaji' => 'sanjuu nen', 'meanings' => [
                'en' => ['30 years'],
                'nl' => ['30 jaar'],
            ]],
            ['kana' => 'よんじゅうねん', 'romaji' => 'yonjuu nen', 'meanings' => [
                'en' => ['40 years'],
                'nl' => ['40 jaar'],
            ]],
            ['kana' => 'ごじゅうねん', 'romaji' => 'gojuu nen', 'meanings' => [
                'en' => ['50 years'],
                'nl' => ['50 jaar'],
            ]],
        ]);

        // Times (Occurrences)
        $this->seedCategory('counting-times', 'Times (Occurrences)', [
            ['kana' => 'いっかい', 'romaji' => 'ikkai', 'meanings' => [
                'en' => ['once'],
                'nl' => ['één keer'],
            ]],
            ['kana' => 'にかい', 'romaji' => 'nikai', 'meanings' => [
                'en' => ['twice'],
                'nl' => ['twee keer'],
            ]],
            ['kana' => 'さんかい', 'romaji' => 'sankai', 'meanings' => [
                'en' => ['three times'],
                'nl' => ['drie keer'],
            ]],
            ['kana' => 'よんかい', 'romaji' => 'yonkai', 'meanings' => [
                'en' => ['four times'],
                'nl' => ['vier keer'],
            ]],
            ['kana' => 'ごかい', 'romaji' => 'gokai', 'meanings' => [
                'en' => ['five times'],
                'nl' => ['vijf keer'],
            ]],
            ['kana' => 'ろっかい', 'romaji' => 'rokkai', 'meanings' => [
                'en' => ['six times'],
                'nl' => ['zes keer'],
            ]],
            ['kana' => 'ななかい', 'romaji' => 'nanakai', 'meanings' => [
                'en' => ['seven times'],
                'nl' => ['zeven keer'],
            ]],
            ['kana' => 'はちかい', 'romaji' => 'hachikai', 'meanings' => [
                'en' => ['eight times'],
                'nl' => ['acht keer'],
            ]],
            ['kana' => 'きゅうかい', 'romaji' => 'kyuukai', 'meanings' => [
                'en' => ['nine times'],
                'nl' => ['negen keer'],
            ]],
            ['kana' => 'じゅっかい', 'romaji' => 'jukkai', 'meanings' => [
                'en' => ['ten times'],
                'nl' => ['tien keer'],
            ]],
            ['kana' => 'じゅうごかい', 'romaji' => 'juugo kai', 'meanings' => [
                'en' => ['fifteen times'],
                'nl' => ['vijftien keer'],
            ]],
            ['kana' => 'にじゅっかい', 'romaji' => 'nijukkai', 'meanings' => [
                'en' => ['twenty times'],
                'nl' => ['twintig keer'],
            ]],
            ['kana' => 'ごじゅっかい', 'romaji' => 'gojukkai', 'meanings' => [
                'en' => ['fifty times'],
                'nl' => ['vijftig keer'],
            ]],
            ['kana' => 'ひゃっかい', 'romaji' => 'hyakkai', 'meanings' => [
                'en' => ['hundred times'],
                'nl' => ['honderd keer'],
            ]],
        ]);

        // Abstract Things
        $this->seedCategory('counting-abstract-things', 'Abstract Things', [
            ['kana' => 'ひとつ', 'romaji' => 'hitotsu', 'meanings' => [
                'en' => ['one thing'],
                'nl' => ['één ding'],
            ]],
            ['kana' => 'ふたつ', 'romaji' => 'futatsu', 'meanings' => [
                'en' => ['two things'],
                'nl' => ['twee dingen'],
            ]],
            ['kana' => 'みっつ', 'romaji' => 'mittsu', 'meanings' => [
                'en' => ['three things'],
                'nl' => ['drie dingen'],
            ]],
            ['kana' => 'よっつ', 'romaji' => 'yottsu', 'meanings' => [
                'en' => ['four things'],
                'nl' => ['vier dingen'],
            ]],
            ['kana' => 'いつつ', 'romaji' => 'itsutsu', 'meanings' => [
                'en' => ['five things'],
                'nl' => ['vijf dingen'],
            ]],
            ['kana' => 'むっつ', 'romaji' => 'muttsu', 'meanings' => [
                'en' => ['six things'],
                'nl' => ['zes dingen'],
            ]],
            ['kana' => 'ななつ', 'romaji' => 'nanatsu', 'meanings' => [
                'en' => ['seven things'],
                'nl' => ['zeven dingen'],
            ]],
            ['kana' => 'やっつ', 'romaji' => 'yattsu', 'meanings' => [
                'en' => ['eight things'],
                'nl' => ['acht dingen'],
            ]],
            ['kana' => 'ここのつ', 'romaji' => 'kokonotsu', 'meanings' => [
                'en' => ['nine things'],
                'nl' => ['negen dingen'],
            ]],
            ['kana' => 'とお', 'romaji' => 'too', 'meanings' => [
                'en' => ['ten things'],
                'nl' => ['tien dingen'],
            ]],
        ]);

        // Flat Objects
        $this->seedCategory('counting-flat-objects', 'Flat Objects', [
            ['kana' => 'いちまい', 'romaji' => 'ichi mai', 'meanings' => [
                'en' => ['one (flat object)'],
                'nl' => ['één (plat object)'],
            ]],
            ['kana' => 'にまい', 'romaji' => 'ni mai', 'meanings' => [
                'en' => ['two (flat objects)'],
                'nl' => ['twee (platte objecten)'],
            ]],
            ['kana' => 'さんまい', 'romaji' => 'san mai', 'meanings' => [
                'en' => ['three (flat objects)'],
                'nl' => ['drie (platte objecten)'],
            ]],
            ['kana' => 'よんまい', 'romaji' => 'yon mai', 'meanings' => [
                'en' => ['four (flat objects)'],
                'nl' => ['vier (platte objecten)'],
            ]],
            ['kana' => 'ごまい', 'romaji' => 'go mai', 'meanings' => [
                'en' => ['five (flat objects)'],
                'nl' => ['vijf (platte objecten)'],
            ]],
            ['kana' => 'ろくまい', 'romaji' => 'roku mai', 'meanings' => [
                'en' => ['six (flat objects)'],
                'nl' => ['zes (platte objecten)'],
            ]],
            ['kana' => 'ななまい', 'romaji' => 'nana mai', 'meanings' => [
                'en' => ['seven (flat objects)'],
                'nl' => ['zeven (platte objecten)'],
            ]],
            ['kana' => 'はちまい', 'romaji' => 'hachi mai', 'meanings' => [
                'en' => ['eight (flat objects)'],
                'nl' => ['acht (platte objecten)'],
            ]],
            ['kana' => 'きゅうまい', 'romaji' => 'kyuu mai', 'meanings' => [
                'en' => ['nine (flat objects)'],
                'nl' => ['negen (platte objecten)'],
            ]],
            ['kana' => 'じゅうまい', 'romaji' => 'juu mai', 'meanings' => [
                'en' => ['ten (flat objects)'],
                'nl' => ['tien (platte objecten)'],
            ]],
        ]);

        // Long Objects
        $this->seedCategory('counting-long-objects', 'Long Objects', [
            ['kana' => 'いっぽん', 'romaji' => 'ippon', 'meanings' => [
                'en' => ['one (long object)'],
                'nl' => ['één (lang object)'],
            ]],
            ['kana' => 'にほん', 'romaji' => 'nihon', 'meanings' => [
                'en' => ['two (long objects)'],
                'nl' => ['twee (lange objecten)'],
            ]],
            ['kana' => 'さんぼん', 'romaji' => 'sanbon', 'meanings' => [
                'en' => ['three (long objects)'],
                'nl' => ['drie (lange objecten)'],
            ]],
            ['kana' => 'よんほん', 'romaji' => 'yonhon', 'meanings' => [
                'en' => ['four (long objects)'],
                'nl' => ['vier (lange objecten)'],
            ]],
            ['kana' => 'ごほん', 'romaji' => 'gohon', 'meanings' => [
                'en' => ['five (long objects)'],
                'nl' => ['vijf (lange objecten)'],
            ]],
            ['kana' => 'ろっぽん', 'romaji' => 'roppon', 'meanings' => [
                'en' => ['six (long objects)'],
                'nl' => ['zes (lange objecten)'],
            ]],
            ['kana' => 'ななほん', 'romaji' => 'nanahon', 'meanings' => [
                'en' => ['seven (long objects)'],
                'nl' => ['zeven (lange objecten)'],
            ]],
            ['kana' => 'はっぽん', 'romaji' => 'happon', 'meanings' => [
                'en' => ['eight (long objects)'],
                'nl' => ['acht (lange objecten)'],
            ]],
            ['kana' => 'きゅうほん', 'romaji' => 'kyuuhon', 'meanings' => [
                'en' => ['nine (long objects)'],
                'nl' => ['negen (lange objecten)'],
            ]],
            ['kana' => 'じゅっぽん', 'romaji' => 'juppon', 'meanings' => [
                'en' => ['ten (long objects)'],
                'nl' => ['tien (lange objecten)'],
            ]],
        ]);

        // Small Animals
        $this->seedCategory('counting-small-animals', 'Small Animals', [
            ['kana' => 'いっぴき', 'romaji' => 'ippiki', 'meanings' => [
                'en' => ['1 small animal'],
                'nl' => ['1 klein dier'],
            ]],
            ['kana' => 'にひき', 'romaji' => 'nihiki', 'meanings' => [
                'en' => ['2 small animals'],
                'nl' => ['2 kleine dieren'],
            ]],
            ['kana' => 'さんびき', 'romaji' => 'sanbiki', 'meanings' => [
                'en' => ['3 small animals'],
                'nl' => ['3 kleine dieren'],
            ]],
            ['kana' => 'よんひき', 'romaji' => 'yonhiki', 'meanings' => [
                'en' => ['4 small animals'],
                'nl' => ['4 kleine dieren'],
            ]],
            ['kana' => 'ごひき', 'romaji' => 'gohiki', 'meanings' => [
                'en' => ['5 small animals'],
                'nl' => ['5 kleine dieren'],
            ]],
            ['kana' => 'ろっぴき', 'romaji' => 'roppiki', 'meanings' => [
                'en' => ['6 small animals'],
                'nl' => ['6 kleine dieren'],
            ]],
            ['kana' => 'ななひき', 'romaji' => 'nanahiki', 'meanings' => [
                'en' => ['7 small animals'],
                'nl' => ['7 kleine dieren'],
            ]],
            ['kana' => 'はっぴき', 'romaji' => 'happiki', 'meanings' => [
                'en' => ['8 small animals'],
                'nl' => ['8 kleine dieren'],
            ]],
            ['kana' => 'きゅうひき', 'romaji' => 'kyuuhiki', 'meanings' => [
                'en' => ['9 small animals'],
                'nl' => ['9 kleine dieren'],
            ]],
            ['kana' => 'じゅっぴき', 'romaji' => 'juppiki', 'meanings' => [
                'en' => ['10 small animals'],
                'nl' => ['10 kleine dieren'],
            ]],
        ]);

        // Big Animals
        $this->seedCategory('counting-big-animals', 'Big Animals', [
            ['kana' => 'いっとう', 'romaji' => 'ittou', 'meanings' => [
                'en' => ['1 big animal'],
                'nl' => ['1 groot dier'],
            ]],
            ['kana' => 'にとう', 'romaji' => 'nitou', 'meanings' => [
                'en' => ['2 big animals'],
                'nl' => ['2 grote dieren'],
            ]],
            ['kana' => 'さんとう', 'romaji' => 'santou', 'meanings' => [
                'en' => ['3 big animals'],
                'nl' => ['3 grote dieren'],
            ]],
            ['kana' => 'よんとう', 'romaji' => 'yontou', 'meanings' => [
                'en' => ['4 big animals'],
                'nl' => ['4 grote dieren'],
            ]],
            ['kana' => 'ごとう', 'romaji' => 'gotou', 'meanings' => [
                'en' => ['5 big animals'],
                'nl' => ['5 grote dieren'],
            ]],
            ['kana' => 'ろくとう', 'romaji' => 'rokutou', 'meanings' => [
                'en' => ['6 big animals'],
                'nl' => ['6 grote dieren'],
            ]],
            ['kana' => 'ななとう', 'romaji' => 'nanatou', 'meanings' => [
                'en' => ['7 big animals'],
                'nl' => ['7 grote dieren'],
            ]],
            ['kana' => 'はちとう', 'romaji' => 'hachitou', 'meanings' => [
                'en' => ['8 big animals'],
                'nl' => ['8 grote dieren'],
            ]],
            ['kana' => 'きゅうとう', 'romaji' => 'kyuutou', 'meanings' => [
                'en' => ['9 big animals'],
                'nl' => ['9 grote dieren'],
            ]],
            ['kana' => 'じゅっとう', 'romaji' => 'juttou', 'meanings' => [
                'en' => ['10 big animals'],
                'nl' => ['10 grote dieren'],
            ]],
        ]);

        // Birds & Rabbits
        $this->seedCategory('counting-birds-rabbits', 'Birds & Rabbits', [
            ['kana' => 'いちわ', 'romaji' => 'ichiwa', 'meanings' => [
                'en' => ['1 bird', '1 rabbit'],
                'nl' => ['1 vogel', '1 konijn'],
            ]],
            ['kana' => 'にわ', 'romaji' => 'niwa', 'meanings' => [
                'en' => ['2 birds', '2 rabbits'],
                'nl' => ['2 vogels', '2 konijnen'],
            ]],
            ['kana' => 'さんわ', 'romaji' => 'sanwa', 'meanings' => [
                'en' => ['3 birds', '3 rabbits'],
                'nl' => ['3 vogels', '3 konijnen'],
            ]],
            ['kana' => 'よんわ', 'romaji' => 'yonwa', 'meanings' => [
                'en' => ['4 birds', '4 rabbits'],
                'nl' => ['4 vogels', '4 konijnen'],
            ]],
            ['kana' => 'ごわ', 'romaji' => 'gowa', 'meanings' => [
                'en' => ['5 birds', '5 rabbits'],
                'nl' => ['5 vogels', '5 konijnen'],
            ]],
            ['kana' => 'ろくわ', 'romaji' => 'rokuwa', 'meanings' => [
                'en' => ['6 birds', '6 rabbits'],
                'nl' => ['6 vogels', '6 konijnen'],
            ]],
            ['kana' => 'ななわ', 'romaji' => 'nanawa', 'meanings' => [
                'en' => ['7 birds', '7 rabbits'],
                'nl' => ['7 vogels', '7 konijnen'],
            ]],
            ['kana' => 'はちわ', 'romaji' => 'hachiwa', 'meanings' => [
                'en' => ['8 birds', '8 rabbits'],
                'nl' => ['8 vogels', '8 konijnen'],
            ]],
            ['kana' => 'きゅうわ', 'romaji' => 'kyuuwa', 'meanings' => [
                'en' => ['9 birds', '9 rabbits'],
                'nl' => ['9 vogels', '9 konijnen'],
            ]],
            ['kana' => 'じゅうわ', 'romaji' => 'juuwa', 'meanings' => [
                'en' => ['10 birds', '10 rabbits'],
                'nl' => ['10 vogels', '10 konijnen'],
            ]],
        ]);

        // Floors / Levels
        $this->seedCategory('counting-floors', 'Floors / Levels', [
            ['kana' => 'ちかいっかい', 'romaji' => 'chika ikkai', 'meanings' => [
                'en' => ['B1 (basement level)'],
                'nl' => ['kelderverdieping'],
            ]],
            ['kana' => 'いっかい', 'romaji' => 'ikkai', 'meanings' => [
                'en' => ['1st floor'],
                'nl' => ['1e verdieping'],
            ]],
            ['kana' => 'にかい', 'romaji' => 'nikai', 'meanings' => [
                'en' => ['2nd floor'],
                'nl' => ['2e verdieping'],
            ]],
            ['kana' => 'さんがい', 'romaji' => 'sangai', 'meanings' => [
                'en' => ['3rd floor'],
                'nl' => ['3e verdieping'],
            ]],
            ['kana' => 'よんかい', 'romaji' => 'yonkai', 'meanings' => [
                'en' => ['4th floor'],
                'nl' => ['4e verdieping'],
            ]],
            ['kana' => 'ごかい', 'romaji' => 'gokai', 'meanings' => [
                'en' => ['5th floor'],
                'nl' => ['5e verdieping'],
            ]],
            ['kana' => 'ろっかい', 'romaji' => 'rokkai', 'meanings' => [
                'en' => ['6th floor'],
                'nl' => ['6e verdieping'],
            ]],
            ['kana' => 'ななかい', 'romaji' => 'nanakai', 'meanings' => [
                'en' => ['7th floor'],
                'nl' => ['7e verdieping'],
            ]],
            ['kana' => 'はっかい', 'romaji' => 'hakkai', 'meanings' => [
                'en' => ['8th floor'],
                'nl' => ['8e verdieping'],
            ]],
            ['kana' => 'きゅうかい', 'romaji' => 'kyuukai', 'meanings' => [
                'en' => ['9th floor'],
                'nl' => ['9e verdieping'],
            ]],
            ['kana' => 'じゅっかい', 'romaji' => 'jukkai', 'meanings' => [
                'en' => ['10th floor'],
                'nl' => ['10e verdieping'],
            ]],
        ]);

        // Coins & Bills
        $this->seedCategory('counting-coins-bills', 'Coins & Bills', [
            ['kana' => 'いちえん', 'romaji' => 'ichi en', 'meanings' => ['1 yen']],
            ['kana' => 'ごえん', 'romaji' => 'go en', 'meanings' => ['5 yen']],
            ['kana' => 'じゅうえん', 'romaji' => 'juu en', 'meanings' => ['10 yen']],
            ['kana' => 'ごじゅうえん', 'romaji' => 'gojuu en', 'meanings' => ['50 yen']],
            ['kana' => 'ひゃくえん', 'romaji' => 'hyaku en', 'meanings' => ['100 yen']],
            ['kana' => 'ごひゃくえん', 'romaji' => 'gohyaku en', 'meanings' => ['500 yen']],
            ['kana' => 'せんえん', 'romaji' => 'sen en', 'meanings' => ['1,000 yen']],
            ['kana' => 'にせんえん', 'romaji' => 'nisen en', 'meanings' => ['2,000 yen']],
            ['kana' => 'ごせんえん', 'romaji' => 'gosen en', 'meanings' => ['5,000 yen']],
            ['kana' => 'いちまんえん', 'romaji' => 'ichiman en', 'meanings' => ['10,000 yen']],
        ]);

        // Prices
        $this->seedCategory('counting-prices', 'Prices', [
            ['kana' => 'ひゃくえん', 'romaji' => 'hyaku en', 'meanings' => ['100 yen']],
            ['kana' => 'ひゃくごじゅうえん', 'romaji' => 'hyaku gojuu en', 'meanings' => ['150 yen']],
            ['kana' => 'にひゃくえん', 'romaji' => 'nihyaku en', 'meanings' => ['200 yen']],
            ['kana' => 'さんびゃくえん', 'romaji' => 'sanbyaku en', 'meanings' => ['300 yen']],
            ['kana' => 'よんひゃくえん', 'romaji' => 'yonhyaku en', 'meanings' => ['400 yen']],
            ['kana' => 'ごひゃくえん', 'romaji' => 'gohyaku en', 'meanings' => ['500 yen']],
            ['kana' => 'ろっぴゃくえん', 'romaji' => 'ropphyaku en', 'meanings' => ['600 yen']],
            ['kana' => 'ななひゃくえん', 'romaji' => 'nanahyaku en', 'meanings' => ['700 yen']],
            ['kana' => 'はっぴゃくえん', 'romaji' => 'happyaku en', 'meanings' => ['800 yen']],
            ['kana' => 'きゅうひゃくえん', 'romaji' => 'kyuuhyaku en', 'meanings' => ['900 yen']],
            ['kana' => 'せんえん', 'romaji' => 'sen en', 'meanings' => ['1,000 yen']],
            ['kana' => 'せんごひゃくえん', 'romaji' => 'sen gohyaku en', 'meanings' => ['1,500 yen']],
            ['kana' => 'にせんえん', 'romaji' => 'nisen en', 'meanings' => ['2,000 yen']],
            ['kana' => 'さんぜんえん', 'romaji' => 'sanzen en', 'meanings' => ['3,000 yen']],
            ['kana' => 'ごせんえん', 'romaji' => 'gosen en', 'meanings' => ['5,000 yen']],
            ['kana' => 'いちまんえん', 'romaji' => 'ichiman en', 'meanings' => ['10,000 yen']],
            ['kana' => 'にまんえん', 'romaji' => 'niman en', 'meanings' => ['20,000 yen']],
            ['kana' => 'さんまんえん', 'romaji' => 'sanman en', 'meanings' => ['30,000 yen']],
            ['kana' => 'よんまんえん', 'romaji' => 'yonman en', 'meanings' => ['40,000 yen']],
            ['kana' => 'ごまんえん', 'romaji' => 'goman en', 'meanings' => ['50,000 yen']],
            ['kana' => 'ろくまんえん', 'romaji' => 'rokuman en', 'meanings' => ['60,000 yen']],
            ['kana' => 'ななまんえん', 'romaji' => 'nanaman en', 'meanings' => ['70,000 yen']],
            ['kana' => 'はちまんえん', 'romaji' => 'hachiman en', 'meanings' => ['80,000 yen']],
            ['kana' => 'きゅうまんえん', 'romaji' => 'kyuuman en', 'meanings' => ['90,000 yen']],
            ['kana' => 'じゅうまんえん', 'romaji' => 'juuman en', 'meanings' => ['100,000 yen']],
        ]);

        // Drinks (Cups/Glasses)
        $this->seedCategory('counting-drinks', 'Drinks (Cups/Glasses)', [
            ['kana' => 'いっぱい', 'romaji' => 'ippai', 'meanings' => [
                'en' => ['1 glass', '1 cup'],
                'nl' => ['1 glas', '1 kop'],
            ]],
            ['kana' => 'にはい', 'romaji' => 'nihai', 'meanings' => [
                'en' => ['2 glasses', '2 cups'],
                'nl' => ['2 glazen', '2 koppen'],
            ]],
            ['kana' => 'さんばい', 'romaji' => 'sanbai', 'meanings' => [
                'en' => ['3 glasses', '3 cups'],
                'nl' => ['3 glazen', '3 koppen'],
            ]],
            ['kana' => 'よんはい', 'romaji' => 'yonhai', 'meanings' => [
                'en' => ['4 glasses', '4 cups'],
                'nl' => ['4 glazen', '4 koppen'],
            ]],
            ['kana' => 'ごはい', 'romaji' => 'gohai', 'meanings' => [
                'en' => ['5 glasses', '5 cups'],
                'nl' => ['5 glazen', '5 koppen'],
            ]],
            ['kana' => 'ろっぱい', 'romaji' => 'roppai', 'meanings' => [
                'en' => ['6 glasses', '6 cups'],
                'nl' => ['6 glazen', '6 koppen'],
            ]],
            ['kana' => 'ななはい', 'romaji' => 'nanahai', 'meanings' => [
                'en' => ['7 glasses', '7 cups'],
                'nl' => ['7 glazen', '7 koppen'],
            ]],
            ['kana' => 'はっぱい', 'romaji' => 'happai', 'meanings' => [
                'en' => ['8 glasses', '8 cups'],
                'nl' => ['8 glazen', '8 koppen'],
            ]],
            ['kana' => 'きゅうはい', 'romaji' => 'kyuuhai', 'meanings' => [
                'en' => ['9 glasses', '9 cups'],
                'nl' => ['9 glazen', '9 koppen'],
            ]],
            ['kana' => 'じゅっぱい', 'romaji' => 'juppai', 'meanings' => [
                'en' => ['10 glasses', '10 cups'],
                'nl' => ['10 glazen', '10 koppen'],
            ]],
            ['kana' => 'にじゅっぱい', 'romaji' => 'nijuppai', 'meanings' => [
                'en' => ['20 glasses', '20 cups'],
                'nl' => ['20 glazen', '20 koppen'],
            ]],
            ['kana' => 'さんじゅっぱい', 'romaji' => 'sanjuppai', 'meanings' => [
                'en' => ['30 glasses', '30 cups'],
                'nl' => ['30 glazen', '30 koppen'],
            ]],
            ['kana' => 'ごじゅっぱい', 'romaji' => 'gojuppai', 'meanings' => [
                'en' => ['50 glasses', '50 cups'],
                'nl' => ['50 glazen', '50 koppen'],
            ]],
            ['kana' => 'ひゃっぱい', 'romaji' => 'hyappai', 'meanings' => [
                'en' => ['100 glasses', '100 cups'],
                'nl' => ['100 glazen', '100 koppen'],
            ]],
        ]);

        // Round Objects
        $this->seedCategory('counting-round-objects', 'Round Objects', [
            ['kana' => 'いっこ', 'romaji' => 'ikko', 'meanings' => [
                'en' => ['1 piece'],
                'nl' => ['1 stuk'],
            ]],
            ['kana' => 'にこ', 'romaji' => 'niko', 'meanings' => [
                'en' => ['2 pieces'],
                'nl' => ['2 stuks'],
            ]],
            ['kana' => 'さんこ', 'romaji' => 'sanko', 'meanings' => [
                'en' => ['3 pieces'],
                'nl' => ['3 stuks'],
            ]],
            ['kana' => 'よんこ', 'romaji' => 'yonko', 'meanings' => [
                'en' => ['4 pieces'],
                'nl' => ['4 stuks'],
            ]],
            ['kana' => 'ごこ', 'romaji' => 'goko', 'meanings' => [
                'en' => ['5 pieces'],
                'nl' => ['5 stuks'],
            ]],
            ['kana' => 'ろっこ', 'romaji' => 'rokko', 'meanings' => [
                'en' => ['6 pieces'],
                'nl' => ['6 stuks'],
            ]],
            ['kana' => 'ななこ', 'romaji' => 'nanako', 'meanings' => [
                'en' => ['7 pieces'],
                'nl' => ['7 stuks'],
            ]],
            ['kana' => 'はっこ', 'romaji' => 'hakko', 'meanings' => [
                'en' => ['8 pieces'],
                'nl' => ['8 stuks'],
            ]],
            ['kana' => 'きゅうこ', 'romaji' => 'kyuuko', 'meanings' => [
                'en' => ['9 pieces'],
                'nl' => ['9 stuks'],
            ]],
            ['kana' => 'じゅっこ', 'romaji' => 'jukko', 'meanings' => [
                'en' => ['10 pieces'],
                'nl' => ['10 stuks'],
            ]],
            ['kana' => 'にじゅっこ', 'romaji' => 'nijukko', 'meanings' => [
                'en' => ['20 pieces'],
                'nl' => ['20 stuks'],
            ]],
            ['kana' => 'さんじゅっこ', 'romaji' => 'sanjukko', 'meanings' => [
                'en' => ['30 pieces'],
                'nl' => ['30 stuks'],
            ]],
            ['kana' => 'ごじゅっこ', 'romaji' => 'gojukko', 'meanings' => [
                'en' => ['50 pieces'],
                'nl' => ['50 stuks'],
            ]],
            ['kana' => 'ひゃっこ', 'romaji' => 'hyakko', 'meanings' => [
                'en' => ['100 pieces'],
                'nl' => ['100 stuks'],
            ]],
        ]);

        // Multiples
        $this->seedCategory('counting-multiples', 'Multiples', [
            ['kana' => 'いちばい', 'romaji' => 'ichibai', 'meanings' => [
                'en' => ['1x', 'same'],
                'nl' => ['1x', 'hetzelfde'],
            ]],
            ['kana' => 'にばい', 'romaji' => 'nibai', 'meanings' => [
                'en' => ['2x', 'double'],
                'nl' => ['2x', 'dubbel'],
            ]],
            ['kana' => 'さんばい', 'romaji' => 'sanbai', 'meanings' => [
                'en' => ['3x', 'triple'],
                'nl' => ['3x', 'driedubbel'],
            ]],
            ['kana' => 'よんばい', 'romaji' => 'yonbai', 'meanings' => ['4x']],
            ['kana' => 'ごばい', 'romaji' => 'gobai', 'meanings' => ['5x']],
            ['kana' => 'ろくばい', 'romaji' => 'rokubai', 'meanings' => ['6x']],
            ['kana' => 'ななばい', 'romaji' => 'nanabai', 'meanings' => ['7x']],
            ['kana' => 'はちばい', 'romaji' => 'hachibai', 'meanings' => ['8x']],
            ['kana' => 'きゅうばい', 'romaji' => 'kyuubai', 'meanings' => ['9x']],
            ['kana' => 'じゅうばい', 'romaji' => 'juubai', 'meanings' => ['10x']],
            ['kana' => 'にじゅうばい', 'romaji' => 'nijuubai', 'meanings' => ['20x']],
            ['kana' => 'ごじゅうばい', 'romaji' => 'gojuubai', 'meanings' => ['50x']],
            ['kana' => 'ひゃくばい', 'romaji' => 'hyakubai', 'meanings' => ['100x']],
        ]);

        // Irregular Counters
        $this->seedCategory('counting-irregular', 'Irregular Counters', [
            // 着 (ちゃく) - Outfits
            ['kana' => 'いっちゃく', 'romaji' => 'icchaku', 'meanings' => [
                'en' => ['1 outfit'],
                'nl' => ['1 outfit'],
            ]],
            ['kana' => 'にちゃく', 'romaji' => 'nichaku', 'meanings' => [
                'en' => ['2 outfits'],
                'nl' => ['2 outfits'],
            ]],
            ['kana' => 'さんちゃく', 'romaji' => 'sanchaku', 'meanings' => [
                'en' => ['3 outfits'],
                'nl' => ['3 outfits'],
            ]],
            ['kana' => 'よんちゃく', 'romaji' => 'yonchaku', 'meanings' => [
                'en' => ['4 outfits'],
                'nl' => ['4 outfits'],
            ]],
            ['kana' => 'ごちゃく', 'romaji' => 'gochaku', 'meanings' => [
                'en' => ['5 outfits'],
                'nl' => ['5 outfits'],
            ]],
            ['kana' => 'ろくちゃく', 'romaji' => 'rokuchaku', 'meanings' => [
                'en' => ['6 outfits'],
                'nl' => ['6 outfits'],
            ]],
            ['kana' => 'ななちゃく', 'romaji' => 'nanachaku', 'meanings' => [
                'en' => ['7 outfits'],
                'nl' => ['7 outfits'],
            ]],
            ['kana' => 'はっちゃく', 'romaji' => 'hacchaku', 'meanings' => [
                'en' => ['8 outfits'],
                'nl' => ['8 outfits'],
            ]],
            ['kana' => 'きゅうちゃく', 'romaji' => 'kyuuchaku', 'meanings' => [
                'en' => ['9 outfits'],
                'nl' => ['9 outfits'],
            ]],
            ['kana' => 'じゅっちゃく', 'romaji' => 'jucchaku', 'meanings' => [
                'en' => ['10 outfits'],
                'nl' => ['10 outfits'],
            ]],

            // 軒 (けん) - Houses/Buildings
            ['kana' => 'いっけん', 'romaji' => 'ikken', 'meanings' => [
                'en' => ['1 house', '1 building'],
                'nl' => ['1 huis', '1 gebouw'],
            ]],
            ['kana' => 'にけん', 'romaji' => 'niken', 'meanings' => [
                'en' => ['2 houses', '2 buildings'],
                'nl' => ['2 huizen', '2 gebouwen'],
            ]],
            ['kana' => 'さんけん', 'romaji' => 'sanken', 'meanings' => [
                'en' => ['3 houses', '3 buildings'],
                'nl' => ['3 huizen', '3 gebouwen'],
            ]],
            ['kana' => 'よんけん', 'romaji' => 'yonken', 'meanings' => [
                'en' => ['4 houses', '4 buildings'],
                'nl' => ['4 huizen', '4 gebouwen'],
            ]],
            ['kana' => 'ごけん', 'romaji' => 'goken', 'meanings' => [
                'en' => ['5 houses', '5 buildings'],
                'nl' => ['5 huizen', '5 gebouwen'],
            ]],
            ['kana' => 'ろっけん', 'romaji' => 'rokken', 'meanings' => [
                'en' => ['6 houses', '6 buildings'],
                'nl' => ['6 huizen', '6 gebouwen'],
            ]],
            ['kana' => 'ななけん', 'romaji' => 'nanaken', 'meanings' => [
                'en' => ['7 houses', '7 buildings'],
                'nl' => ['7 huizen', '7 gebouwen'],
            ]],
            ['kana' => 'はっけん', 'romaji' => 'hakken', 'meanings' => [
                'en' => ['8 houses', '8 buildings'],
                'nl' => ['8 huizen', '8 gebouwen'],
            ]],
            ['kana' => 'きゅうけん', 'romaji' => 'kyuuken', 'meanings' => [
                'en' => ['9 houses', '9 buildings'],
                'nl' => ['9 huizen', '9 gebouwen'],
            ]],
            ['kana' => 'じゅっけん', 'romaji' => 'jukken', 'meanings' => [
                'en' => ['10 houses', '10 buildings'],
                'nl' => ['10 huizen', '10 gebouwen'],
            ]],

            // 台 (だい) - Machines/Vehicles
            ['kana' => 'いちだい', 'romaji' => 'ichidai', 'meanings' => [
                'en' => ['1 machine', '1 vehicle'],
                'nl' => ['1 machine', '1 voertuig'],
            ]],
            ['kana' => 'にだい', 'romaji' => 'nidai', 'meanings' => [
                'en' => ['2 machines', '2 vehicles'],
                'nl' => ['2 machines', '2 voertuigen'],
            ]],
            ['kana' => 'さんだい', 'romaji' => 'sandai', 'meanings' => [
                'en' => ['3 machines', '3 vehicles'],
                'nl' => ['3 machines', '3 voertuigen'],
            ]],
            ['kana' => 'よんだい', 'romaji' => 'yondai', 'meanings' => [
                'en' => ['4 machines', '4 vehicles'],
                'nl' => ['4 machines', '4 voertuigen'],
            ]],
            ['kana' => 'ごだい', 'romaji' => 'godai', 'meanings' => [
                'en' => ['5 machines', '5 vehicles'],
                'nl' => ['5 machines', '5 voertuigen'],
            ]],
            ['kana' => 'ろくだい', 'romaji' => 'rokudai', 'meanings' => [
                'en' => ['6 machines', '6 vehicles'],
                'nl' => ['6 machines', '6 voertuigen'],
            ]],
            ['kana' => 'ななだい', 'romaji' => 'nanadai', 'meanings' => [
                'en' => ['7 machines', '7 vehicles'],
                'nl' => ['7 machines', '7 voertuigen'],
            ]],
            ['kana' => 'はちだい', 'romaji' => 'hachidai', 'meanings' => [
                'en' => ['8 machines', '8 vehicles'],
                'nl' => ['8 machines', '8 voertuigen'],
            ]],
            ['kana' => 'きゅうだい', 'romaji' => 'kyuudai', 'meanings' => [
                'en' => ['9 machines', '9 vehicles'],
                'nl' => ['9 machines', '9 voertuigen'],
            ]],
            ['kana' => 'じゅうだい', 'romaji' => 'juudai', 'meanings' => [
                'en' => ['10 machines', '10 vehicles'],
                'nl' => ['10 machines', '10 voertuigen'],
            ]],
            ['kana' => 'にじゅうだい', 'romaji' => 'nijuudai', 'meanings' => [
                'en' => ['20 machines', '20 vehicles'],
                'nl' => ['20 machines', '20 voertuigen'],
            ]],
            ['kana' => 'ごじゅうだい', 'romaji' => 'gojuudai', 'meanings' => [
                'en' => ['50 machines', '50 vehicles'],
                'nl' => ['50 machines', '50 voertuigen'],
            ]],
            ['kana' => 'ひゃくだい', 'romaji' => 'hyakudai', 'meanings' => [
                'en' => ['100 machines', '100 vehicles'],
                'nl' => ['100 machines', '100 voertuigen'],
            ]],

            // 冊 (さつ) - Books
            ['kana' => 'いっさつ', 'romaji' => 'issatsu', 'meanings' => [
                'en' => ['1 book'],
                'nl' => ['1 boek'],
            ]],
            ['kana' => 'にさつ', 'romaji' => 'nisatsu', 'meanings' => [
                'en' => ['2 books'],
                'nl' => ['2 boeken'],
            ]],
            ['kana' => 'さんさつ', 'romaji' => 'sansatsu', 'meanings' => [
                'en' => ['3 books'],
                'nl' => ['3 boeken'],
            ]],
            ['kana' => 'よんさつ', 'romaji' => 'yonsatsu', 'meanings' => [
                'en' => ['4 books'],
                'nl' => ['4 boeken'],
            ]],
            ['kana' => 'ごさつ', 'romaji' => 'gosatsu', 'meanings' => [
                'en' => ['5 books'],
                'nl' => ['5 boeken'],
            ]],
            ['kana' => 'ろくさつ', 'romaji' => 'rokusatsu', 'meanings' => [
                'en' => ['6 books'],
                'nl' => ['6 boeken'],
            ]],
            ['kana' => 'ななさつ', 'romaji' => 'nanasatsu', 'meanings' => [
                'en' => ['7 books'],
                'nl' => ['7 boeken'],
            ]],
            ['kana' => 'はっさつ', 'romaji' => 'hassatsu', 'meanings' => [
                'en' => ['8 books'],
                'nl' => ['8 boeken'],
            ]],
            ['kana' => 'きゅうさつ', 'romaji' => 'kyuusatsu', 'meanings' => [
                'en' => ['9 books'],
                'nl' => ['9 boeken'],
            ]],
            ['kana' => 'じゅっさつ', 'romaji' => 'jussatsu', 'meanings' => [
                'en' => ['10 books'],
                'nl' => ['10 boeken'],
            ]],
            ['kana' => 'にじゅっさつ', 'romaji' => 'nijussatsu', 'meanings' => [
                'en' => ['20 books'],
                'nl' => ['20 boeken'],
            ]],
            ['kana' => 'ごじゅっさつ', 'romaji' => 'gojussatsu', 'meanings' => [
                'en' => ['50 books'],
                'nl' => ['50 boeken'],
            ]],
            ['kana' => 'ひゃくさつ', 'romaji' => 'hyakusatsu', 'meanings' => [
                'en' => ['100 books'],
                'nl' => ['100 boeken'],
            ]],

            // 名 (めい) - People (formal)
            ['kana' => 'いちめい', 'romaji' => 'ichimei', 'meanings' => [
                'en' => ['1 person (formal)'],
                'nl' => ['1 persoon (formeel)'],
            ]],
            ['kana' => 'にめい', 'romaji' => 'nimei', 'meanings' => [
                'en' => ['2 people'],
                'nl' => ['2 personen'],
            ]],
            ['kana' => 'さんめい', 'romaji' => 'sanmei', 'meanings' => [
                'en' => ['3 people'],
                'nl' => ['3 personen'],
            ]],
            ['kana' => 'よんめい', 'romaji' => 'yonmei', 'meanings' => [
                'en' => ['4 people'],
                'nl' => ['4 personen'],
            ]],
            ['kana' => 'ごめい', 'romaji' => 'gomei', 'meanings' => [
                'en' => ['5 people'],
                'nl' => ['5 personen'],
            ]],
            ['kana' => 'ろくめい', 'romaji' => 'rokumei', 'meanings' => [
                'en' => ['6 people'],
                'nl' => ['6 personen'],
            ]],
            ['kana' => 'ななめい', 'romaji' => 'nanamei', 'meanings' => [
                'en' => ['7 people'],
                'nl' => ['7 personen'],
            ]],
            ['kana' => 'はちめい', 'romaji' => 'hachimei', 'meanings' => [
                'en' => ['8 people'],
                'nl' => ['8 personen'],
            ]],
            ['kana' => 'きゅうめい', 'romaji' => 'kyuumei', 'meanings' => [
                'en' => ['9 people'],
                'nl' => ['9 personen'],
            ]],
            ['kana' => 'じゅうめい', 'romaji' => 'juumei', 'meanings' => [
                'en' => ['10 people'],
                'nl' => ['10 personen'],
            ]],

            // 泊 (はく) - Overnight stays
            ['kana' => 'いっぱく', 'romaji' => 'ippaku', 'meanings' => [
                'en' => ['1 night', '1 overnight stay'],
                'nl' => ['1 nacht', '1 overnachting'],
            ]],
            ['kana' => 'にはく', 'romaji' => 'nihaku', 'meanings' => [
                'en' => ['2 nights'],
                'nl' => ['2 nachten'],
            ]],
            ['kana' => 'さんぱく', 'romaji' => 'sanpaku', 'meanings' => [
                'en' => ['3 nights'],
                'nl' => ['3 nachten'],
            ]],
            ['kana' => 'よんはく', 'romaji' => 'yonhaku', 'meanings' => [
                'en' => ['4 nights'],
                'nl' => ['4 nachten'],
            ]],
            ['kana' => 'ごはく', 'romaji' => 'gohaku', 'meanings' => [
                'en' => ['5 nights'],
                'nl' => ['5 nachten'],
            ]],
            ['kana' => 'ろっぱく', 'romaji' => 'roppaku', 'meanings' => [
                'en' => ['6 nights'],
                'nl' => ['6 nachten'],
            ]],
            ['kana' => 'ななはく', 'romaji' => 'nanahaku', 'meanings' => [
                'en' => ['7 nights'],
                'nl' => ['7 nachten'],
            ]],
            ['kana' => 'はっぱく', 'romaji' => 'happaku', 'meanings' => [
                'en' => ['8 nights'],
                'nl' => ['8 nachten'],
            ]],
            ['kana' => 'きゅうはく', 'romaji' => 'kyuuhaku', 'meanings' => [
                'en' => ['9 nights'],
                'nl' => ['9 nachten'],
            ]],
            ['kana' => 'じゅっぱく', 'romaji' => 'juppaku', 'meanings' => [
                'en' => ['10 nights'],
                'nl' => ['10 nachten'],
            ]],
            ['kana' => 'じゅうよんはく', 'romaji' => 'juuyonhaku', 'meanings' => [
                'en' => ['14 nights'],
                'nl' => ['14 nachten'],
            ]],
            ['kana' => 'さんじゅっぱく', 'romaji' => 'sanjuppaku', 'meanings' => [
                'en' => ['30 nights'],
                'nl' => ['30 nachten'],
            ]],
        ]);

        // VTuber
        // Basic Stream Vocabulary
        $this->seedCategory('basic-stream-vocabulary', 'Basic Stream Vocabulary', [
            ['kana' => 'こんにちは', 'romaji' => 'konnichiwa', 'meanings' => [
                'en' => ['Hello'],
                'nl' => ['Hallo'],
            ]],
            ['kana' => 'こんばんは', 'romaji' => 'konbanwa', 'meanings' => [
                'en' => ['Good evening'],
                'nl' => ['Goedenavond'],
            ]],
            ['kana' => 'おはようございます', 'romaji' => 'ohayou gozaimasu', 'meanings' => [
                'en' => ['Good morning'],
                'nl' => ['Goedemorgen'],
            ]],
            ['kana' => 'ようこそ', 'romaji' => 'youkoso', 'meanings' => [
                'en' => ['Welcome'],
                'nl' => ['Welkom'],
            ]],
            ['kana' => 'みてくれてありがとう', 'romaji' => 'mite kurete arigatou', 'meanings' => [
                'en' => ['Thanks for watching'],
                'nl' => ['Bedankt voor het kijken'],
            ]],
            ['kana' => 'きいてくれてありがとう', 'romaji' => 'kiite kurete arigatou', 'meanings' => [
                'en' => ['Thanks for listening'],
                'nl' => ['Bedankt voor het luisteren'],
            ]],
            ['kana' => 'コメントありがとう', 'romaji' => 'komento arigatou', 'meanings' => [
                'en' => ['Thanks for the comment'],
                'nl' => ['Bedankt voor je reactie'],
            ]],
            ['kana' => 'ナイス', 'romaji' => 'naisu', 'meanings' => [
                'en' => ['Nice!'],
                'nl' => ['Nice!', 'Lekker bezig!'],
            ]],
            ['kana' => 'ナイスパ', 'romaji' => 'naisu pa', 'meanings' => [
                'en' => ['Nice superchat!'],
                'nl' => ['Lekker bezig met die superchat!'],
            ]],
            ['kana' => 'ありがとうスパチャ', 'romaji' => 'arigatou supacha', 'meanings' => [
                'en' => ['Thanks for the superchat'],
                'nl' => ['Bedankt voor de superchat'],
            ]],
            ['kana' => 'チャンネルとうろくしてね', 'romaji' => 'chaneru touroku shite ne', 'meanings' => [
                'en' => ['Please subscribe to the channel'],
                'nl' => ['Abonneer je op mijn kanaal'],
            ]],
            ['kana' => 'フォローしてね', 'romaji' => 'foroo shite ne', 'meanings' => [
                'en' => ['Please follow me'],
                'nl' => ['Volg me alsjeblieft'],
            ]],
            ['kana' => 'いいねしてね', 'romaji' => 'ii ne shite ne', 'meanings' => [
                'en' => ['Please like (the video/stream)'],
                'nl' => ['Like de video/stream alsjeblieft'],
            ]],
            ['kana' => 'シェアしてね', 'romaji' => 'shea shite ne', 'meanings' => [
                'en' => ['Please share'],
                'nl' => ['Deel dit alsjeblieft'],
            ]],
            ['kana' => 'もうすぐはじまるよ', 'romaji' => 'mou sugu hajimaru yo', 'meanings' => [
                'en' => ['It’s starting soon'],
                'nl' => ['Het begint bijna'],
            ]],
            ['kana' => 'じゅんびできた？', 'romaji' => 'junbi dekita?', 'meanings' => [
                'en' => ['Are you ready?'],
                'nl' => ['Ben je er klaar voor?'],
            ]],
            ['kana' => 'いくよ！', 'romaji' => 'iku yo!', 'meanings' => [
                'en' => ['Let’s go!'],
                'nl' => ['Gaan we!'],
            ]],
            ['kana' => 'さいこう！', 'romaji' => 'saikou!', 'meanings' => [
                'en' => ['Awesome!', 'The best!'],
                'nl' => ['Geweldig!', 'Top!'],
            ]],
            ['kana' => 'つぎいこう！', 'romaji' => 'tsugi ikou!', 'meanings' => [
                'en' => ['Let’s move on to the next!'],
                'nl' => ['Laten we doorgaan naar de volgende!'],
            ]],
            ['kana' => 'またあとで！', 'romaji' => 'mata ato de!', 'meanings' => [
                'en' => ['See you later!'],
                'nl' => ['Tot later!'],
            ]],
        ]);

        // Useful Expressions
        $this->seedCategory('useful-expressions', 'Useful Expressions', [
            ['kana' => 'ちょっとまって', 'romaji' => 'chotto matte', 'meanings' => [
                'en' => ['Wait a moment'],
                'nl' => ['Wacht even'],
            ]],
            ['kana' => 'ごめんね', 'romaji' => 'gomen ne', 'meanings' => [
                'en' => ['Sorry'],
                'nl' => ['Sorry'],
            ]],
            ['kana' => 'だいじょうぶ？', 'romaji' => 'daijoubu?', 'meanings' => [
                'en' => ['Are you okay?'],
                'nl' => ['Gaat het?'],
            ]],
            ['kana' => 'だいじょうぶです', 'romaji' => 'daijoubu desu', 'meanings' => [
                'en' => ['It’s okay'],
                'nl' => ['Het is oké'],
            ]],
            ['kana' => 'どうしたの？', 'romaji' => 'doushita no?', 'meanings' => [
                'en' => ['What’s wrong?'],
                'nl' => ['Wat is er aan de hand?'],
            ]],
            ['kana' => 'まかせて！', 'romaji' => 'makasete!', 'meanings' => [
                'en' => ['Leave it to me!'],
                'nl' => ['Laat het aan mij over!'],
            ]],
            ['kana' => 'まちがえた', 'romaji' => 'machigaeta', 'meanings' => [
                'en' => ['I messed up'],
                'nl' => ['Ik heb een fout gemaakt'],
            ]],
            ['kana' => 'まってました！', 'romaji' => 'matte mashita!', 'meanings' => [
                'en' => ['I’ve been waiting!'],
                'nl' => ['Ik heb erop gewacht!'],
            ]],
            ['kana' => 'いってきます', 'romaji' => 'ittekimasu', 'meanings' => [
                'en' => ['I’ll be back (leaving temporarily)'],
                'nl' => ['Ik ben zo terug (tijdelijk weggaan)'],
            ]],
            ['kana' => 'ただいま', 'romaji' => 'tadaima', 'meanings' => [
                'en' => ['I’m back'],
                'nl' => ['Ik ben terug'],
            ]],
        ]);

        // Chat Lingo & Slang
        $this->seedCategory('chat-lingo-and-slang', 'Chat Lingo & Slang', [
            ['kana' => 'わこつ', 'romaji' => 'wakotsu', 'meanings' => [
                'en' => ['Thanks for starting the stream'],
                'nl' => ['Bedankt voor het starten van de stream'],
            ]],
            ['kana' => 'おつ', 'romaji' => 'otsu', 'meanings' => [
                'en' => ['Good job!', 'Bye (casual)'],
                'nl' => ['Goed gedaan!', 'Doei'],
            ]],
            ['kana' => 'おつかれ', 'romaji' => 'otsukare', 'meanings' => [
                'en' => ['Thanks for the hard work'],
                'nl' => ['Bedankt voor je inzet'],
            ]],
            ['kana' => 'は？', 'romaji' => 'ha?', 'meanings' => [
                'en' => ['Huh?', 'What?'],
                'nl' => ['Huh?', 'Wat?'],
            ]],
            ['kana' => '888', 'romaji' => 'pachi pachi pachi', 'meanings' => [
                'en' => ['Clap clap clap'],
                'nl' => ['Applaus applaus applaus'],
            ]],
            ['kana' => 'わら', 'romaji' => 'wara', 'meanings' => [
                'en' => ['lol'],
                'nl' => ['hahaha'],
            ]],
            ['kana' => 'くさ', 'romaji' => 'kusa', 'meanings' => [
                'en' => ['lol (literally "grass", slang for laughing)'],
                'nl' => ['lol (letterlijk "gras", Japanse internettaal)'],
            ]],
            ['kana' => 'りょ', 'romaji' => 'ryo', 'meanings' => [
                'en' => ['Got it (short for ryoukai)'],
                'nl' => ['Begrepen (kort voor ryoukai)'],
            ]],
            ['kana' => 'おこ', 'romaji' => 'oko', 'meanings' => [
                'en' => ['Angry (slang)'],
                'nl' => ['Boos (slang)'],
            ]],
            ['kana' => 'ガチ', 'romaji' => 'gachi', 'meanings' => [
                'en' => ['Seriously', 'For real'],
                'nl' => ['Serieus', 'Echt waar'],
            ]],
        ]);

        // Reactions & Emotions
        $this->seedCategory('reactions-and-emotions', 'Reactions & Emotions', [
            ['kana' => 'すごい！', 'romaji' => 'sugoi!', 'meanings' => [
                'en' => ['Amazing!', 'Wow!'],
                'nl' => ['Ongelooflijk!', 'Wow!'],
            ]],
            ['kana' => 'やったー！', 'romaji' => 'yattaa!', 'meanings' => [
                'en' => ['I did it!', 'Yay!'],
                'nl' => ['Gelukt!', 'Yes!'],
            ]],
            ['kana' => 'うれしい', 'romaji' => 'ureshii', 'meanings' => [
                'en' => ['I’m happy'],
                'nl' => ['Ik ben blij'],
            ]],
            ['kana' => 'たのしい', 'romaji' => 'tanoshii', 'meanings' => [
                'en' => ['Fun'],
                'nl' => ['Leuk'],
            ]],
            ['kana' => 'かなしい', 'romaji' => 'kanashii', 'meanings' => [
                'en' => ['Sad'],
                'nl' => ['Verdrietig'],
            ]],
            ['kana' => 'こわい', 'romaji' => 'kowai', 'meanings' => [
                'en' => ['Scary'],
                'nl' => ['Eng'],
            ]],
            ['kana' => 'びっくりした！', 'romaji' => 'bikkuri shita!', 'meanings' => [
                'en' => ['That surprised me!'],
                'nl' => ['Dat schrok me!'],
            ]],
            ['kana' => 'むずかしい', 'romaji' => 'muzukashii', 'meanings' => [
                'en' => ['Difficult'],
                'nl' => ['Moeilijk'],
            ]],
            ['kana' => 'ねむい', 'romaji' => 'nemui', 'meanings' => [
                'en' => ['Sleepy'],
                'nl' => ['Slaperig'],
            ]],
            ['kana' => 'つかれた', 'romaji' => 'tsukareta', 'meanings' => [
                'en' => ['Tired'],
                'nl' => ['Moe'],
            ]],
        ]);

        // Game-related Phrases
        $this->seedCategory('game-related-phrases', 'Game-related Phrases', [
            ['kana' => 'ゲームをはじめよう', 'romaji' => 'geemu o hajimeyou', 'meanings' => [
                'en' => ['Let’s start the game'],
                'nl' => ['Laten we beginnen met het spel'],
            ]],
            ['kana' => 'スタート！', 'romaji' => 'sutaato!', 'meanings' => [
                'en' => ['Start!'],
                'nl' => ['Start!'],
            ]],
            ['kana' => 'クリアした！', 'romaji' => 'kuria shita!', 'meanings' => [
                'en' => ['Cleared it!'],
                'nl' => ['Voltooid!'],
            ]],
            ['kana' => 'まけた～', 'romaji' => 'maketa~', 'meanings' => [
                'en' => ['I lost~'],
                'nl' => ['Ik heb verloren~'],
            ]],
            ['kana' => 'かんたん！', 'romaji' => 'kantan!', 'meanings' => [
                'en' => ['Easy!'],
                'nl' => ['Makkelijk!'],
            ]],
            ['kana' => 'むずかしすぎる！', 'romaji' => 'muzukashi sugiru!', 'meanings' => [
                'en' => ['Too hard!'],
                'nl' => ['Veel te moeilijk!'],
            ]],
            ['kana' => 'バグった', 'romaji' => 'bagutta', 'meanings' => [
                'en' => ['It bugged out'],
                'nl' => ['Er zit een bug in'],
            ]],
            ['kana' => 'ちょっとラグい', 'romaji' => 'chotto ragui', 'meanings' => [
                'en' => ['It’s a bit laggy'],
                'nl' => ['Het laggt een beetje'],
            ]],
            ['kana' => 'つよい！', 'romaji' => 'tsuyoi!', 'meanings' => [
                'en' => ['Strong!'],
                'nl' => ['Sterk!'],
            ]],
            ['kana' => 'ナイス！', 'romaji' => 'naisu!', 'meanings' => [
                'en' => ['Nice!'],
                'nl' => ['Nice!', 'Lekker bezig!'],
            ]],
        ]);

        // Technical Issues & Stream Setup
        $this->seedCategory('technical-issues-and-stream-setup', 'Technical Issues & Stream Setup', [
            ['kana' => 'マイクテスト', 'romaji' => 'maiku tesuto', 'meanings' => [
                'en' => ['Mic test'],
                'nl' => ['Microfoon test'],
            ]],
            ['kana' => 'きこえますか？', 'romaji' => 'kikoemasu ka?', 'meanings' => [
                'en' => ['Can you hear me?'],
                'nl' => ['Kun je me horen?'],
            ]],
            ['kana' => 'おとがきれい', 'romaji' => 'oto ga kirei', 'meanings' => [
                'en' => ['The sound is clear'],
                'nl' => ['Het geluid is helder'],
            ]],
            ['kana' => 'ラグがあります', 'romaji' => 'ragu ga arimasu', 'meanings' => [
                'en' => ['There’s lag'],
                'nl' => ['Er is lag'],
            ]],
            ['kana' => 'こしょうしたみたい', 'romaji' => 'koshou shita mitai', 'meanings' => [
                'en' => ['Seems broken'],
                'nl' => ['Lijkt kapot te zijn'],
            ]],
            ['kana' => 'パソコンがおかしい', 'romaji' => 'pasokon ga okashii', 'meanings' => [
                'en' => ['My computer is acting weird'],
                'nl' => ['Mijn computer doet raar'],
            ]],
            ['kana' => 'もういちどためします', 'romaji' => 'mou ichido tameshimasu', 'meanings' => [
                'en' => ['I’ll try again'],
                'nl' => ['Ik probeer het opnieuw'],
            ]],
            ['kana' => 'さいせっていちゅう', 'romaji' => 'saise tteichuu', 'meanings' => [
                'en' => ['Reconfiguring'],
                'nl' => ['Opnieuw aan het instellen'],
            ]],
            ['kana' => 'こえがきれちゃった', 'romaji' => 'koe ga kirechatta', 'meanings' => [
                'en' => ['The audio cut out'],
                'nl' => ['Het geluid viel weg'],
            ]],
            ['kana' => 'すこしおまちください', 'romaji' => 'sukoshi omachi kudasai', 'meanings' => [
                'en' => ['Please wait a moment'],
                'nl' => ['Een momentje geduld alstublieft'],
            ]],
        ]);

        // Fan Engagement
        $this->seedCategory('fan-engagement', 'Fan Engagement', [
            ['kana' => 'コメントありがとう！', 'romaji' => 'komento arigatou!', 'meanings' => [
                'en' => ['Thanks for the comment!'],
                'nl' => ['Bedankt voor je reactie!'],
            ]],
            ['kana' => 'スパチャありがとう！', 'romaji' => 'supacha arigatou!', 'meanings' => [
                'en' => ['Thanks for the super chat!'],
                'nl' => ['Bedankt voor de superchat!'],
            ]],
            ['kana' => 'しつもんがあればきいてね', 'romaji' => 'shitsumon ga areba kiite ne', 'meanings' => [
                'en' => ['Ask if you have any questions'],
                'nl' => ['Stel gerust je vragen'],
            ]],
            ['kana' => 'たのしんでる？', 'romaji' => 'tanoshinderu?', 'meanings' => [
                'en' => ['Are you having fun?'],
                'nl' => ['Heb je het naar je zin?'],
            ]],
            ['kana' => 'いつもおうえんありがとう', 'romaji' => 'itsumo ouen arigatou', 'meanings' => [
                'en' => ['Thanks for always supporting me'],
                'nl' => ['Bedankt voor je steun!'],
            ]],
            ['kana' => 'はじめてのひともいらっしゃい！', 'romaji' => 'hajimete no hito mo irasshai!', 'meanings' => [
                'en' => ['Welcome, first-timers!'],
                'nl' => ['Welkom, nieuwe kijkers!'],
            ]],
            ['kana' => 'フォローしてね', 'romaji' => 'foroo shite ne', 'meanings' => [
                'en' => ['Please follow me'],
                'nl' => ['Volg me alsjeblieft'],
            ]],
            ['kana' => 'チャンネルとうろくしてね', 'romaji' => 'channeru touroku shite ne', 'meanings' => [
                'en' => ['Please subscribe to the channel'],
                'nl' => ['Abonneer je op het kanaal'],
            ]],
            ['kana' => 'きょうもきてくれてありがとう', 'romaji' => 'kyou mo kite kurete arigatou', 'meanings' => [
                'en' => ['Thanks for coming today too'],
                'nl' => ['Bedankt dat je er weer was vandaag'],
            ]],
            ['kana' => 'またあそびにきてね！', 'romaji' => 'mata asobi ni kite ne!', 'meanings' => [
                'en' => ['Come hang out again!'],
                'nl' => ['Kom snel weer langs!'],
            ]],
        ]);

        // End-of-Stream Phrases
        $this->seedCategory('end-of-stream-phrases', 'End-of-Stream Phrases', [
            ['kana' => 'きょうはここまで！', 'romaji' => 'kyou wa koko made!', 'meanings' => [
                'en' => ['That’s all for today!'],
                'nl' => ['Dat was het voor vandaag!'],
            ]],
            ['kana' => 'おつかれさまでした！', 'romaji' => 'otsukaresama deshita!', 'meanings' => [
                'en' => ['Great work everyone!'],
                'nl' => ['Goed gedaan allemaal!'],
            ]],
            ['kana' => 'またね！', 'romaji' => 'mata ne!', 'meanings' => [
                'en' => ['See you!'],
                'nl' => ['Tot ziens!'],
            ]],
            ['kana' => 'じゃあね～', 'romaji' => 'jaa ne~', 'meanings' => [
                'en' => ['Bye~'],
                'nl' => ['Doei~'],
            ]],
            ['kana' => 'ばいばい～', 'romaji' => 'baibai~', 'meanings' => [
                'en' => ['Bye bye~'],
                'nl' => ['Bye bye~'],
            ]],
            ['kana' => 'つぎのはいしんもたのしみにしてね！', 'romaji' => 'tsugi no haishin mo tanoshimi ni shite ne!', 'meanings' => [
                'en' => ['Look forward to the next stream!'],
                'nl' => ['Kijk uit naar de volgende stream!'],
            ]],
            ['kana' => 'よるおそいのでゆっくりやすんでね', 'romaji' => 'yoru osoi node yukkuri yasunde ne', 'meanings' => [
                'en' => ['It’s late, so rest well'],
                'nl' => ['Het is laat, rust lekker uit'],
            ]],
            ['kana' => 'きょうもありがとう！', 'romaji' => 'kyou mo arigatou!', 'meanings' => [
                'en' => ['Thanks again for today!'],
                'nl' => ['Nogmaals bedankt voor vandaag!'],
            ]],
            ['kana' => 'おつVTuber！', 'romaji' => 'otsu VTuber!', 'meanings' => [
                'en' => ['VTuber-style sign-off'],
                'nl' => ['VTuber-afsluiting'],
            ]],
            ['kana' => 'さいごまでみてくれてありがとう！', 'romaji' => 'saigo made mite kurete arigatou!', 'meanings' => [
                'en' => ['Thanks for watching till the end!'],
                'nl' => ['Bedankt dat je tot het einde hebt gekeken!'],
            ]],
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

        // Handle multi-language translation
        $translations = [];
        $mainMeaning = null;
        $fullMeaning = null;
        $altPrompts = [];

        if (isset($meanings['en']) || isset($meanings['nl'])) {
            $translations = $meanings;

            // Set main meaning to first English if exists, fallback to Dutch
            $mainMeaning = $translations['en'][0] ?? ($translations['nl'][0] ?? null);
            $fullMeaning = $mainMeaning;

        } else {
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
        }

        // Split kana/romaji on slashes
        $kanaVariants = preg_split('/\s*\/\s*/u', $entry['kana']);
        $romajiVariants = preg_split('/\s*\/\s*/', $entry['romaji']);

        $mainKana = $kanaVariants[0];
        $altKana = array_slice($kanaVariants, 1);
        $altRomaji = array_slice($romajiVariants, 1);

        $extraData = [];

        if (!empty($translations)) {
            $extraData['translations'] = $translations;
        } else {
            if (!empty($altPrompts)) {
                $extraData['alt_answers'] = $altPrompts;
            }
        }

        // Recognition
        Item::create([
            'category_id' => $categoryId,
            'prompt' => $entry['kana'],
            'answer' => $mainMeaning,
            'romaji' => $entry['romaji'] ?? '',
            'direction' => 'recognition',
            'type' => $type,
            'extra_data' => !empty($extraData) ? json_encode($extraData) : null,
        ]);

        // Define kana-only types where romaji should NOT be accepted for recall
        $kanaOnlyTypes = ['Main Kana', 'Dakuten Kana', 'Combination Kana', 'All Kana'];

        $recallAltAnswers = in_array($type, $kanaOnlyTypes)
            ? $altKana
            : array_merge($altKana, $altRomaji);

        $recallExtra = [];

        if (!empty($translations)) {
            $recallExtra['translations'] = $translations;
        } else {
            if (!empty($altPrompts)) {
                $recallExtra['alt_prompts'] = $altPrompts;
            }

            if (!empty($recallAltAnswers)) {
                $recallExtra['alt_answers'] = $recallAltAnswers;
            }
        }

        // Recall
        Item::create([
            'category_id' => $categoryId,
            'prompt' => $fullMeaning ?? $mainMeaning,
            'answer' => $mainKana,
            'romaji' => $romajiVariants[0] ?? '',
            'direction' => 'recall',
            'type' => $type,
            'extra_data' => !empty($recallExtra) ? json_encode($recallExtra) : null,
        ]);
    }
}
