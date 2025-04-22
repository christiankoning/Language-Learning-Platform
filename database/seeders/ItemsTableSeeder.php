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
            ['kana' => 'ひとり', 'romaji' => 'hitori', 'meanings' => ['1 person']],
            ['kana' => 'ふたり', 'romaji' => 'futari', 'meanings' => ['2 people']],
            ['kana' => 'さんにん', 'romaji' => 'sannin', 'meanings' => ['3 people']],
            ['kana' => 'よにん', 'romaji' => 'yonin', 'meanings' => ['4 people']],
            ['kana' => 'ごにん', 'romaji' => 'gonin', 'meanings' => ['5 people']],
            ['kana' => 'ろくにん', 'romaji' => 'rokunin', 'meanings' => ['6 people']],
            ['kana' => 'ななにん', 'romaji' => 'nananin', 'meanings' => ['7 people', 'しちにん']],
            ['kana' => 'はちにん', 'romaji' => 'hachinin', 'meanings' => ['8 people']],
            ['kana' => 'きゅうにん', 'romaji' => 'kyuunin', 'meanings' => ['9 people']],
            ['kana' => 'じゅうにん', 'romaji' => 'juunin', 'meanings' => ['10 people']],
        ]);

        // Age
        $this->seedCategory('counting-age', 'Age', [
            ['kana' => 'いっさい', 'romaji' => 'issai', 'meanings' => ['1 year old']],
            ['kana' => 'にさい', 'romaji' => 'nisai', 'meanings' => ['2 years old']],
            ['kana' => 'さんさい', 'romaji' => 'sansai', 'meanings' => ['3 years old']],
            ['kana' => 'よんさい', 'romaji' => 'yonsai', 'meanings' => ['4 years old']],
            ['kana' => 'ごさい', 'romaji' => 'gosai', 'meanings' => ['5 years old']],
            ['kana' => 'ろくさい', 'romaji' => 'rokusai', 'meanings' => ['6 years old']],
            ['kana' => 'ななさい', 'romaji' => 'nanasai', 'meanings' => ['7 years old']],
            ['kana' => 'はっさい', 'romaji' => 'hassai', 'meanings' => ['8 years old']],
            ['kana' => 'きゅうさい', 'romaji' => 'kyuusai', 'meanings' => ['9 years old']],
            ['kana' => 'じゅっさい', 'romaji' => 'jussai', 'meanings' => ['10 years old', 'じっさい']],
            ['kana' => 'じゅういっさい', 'romaji' => 'juuissai', 'meanings' => ['11 years old']],
            ['kana' => 'じゅうにさい', 'romaji' => 'juunisai', 'meanings' => ['12 years old']],
            ['kana' => 'じゅうさんさい', 'romaji' => 'juusansai', 'meanings' => ['13 years old']],
            ['kana' => 'じゅうよんさい', 'romaji' => 'juuyonsai', 'meanings' => ['14 years old']],
            ['kana' => 'じゅうごさい', 'romaji' => 'juugosai', 'meanings' => ['15 years old']],
            ['kana' => 'じゅうろくさい', 'romaji' => 'juurokusai', 'meanings' => ['16 years old']],
            ['kana' => 'じゅうななさい', 'romaji' => 'juunanasai', 'meanings' => ['17 years old']],
            ['kana' => 'じゅうはっさい', 'romaji' => 'juuhassai', 'meanings' => ['18 years old']],
            ['kana' => 'じゅうきゅうさい', 'romaji' => 'juukyuusai', 'meanings' => ['19 years old']],
            ['kana' => 'はたち', 'romaji' => 'hatachi', 'meanings' => ['20 years old']],
        ]);

        // Hours
        $this->seedCategory('counting-hours', 'Hours', [
            ['kana' => 'れいじ', 'romaji' => 'rei ji', 'meanings' => ['0 o\'clock']],
            ['kana' => 'いちじ', 'romaji' => 'ichi ji', 'meanings' => ['1 o\'clock']],
            ['kana' => 'にじ', 'romaji' => 'ni ji', 'meanings' => ['2 o\'clock']],
            ['kana' => 'さんじ', 'romaji' => 'san ji', 'meanings' => ['3 o\'clock']],
            ['kana' => 'よじ', 'romaji' => 'yo ji', 'meanings' => ['4 o\'clock']],
            ['kana' => 'ごじ', 'romaji' => 'go ji', 'meanings' => ['5 o\'clock']],
            ['kana' => 'ろくじ', 'romaji' => 'roku ji', 'meanings' => ['6 o\'clock']],
            ['kana' => 'しちじ', 'romaji' => 'shichi ji', 'meanings' => ['7 o\'clock']],
            ['kana' => 'はちじ', 'romaji' => 'hachi ji', 'meanings' => ['8 o\'clock']],
            ['kana' => 'くじ', 'romaji' => 'ku ji', 'meanings' => ['9 o\'clock']],
            ['kana' => 'じゅうじ', 'romaji' => 'juu ji', 'meanings' => ['10 o\'clock']],
            ['kana' => 'じゅういちじ', 'romaji' => 'juuichi ji', 'meanings' => ['11 o\'clock']],
            ['kana' => 'じゅうにじ', 'romaji' => 'juuni ji', 'meanings' => ['12 o\'clock']],
            ['kana' => 'じゅうさんじ', 'romaji' => 'juusan ji', 'meanings' => ['13 o\'clock']],
            ['kana' => 'じゅうよじ', 'romaji' => 'juuyo ji', 'meanings' => ['14 o\'clock']],
            ['kana' => 'じゅうごじ', 'romaji' => 'juugo ji', 'meanings' => ['15 o\'clock']],
            ['kana' => 'じゅうろくじ', 'romaji' => 'juuroku ji', 'meanings' => ['16 o\'clock']],
            ['kana' => 'じゅうしちじ', 'romaji' => 'juushichi ji', 'meanings' => ['17 o\'clock']],
            ['kana' => 'じゅうはちじ', 'romaji' => 'juuhachi ji', 'meanings' => ['18 o\'clock']],
            ['kana' => 'じゅうくじ', 'romaji' => 'juuku ji', 'meanings' => ['19 o\'clock']],
            ['kana' => 'にじゅうじ', 'romaji' => 'nijuu ji', 'meanings' => ['20 o\'clock']],
            ['kana' => 'にじゅういちじ', 'romaji' => 'nijuuichi ji', 'meanings' => ['21 o\'clock']],
            ['kana' => 'にじゅうにじ', 'romaji' => 'nijuuni ji', 'meanings' => ['22 o\'clock']],
            ['kana' => 'にじゅうさんじ', 'romaji' => 'nijuusan ji', 'meanings' => ['23 o\'clock']],
            ['kana' => 'にじゅうよじ', 'romaji' => 'nijuuyo ji', 'meanings' => ['24 o\'clock']],
        ]);

        // Minutes
        $this->seedCategory('counting-minutes', 'Minutes', [
            ['kana' => 'いっぷん', 'romaji' => 'ippun', 'meanings' => ['1 minute']],
            ['kana' => 'にふん', 'romaji' => 'ni fun', 'meanings' => ['2 minutes']],
            ['kana' => 'さんぷん', 'romaji' => 'san pun', 'meanings' => ['3 minutes']],
            ['kana' => 'よんぷん', 'romaji' => 'yon pun', 'meanings' => ['4 minutes']],
            ['kana' => 'ごふん', 'romaji' => 'go fun', 'meanings' => ['5 minutes']],
            ['kana' => 'ろっぷん', 'romaji' => 'roppun', 'meanings' => ['6 minutes']],
            ['kana' => 'ななふん', 'romaji' => 'nana fun', 'meanings' => ['7 minutes']],
            ['kana' => 'はっぷん', 'romaji' => 'happun', 'meanings' => ['8 minutes']],
            ['kana' => 'きゅうふん', 'romaji' => 'kyuu fun', 'meanings' => ['9 minutes']],
            ['kana' => 'じゅっぷん', 'romaji' => 'juppun', 'meanings' => ['10 minutes']],
            ['kana' => 'じゅうごふん', 'romaji' => 'juugo fun', 'meanings' => ['15 minutes']],
            ['kana' => 'にじゅっぷん', 'romaji' => 'nijuppun', 'meanings' => ['20 minutes']],
            ['kana' => 'にじゅうごふん', 'romaji' => 'nijuugo fun', 'meanings' => ['25 minutes']],
            ['kana' => 'さんじゅっぷん', 'romaji' => 'sanjuppun', 'meanings' => ['30 minutes']],
            ['kana' => 'さんじゅうごふん', 'romaji' => 'sanjuugo fun', 'meanings' => ['35 minutes']],
            ['kana' => 'よんじゅっぷん', 'romaji' => 'yonjuppun', 'meanings' => ['40 minutes']],
            ['kana' => 'よんじゅうごふん', 'romaji' => 'yonjuugo fun', 'meanings' => ['45 minutes']],
            ['kana' => 'ごじゅっぷん', 'romaji' => 'gojuppun', 'meanings' => ['50 minutes']],
            ['kana' => 'ごじゅうごふん', 'romaji' => 'gojuugo fun', 'meanings' => ['55 minutes']],
            ['kana' => 'ろくじゅっぷん', 'romaji' => 'rokujuppun', 'meanings' => ['60 minutes']],
        ]);

        // Seconds
        $this->seedCategory('counting-seconds', 'Seconds', [
            ['kana' => 'いちびょう', 'romaji' => 'ichi byou', 'meanings' => ['1 second']],
            ['kana' => 'にびょう', 'romaji' => 'ni byou', 'meanings' => ['2 seconds']],
            ['kana' => 'さんびょう', 'romaji' => 'san byou', 'meanings' => ['3 seconds']],
            ['kana' => 'よんびょう', 'romaji' => 'yon byou', 'meanings' => ['4 seconds']],
            ['kana' => 'ごびょう', 'romaji' => 'go byou', 'meanings' => ['5 seconds']],
            ['kana' => 'ろくびょう', 'romaji' => 'roku byou', 'meanings' => ['6 seconds']],
            ['kana' => 'ななびょう', 'romaji' => 'nana byou', 'meanings' => ['7 seconds']],
            ['kana' => 'はちびょう', 'romaji' => 'hachi byou', 'meanings' => ['8 seconds']],
            ['kana' => 'きゅうびょう', 'romaji' => 'kyuu byou', 'meanings' => ['9 seconds']],
            ['kana' => 'じゅうびょう', 'romaji' => 'juu byou', 'meanings' => ['10 seconds']],
            ['kana' => 'じゅうごびょう', 'romaji' => 'juugo byou', 'meanings' => ['15 seconds']],
            ['kana' => 'さんじゅっびょう', 'romaji' => 'sanjuppyou', 'meanings' => ['30 seconds']],
            ['kana' => 'よんじゅうごびょう', 'romaji' => 'yonjuugo byou', 'meanings' => ['45 seconds']],
            ['kana' => 'ろくじゅっびょう', 'romaji' => 'rokujuppyou', 'meanings' => ['60 seconds']],
        ]);

        // Days
        $this->seedCategory('counting-days', 'Days', [
            ['kana' => 'ついたち', 'romaji' => 'tsuitachi', 'meanings' => ['1st']],
            ['kana' => 'ふつか', 'romaji' => 'futsuka', 'meanings' => ['2nd']],
            ['kana' => 'みっか', 'romaji' => 'mikka', 'meanings' => ['3rd']],
            ['kana' => 'よっか', 'romaji' => 'yokka', 'meanings' => ['4th']],
            ['kana' => 'いつか', 'romaji' => 'itsuka', 'meanings' => ['5th']],
            ['kana' => 'むいか', 'romaji' => 'muika', 'meanings' => ['6th']],
            ['kana' => 'なのか', 'romaji' => 'nanoka', 'meanings' => ['7th']],
            ['kana' => 'ようか', 'romaji' => 'youka', 'meanings' => ['8th']],
            ['kana' => 'ここのか', 'romaji' => 'kokonoka', 'meanings' => ['9th']],
            ['kana' => 'とおか', 'romaji' => 'tooka', 'meanings' => ['10th']],
            ['kana' => 'じゅういちにち', 'romaji' => 'juuichi nichi', 'meanings' => ['11th']],
            ['kana' => 'じゅうににち', 'romaji' => 'juuni nichi', 'meanings' => ['12th']],
            ['kana' => 'じゅうさんにち', 'romaji' => 'juusan nichi', 'meanings' => ['13th']],
            ['kana' => 'じゅうよっか', 'romaji' => 'juuyokka', 'meanings' => ['14th']],
            ['kana' => 'じゅうごにち', 'romaji' => 'juugo nichi', 'meanings' => ['15th']],
            ['kana' => 'じゅうろくにち', 'romaji' => 'juuroku nichi', 'meanings' => ['16th']],
            ['kana' => 'じゅうしちにち', 'romaji' => 'juushichi nichi', 'meanings' => ['17th']],
            ['kana' => 'じゅうはちにち', 'romaji' => 'juuhachi nichi', 'meanings' => ['18th']],
            ['kana' => 'じゅうくにち', 'romaji' => 'juuku nichi', 'meanings' => ['19th']],
            ['kana' => 'はつか', 'romaji' => 'hatsuka', 'meanings' => ['20th']],
            ['kana' => 'にじゅういちにち', 'romaji' => 'nijuuichi nichi', 'meanings' => ['21st']],
            ['kana' => 'にじゅうににち', 'romaji' => 'nijuuni nichi', 'meanings' => ['22nd']],
            ['kana' => 'にじゅうさんにち', 'romaji' => 'nijuusan nichi', 'meanings' => ['23rd']],
            ['kana' => 'にじゅうよっか', 'romaji' => 'nijuuyokka', 'meanings' => ['24th']],
            ['kana' => 'にじゅうごにち', 'romaji' => 'nijuugo nichi', 'meanings' => ['25th']],
            ['kana' => 'にじゅうろくにち', 'romaji' => 'nijuuroku nichi', 'meanings' => ['26th']],
            ['kana' => 'にじゅうしちにち', 'romaji' => 'nijuushichi nichi', 'meanings' => ['27th']],
            ['kana' => 'にじゅうはちにち', 'romaji' => 'nijuuhachi nichi', 'meanings' => ['28th']],
            ['kana' => 'にじゅうくにち', 'romaji' => 'nijuuku nichi', 'meanings' => ['29th']],
            ['kana' => 'さんじゅうにち', 'romaji' => 'sanjuu nichi', 'meanings' => ['30th']],
            ['kana' => 'さんじゅういちにち', 'romaji' => 'sanjuuichi nichi', 'meanings' => ['31st']],
        ]);

        // Weeks
        $this->seedCategory('counting-weeks', 'Weeks', [
            ['kana' => 'いっしゅうかん', 'romaji' => 'isshuukan', 'meanings' => ['1 week']],
            ['kana' => 'にしゅうかん', 'romaji' => 'nishuukan', 'meanings' => ['2 weeks']],
            ['kana' => 'さんしゅうかん', 'romaji' => 'sanshuukan', 'meanings' => ['3 weeks']],
            ['kana' => 'よんしゅうかん', 'romaji' => 'yonshuukan', 'meanings' => ['4 weeks']],
            ['kana' => 'ごしゅうかん', 'romaji' => 'goshuukan', 'meanings' => ['5 weeks']],
            ['kana' => 'ろくしゅうかん', 'romaji' => 'rokushuukan', 'meanings' => ['6 weeks']],
            ['kana' => 'ななしゅうかん', 'romaji' => 'nanashuukan', 'meanings' => ['7 weeks']],
            ['kana' => 'はっしゅうかん', 'romaji' => 'hasshuukan', 'meanings' => ['8 weeks']],
            ['kana' => 'きゅうしゅうかん', 'romaji' => 'kyuushuukan', 'meanings' => ['9 weeks']],
            ['kana' => 'じゅっしゅうかん', 'romaji' => 'jusshuukan', 'meanings' => ['10 weeks']],
            ['kana' => 'じゅうにしゅうかん', 'romaji' => 'juunishuukan', 'meanings' => ['12 weeks']],
            ['kana' => 'じゅうろくしゅうかん', 'romaji' => 'juurokushuukan', 'meanings' => ['16 weeks']],
            ['kana' => 'にじゅっしゅうかん', 'romaji' => 'nijusshuukan', 'meanings' => ['20 weeks']],
        ]);

        // Months
        $this->seedCategory('counting-months', 'Months', [
            ['kana' => 'いっかげつ', 'romaji' => 'ikkagetsu', 'meanings' => ['1 month']],
            ['kana' => 'にかげつ', 'romaji' => 'nikagetsu', 'meanings' => ['2 months']],
            ['kana' => 'さんかげつ', 'romaji' => 'sankagetsu', 'meanings' => ['3 months']],
            ['kana' => 'よんかげつ', 'romaji' => 'yonkagetsu', 'meanings' => ['4 months']],
            ['kana' => 'ごかげつ', 'romaji' => 'gokagetsu', 'meanings' => ['5 months']],
            ['kana' => 'ろっかげつ', 'romaji' => 'rokkagetsu', 'meanings' => ['6 months']],
            ['kana' => 'ななかげつ', 'romaji' => 'nanakagetsu', 'meanings' => ['7 months']],
            ['kana' => 'はちかげつ', 'romaji' => 'hachikagetsu', 'meanings' => ['8 months']],
            ['kana' => 'きゅうかげつ', 'romaji' => 'kyuukagetsu', 'meanings' => ['9 months']],
            ['kana' => 'じゅっかげつ', 'romaji' => 'jukkagetsu', 'meanings' => ['10 months']],
            ['kana' => 'じゅういっかげつ', 'romaji' => 'juuikkagetsu', 'meanings' => ['11 months']],
            ['kana' => 'じゅうにかげつ', 'romaji' => 'juunikagetsu', 'meanings' => ['12 months']],
            ['kana' => 'じゅうはちかげつ', 'romaji' => 'juuhachikagetsu', 'meanings' => ['18 months']],
            ['kana' => 'にじゅうよんかげつ', 'romaji' => 'nijuuyonkagetsu', 'meanings' => ['24 months']],
        ]);

        // Years
        $this->seedCategory('counting-years', 'Years', [
            ['kana' => 'いちねん', 'romaji' => 'ichi nen', 'meanings' => ['1 year']],
            ['kana' => 'にねん', 'romaji' => 'ni nen', 'meanings' => ['2 years']],
            ['kana' => 'さんねん', 'romaji' => 'san nen', 'meanings' => ['3 years']],
            ['kana' => 'よねん', 'romaji' => 'yo nen', 'meanings' => ['4 years']],
            ['kana' => 'ごねん', 'romaji' => 'go nen', 'meanings' => ['5 years']],
            ['kana' => 'ろくねん', 'romaji' => 'roku nen', 'meanings' => ['6 years']],
            ['kana' => 'ななねん', 'romaji' => 'nana nen', 'meanings' => ['7 years']],
            ['kana' => 'はちねん', 'romaji' => 'hachi nen', 'meanings' => ['8 years']],
            ['kana' => 'きゅうねん', 'romaji' => 'kyuu nen', 'meanings' => ['9 years']],
            ['kana' => 'じゅうねん', 'romaji' => 'juu nen', 'meanings' => ['10 years']],
            ['kana' => 'じゅうごねん', 'romaji' => 'juugo nen', 'meanings' => ['15 years']],
            ['kana' => 'にじゅうねん', 'romaji' => 'nijuu nen', 'meanings' => ['20 years']],
            ['kana' => 'にじゅうごねん', 'romaji' => 'nijuugo nen', 'meanings' => ['25 years']],
            ['kana' => 'さんじゅうねん', 'romaji' => 'sanjuu nen', 'meanings' => ['30 years']],
            ['kana' => 'よんじゅうねん', 'romaji' => 'yonjuu nen', 'meanings' => ['40 years']],
            ['kana' => 'ごじゅうねん', 'romaji' => 'gojuu nen', 'meanings' => ['50 years']],
        ]);

        // Times (Occurrences)
        $this->seedCategory('counting-times', 'Times (Occurrences)', [
            ['kana' => 'いっかい', 'romaji' => 'ikkai', 'meanings' => ['once']],
            ['kana' => 'にかい', 'romaji' => 'nikai', 'meanings' => ['twice']],
            ['kana' => 'さんかい', 'romaji' => 'sankai', 'meanings' => ['three times']],
            ['kana' => 'よんかい', 'romaji' => 'yonkai', 'meanings' => ['four times']],
            ['kana' => 'ごかい', 'romaji' => 'gokai', 'meanings' => ['five times']],
            ['kana' => 'ろっかい', 'romaji' => 'rokkai', 'meanings' => ['six times']],
            ['kana' => 'ななかい', 'romaji' => 'nanakai', 'meanings' => ['seven times']],
            ['kana' => 'はちかい', 'romaji' => 'hachikai', 'meanings' => ['eight times']],
            ['kana' => 'きゅうかい', 'romaji' => 'kyuukai', 'meanings' => ['nine times']],
            ['kana' => 'じゅっかい', 'romaji' => 'jukkai', 'meanings' => ['ten times']],
            ['kana' => 'じゅうごかい', 'romaji' => 'juugo kai', 'meanings' => ['15 times']],
            ['kana' => 'にじゅっかい', 'romaji' => 'nijukkai', 'meanings' => ['20 times']],
            ['kana' => 'ごじゅっかい', 'romaji' => 'gojukkai', 'meanings' => ['50 times']],
            ['kana' => 'ひゃっかい', 'romaji' => 'hyakkai', 'meanings' => ['100 times']],
        ]);

        // Abstract Things
        $this->seedCategory('counting-abstract-things', 'Abstract Things', [
            ['kana' => 'ひとつ', 'romaji' => 'hitotsu', 'meanings' => ['one thing']],
            ['kana' => 'ふたつ', 'romaji' => 'futatsu', 'meanings' => ['two things']],
            ['kana' => 'みっつ', 'romaji' => 'mittsu', 'meanings' => ['three things']],
            ['kana' => 'よっつ', 'romaji' => 'yottsu', 'meanings' => ['four things']],
            ['kana' => 'いつつ', 'romaji' => 'itsutsu', 'meanings' => ['five things']],
            ['kana' => 'むっつ', 'romaji' => 'muttsu', 'meanings' => ['six things']],
            ['kana' => 'ななつ', 'romaji' => 'nanatsu', 'meanings' => ['seven things']],
            ['kana' => 'やっつ', 'romaji' => 'yattsu', 'meanings' => ['eight things']],
            ['kana' => 'ここのつ', 'romaji' => 'kokonotsu', 'meanings' => ['nine things']],
            ['kana' => 'とお', 'romaji' => 'too', 'meanings' => ['ten things']],
        ]);

        // Flat Objects
        $this->seedCategory('counting-flat-objects', 'Flat Objects', [
            ['kana' => 'いちまい', 'romaji' => 'ichi mai', 'meanings' => ['one (flat object)']],
            ['kana' => 'にまい', 'romaji' => 'ni mai', 'meanings' => ['two (flat objects)']],
            ['kana' => 'さんまい', 'romaji' => 'san mai', 'meanings' => ['three (flat objects)']],
            ['kana' => 'よんまい', 'romaji' => 'yon mai', 'meanings' => ['four (flat objects)']],
            ['kana' => 'ごまい', 'romaji' => 'go mai', 'meanings' => ['five (flat objects)']],
            ['kana' => 'ろくまい', 'romaji' => 'roku mai', 'meanings' => ['six (flat objects)']],
            ['kana' => 'ななまい', 'romaji' => 'nana mai', 'meanings' => ['seven (flat objects)']],
            ['kana' => 'はちまい', 'romaji' => 'hachi mai', 'meanings' => ['eight (flat objects)']],
            ['kana' => 'きゅうまい', 'romaji' => 'kyuu mai', 'meanings' => ['nine (flat objects)']],
            ['kana' => 'じゅうまい', 'romaji' => 'juu mai', 'meanings' => ['ten (flat objects)']],
            ['kana' => 'にじゅうまい', 'romaji' => 'nijuu mai', 'meanings' => ['twenty (flat objects)']],
            ['kana' => 'さんじゅうまい', 'romaji' => 'sanjuu mai', 'meanings' => ['thirty (flat objects)']],
            ['kana' => 'ごじゅうまい', 'romaji' => 'gojuu mai', 'meanings' => ['fifty (flat objects)']],
            ['kana' => 'ひゃくまい', 'romaji' => 'hyaku mai', 'meanings' => ['hundred (flat objects)']],
        ]);

        // Long Objects
        $this->seedCategory('counting-long-objects', 'Long Objects', [
            ['kana' => 'いっぽん', 'romaji' => 'ippon', 'meanings' => ['one (long object)']],
            ['kana' => 'にほん', 'romaji' => 'nihon', 'meanings' => ['two (long objects)']],
            ['kana' => 'さんぼん', 'romaji' => 'sanbon', 'meanings' => ['three (long objects)']],
            ['kana' => 'よんほん', 'romaji' => 'yonhon', 'meanings' => ['four (long objects)']],
            ['kana' => 'ごほん', 'romaji' => 'gohon', 'meanings' => ['five (long objects)']],
            ['kana' => 'ろっぽん', 'romaji' => 'roppon', 'meanings' => ['six (long objects)']],
            ['kana' => 'ななほん', 'romaji' => 'nanahon', 'meanings' => ['seven (long objects)']],
            ['kana' => 'はっぽん', 'romaji' => 'happon', 'meanings' => ['eight (long objects)']],
            ['kana' => 'きゅうほん', 'romaji' => 'kyuuhon', 'meanings' => ['nine (long objects)']],
            ['kana' => 'じゅっぽん', 'romaji' => 'juppon', 'meanings' => ['ten (long objects)']],
            ['kana' => 'にじゅっぽん', 'romaji' => 'nijuppon', 'meanings' => ['twenty (long objects)']],
            ['kana' => 'さんじゅっぽん', 'romaji' => 'sanjuppon', 'meanings' => ['thirty (long objects)']],
            ['kana' => 'ごじゅっぽん', 'romaji' => 'gojuppon', 'meanings' => ['fifty (long objects)']],
            ['kana' => 'ひゃっぽん', 'romaji' => 'hyappon', 'meanings' => ['hundred (long objects)']],
        ]);

        // Small Animals
        $this->seedCategory('counting-small-animals', 'Small Animals', [
            ['kana' => 'いっぴき', 'romaji' => 'ippiki', 'meanings' => ['1 small animal']],
            ['kana' => 'にひき', 'romaji' => 'nihiki', 'meanings' => ['2 small animals']],
            ['kana' => 'さんびき', 'romaji' => 'sanbiki', 'meanings' => ['3 small animals']],
            ['kana' => 'よんひき', 'romaji' => 'yonhiki', 'meanings' => ['4 small animals']],
            ['kana' => 'ごひき', 'romaji' => 'gohiki', 'meanings' => ['5 small animals']],
            ['kana' => 'ろっぴき', 'romaji' => 'roppiki', 'meanings' => ['6 small animals']],
            ['kana' => 'ななひき', 'romaji' => 'nanahiki', 'meanings' => ['7 small animals']],
            ['kana' => 'はっぴき', 'romaji' => 'happiki', 'meanings' => ['8 small animals']],
            ['kana' => 'きゅうひき', 'romaji' => 'kyuuhiki', 'meanings' => ['9 small animals']],
            ['kana' => 'じゅっぴき', 'romaji' => 'juppiki', 'meanings' => ['10 small animals']],
            ['kana' => 'にじゅっぴき', 'romaji' => 'nijuppiki', 'meanings' => ['20 small animals']],
            ['kana' => 'さんじゅっぴき', 'romaji' => 'sanjuppiki', 'meanings' => ['30 small animals']],
            ['kana' => 'ごじゅっぴき', 'romaji' => 'gojuppiki', 'meanings' => ['50 small animals']],
            ['kana' => 'ひゃっぴき', 'romaji' => 'hyappiki', 'meanings' => ['100 small animals']],
        ]);

        // Big Animals
        $this->seedCategory('counting-big-animals', 'Big Animals', [
            ['kana' => 'いっとう', 'romaji' => 'ittou', 'meanings' => ['1 big animal']],
            ['kana' => 'にとう', 'romaji' => 'nitou', 'meanings' => ['2 big animals']],
            ['kana' => 'さんとう', 'romaji' => 'santou', 'meanings' => ['3 big animals']],
            ['kana' => 'よんとう', 'romaji' => 'yontou', 'meanings' => ['4 big animals']],
            ['kana' => 'ごとう', 'romaji' => 'gotou', 'meanings' => ['5 big animals']],
            ['kana' => 'ろくとう', 'romaji' => 'rokutou', 'meanings' => ['6 big animals']],
            ['kana' => 'ななとう', 'romaji' => 'nanatou', 'meanings' => ['7 big animals']],
            ['kana' => 'はちとう', 'romaji' => 'hachitou', 'meanings' => ['8 big animals']],
            ['kana' => 'きゅうとう', 'romaji' => 'kyuutou', 'meanings' => ['9 big animals']],
            ['kana' => 'じゅっとう', 'romaji' => 'juttou', 'meanings' => ['10 big animals']],
            ['kana' => 'にじゅっとう', 'romaji' => 'nijuttou', 'meanings' => ['20 big animals']],
            ['kana' => 'さんじゅっとう', 'romaji' => 'sanjuttou', 'meanings' => ['30 big animals']],
            ['kana' => 'ごじゅっとう', 'romaji' => 'gojuttou', 'meanings' => ['50 big animals']],
            ['kana' => 'ひゃくとう', 'romaji' => 'hyakutou', 'meanings' => ['100 big animals']],
        ]);

        // Birds & Rabbits
        $this->seedCategory('counting-birds-rabbits', 'Birds & Rabbits', [
            ['kana' => 'いちわ', 'romaji' => 'ichiwa', 'meanings' => ['1 bird', '1 rabbit']],
            ['kana' => 'にわ', 'romaji' => 'niwa', 'meanings' => ['2 birds', '2 rabbits']],
            ['kana' => 'さんわ', 'romaji' => 'sanwa', 'meanings' => ['3 birds', '3 rabbits']],
            ['kana' => 'よんわ', 'romaji' => 'yonwa', 'meanings' => ['4 birds', '4 rabbits']],
            ['kana' => 'ごわ', 'romaji' => 'gowa', 'meanings' => ['5 birds', '5 rabbits']],
            ['kana' => 'ろくわ', 'romaji' => 'rokuwa', 'meanings' => ['6 birds', '6 rabbits']],
            ['kana' => 'ななわ', 'romaji' => 'nanawa', 'meanings' => ['7 birds', '7 rabbits']],
            ['kana' => 'はちわ', 'romaji' => 'hachiwa', 'meanings' => ['8 birds', '8 rabbits']],
            ['kana' => 'きゅうわ', 'romaji' => 'kyuuwa', 'meanings' => ['9 birds', '9 rabbits']],
            ['kana' => 'じゅうわ', 'romaji' => 'juuwa', 'meanings' => ['10 birds', '10 rabbits']],
            ['kana' => 'にじゅうわ', 'romaji' => 'nijuuwa', 'meanings' => ['20 birds', '20 rabbits']],
            ['kana' => 'さんじゅうわ', 'romaji' => 'sanjuuwa', 'meanings' => ['30 birds', '30 rabbits']],
            ['kana' => 'ごじゅうわ', 'romaji' => 'gojuuwa', 'meanings' => ['50 birds', '50 rabbits']],
            ['kana' => 'ひゃくわ', 'romaji' => 'hyakuwa', 'meanings' => ['100 birds', '100 rabbits']],
        ]);

        // Floors/Levels
        $this->seedCategory('counting-floors', 'Floors/Levels', [
            ['kana' => 'ちかいっかい', 'romaji' => 'chika ikkai', 'meanings' => ['B1 (Basement level)']],
            ['kana' => 'いっかい', 'romaji' => 'ikkai', 'meanings' => ['1st floor', 'first floor']],
            ['kana' => 'にかい', 'romaji' => 'nikai', 'meanings' => ['2nd floor', 'second floor']],
            ['kana' => 'さんがい', 'romaji' => 'sangai', 'meanings' => ['3rd floor', 'third floor']],
            ['kana' => 'よんかい', 'romaji' => 'yonkai', 'meanings' => ['4th floor', 'fourth floor']],
            ['kana' => 'ごかい', 'romaji' => 'gokai', 'meanings' => ['5th floor', 'fifth floor']],
            ['kana' => 'ろっかい', 'romaji' => 'rokkai', 'meanings' => ['6th floor', 'sixth floor']],
            ['kana' => 'ななかい', 'romaji' => 'nanakai', 'meanings' => ['7th floor', 'seventh floor']],
            ['kana' => 'はっかい', 'romaji' => 'hakkai', 'meanings' => ['8th floor', 'eighth floor']],
            ['kana' => 'きゅうかい', 'romaji' => 'kyuukai', 'meanings' => ['9th floor', 'ninth floor']],
            ['kana' => 'じゅっかい', 'romaji' => 'jukkai', 'meanings' => ['10th floor', 'tenth floor']],
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
            ['kana' => 'いっぱい', 'romaji' => 'ippai', 'meanings' => ['1 glass', '1 cup']],
            ['kana' => 'にはい', 'romaji' => 'nihai', 'meanings' => ['2 glasses', '2 cups']],
            ['kana' => 'さんばい', 'romaji' => 'sanbai', 'meanings' => ['3 glasses', '3 cups']],
            ['kana' => 'よんはい', 'romaji' => 'yonhai', 'meanings' => ['4 glasses', '4 cups']],
            ['kana' => 'ごはい', 'romaji' => 'gohai', 'meanings' => ['5 glasses', '5 cups']],
            ['kana' => 'ろっぱい', 'romaji' => 'roppai', 'meanings' => ['6 glasses', '6 cups']],
            ['kana' => 'ななはい', 'romaji' => 'nanahai', 'meanings' => ['7 glasses', '7 cups']],
            ['kana' => 'はっぱい', 'romaji' => 'happai', 'meanings' => ['8 glasses', '8 cups']],
            ['kana' => 'きゅうはい', 'romaji' => 'kyuuhai', 'meanings' => ['9 glasses', '9 cups']],
            ['kana' => 'じゅっぱい', 'romaji' => 'juppai', 'meanings' => ['10 glasses', '10 cups']],
            ['kana' => 'にじゅっぱい', 'romaji' => 'nijuppai', 'meanings' => ['20 glasses', '20 cups']],
            ['kana' => 'さんじゅっぱい', 'romaji' => 'sanjuppai', 'meanings' => ['30 glasses', '30 cups']],
            ['kana' => 'ごじゅっぱい', 'romaji' => 'gojuppai', 'meanings' => ['50 glasses', '50 cups']],
            ['kana' => 'ひゃっぱい', 'romaji' => 'hyappai', 'meanings' => ['100 glasses', '100 cups']],
        ]);


        // Round Objects
        $this->seedCategory('counting-round-objects', 'Round Objects', [
            ['kana' => 'いっこ', 'romaji' => 'ikko', 'meanings' => ['1 piece']],
            ['kana' => 'にこ', 'romaji' => 'niko', 'meanings' => ['2 pieces']],
            ['kana' => 'さんこ', 'romaji' => 'sanko', 'meanings' => ['3 pieces']],
            ['kana' => 'よんこ', 'romaji' => 'yonko', 'meanings' => ['4 pieces']],
            ['kana' => 'ごこ', 'romaji' => 'goko', 'meanings' => ['5 pieces']],
            ['kana' => 'ろっこ', 'romaji' => 'rokko', 'meanings' => ['6 pieces']],
            ['kana' => 'ななこ', 'romaji' => 'nanako', 'meanings' => ['7 pieces']],
            ['kana' => 'はっこ', 'romaji' => 'hakko', 'meanings' => ['8 pieces']],
            ['kana' => 'きゅうこ', 'romaji' => 'kyuuko', 'meanings' => ['9 pieces']],
            ['kana' => 'じゅっこ', 'romaji' => 'jukko', 'meanings' => ['10 pieces']],
            ['kana' => 'にじゅっこ', 'romaji' => 'nijukko', 'meanings' => ['20 pieces']],
            ['kana' => 'さんじゅっこ', 'romaji' => 'sanjukko', 'meanings' => ['30 pieces']],
            ['kana' => 'ごじゅっこ', 'romaji' => 'gojukko', 'meanings' => ['50 pieces']],
            ['kana' => 'ひゃっこ', 'romaji' => 'hyakko', 'meanings' => ['100 pieces']],
        ]);

        // Multiples
        $this->seedCategory('counting-multiples', 'Multiples', [
            ['kana' => 'いちばい', 'romaji' => 'ichibai', 'meanings' => ['1x', 'same']],
            ['kana' => 'にばい', 'romaji' => 'nibai', 'meanings' => ['2x', 'double']],
            ['kana' => 'さんばい', 'romaji' => 'sanbai', 'meanings' => ['3x', 'triple']],
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
            ['kana' => 'いっちゃく', 'romaji' => 'icchaku', 'meanings' => ['1 outfit (着)']],
            ['kana' => 'にちゃく', 'romaji' => 'nichaku', 'meanings' => ['2 outfits']],
            ['kana' => 'さんちゃく', 'romaji' => 'sanchaku', 'meanings' => ['3 outfits']],
            ['kana' => 'よんちゃく', 'romaji' => 'yonchaku', 'meanings' => ['4 outfits']],
            ['kana' => 'ごちゃく', 'romaji' => 'gochaku', 'meanings' => ['5 outfits']],
            ['kana' => 'ろくちゃく', 'romaji' => 'rokuchaku', 'meanings' => ['6 outfits']],
            ['kana' => 'ななちゃく', 'romaji' => 'nanachaku', 'meanings' => ['7 outfits']],
            ['kana' => 'はっちゃく', 'romaji' => 'hacchaku', 'meanings' => ['8 outfits']],
            ['kana' => 'きゅうちゃく', 'romaji' => 'kyuuchaku', 'meanings' => ['9 outfits']],
            ['kana' => 'じゅっちゃく', 'romaji' => 'jucchaku', 'meanings' => ['10 outfits']],

            // 軒 (けん) - Houses/Buildings
            ['kana' => 'いっけん', 'romaji' => 'ikken', 'meanings' => ['1 house (軒)', '1 building']],
            ['kana' => 'にけん', 'romaji' => 'niken', 'meanings' => ['2 houses', '2 buildings']],
            ['kana' => 'さんけん', 'romaji' => 'sanken', 'meanings' => ['3 houses', '3 buildings']],
            ['kana' => 'よんけん', 'romaji' => 'yonken', 'meanings' => ['4 houses', '4 buildings']],
            ['kana' => 'ごけん', 'romaji' => 'goken', 'meanings' => ['5 houses', '5 buildings']],
            ['kana' => 'ろっけん', 'romaji' => 'rokken', 'meanings' => ['6 houses', '6 buildings']],
            ['kana' => 'ななけん', 'romaji' => 'nanaken', 'meanings' => ['7 houses', '7 buildings']],
            ['kana' => 'はっけん', 'romaji' => 'hakken', 'meanings' => ['8 houses', '8 buildings']],
            ['kana' => 'きゅうけん', 'romaji' => 'kyuuken', 'meanings' => ['9 houses', '9 buildings']],
            ['kana' => 'じゅっけん', 'romaji' => 'jukken', 'meanings' => ['10 houses', '10 buildings']],

            // 台 (だい) - Machines/Vehicles
            ['kana' => 'いちだい', 'romaji' => 'ichidai', 'meanings' => ['1 machine (台)', '1 vehicle']],
            ['kana' => 'にだい', 'romaji' => 'nidai', 'meanings' => ['2 machines', '2 vehicles']],
            ['kana' => 'さんだい', 'romaji' => 'sandai', 'meanings' => ['3 machines', '3 vehicles']],
            ['kana' => 'よんだい', 'romaji' => 'yondai', 'meanings' => ['4 machines', '4 vehicles']],
            ['kana' => 'ごだい', 'romaji' => 'godai', 'meanings' => ['5 machines', '5 vehicles']],
            ['kana' => 'ろくだい', 'romaji' => 'rokudai', 'meanings' => ['6 machines', '6 vehicles']],
            ['kana' => 'ななだい', 'romaji' => 'nanadai', 'meanings' => ['7 machines', '7 vehicles']],
            ['kana' => 'はちだい', 'romaji' => 'hachidai', 'meanings' => ['8 machines', '8 vehicles']],
            ['kana' => 'きゅうだい', 'romaji' => 'kyuudai', 'meanings' => ['9 machines', '9 vehicles']],
            ['kana' => 'じゅうだい', 'romaji' => 'juudai', 'meanings' => ['10 machines', '10 vehicles']],
            ['kana' => 'にじゅうだい', 'romaji' => 'nijuudai', 'meanings' => ['20 machines', '20 vehicles']],
            ['kana' => 'ごじゅうだい', 'romaji' => 'gojuudai', 'meanings' => ['50 machines', '50 vehicles']],
            ['kana' => 'ひゃくだい', 'romaji' => 'hyakudai', 'meanings' => ['100 machines', '100 vehicles']],

            // 冊 (さつ) - Books
            ['kana' => 'いっさつ', 'romaji' => 'issatsu', 'meanings' => ['1 book (冊)']],
            ['kana' => 'にさつ', 'romaji' => 'nisatsu', 'meanings' => ['2 books']],
            ['kana' => 'さんさつ', 'romaji' => 'sansatsu', 'meanings' => ['3 books']],
            ['kana' => 'よんさつ', 'romaji' => 'yonsatsu', 'meanings' => ['4 books']],
            ['kana' => 'ごさつ', 'romaji' => 'gosatsu', 'meanings' => ['5 books']],
            ['kana' => 'ろくさつ', 'romaji' => 'rokusatsu', 'meanings' => ['6 books']],
            ['kana' => 'ななさつ', 'romaji' => 'nanasatsu', 'meanings' => ['7 books']],
            ['kana' => 'はっさつ', 'romaji' => 'hassatsu', 'meanings' => ['8 books']],
            ['kana' => 'きゅうさつ', 'romaji' => 'kyuusatsu', 'meanings' => ['9 books']],
            ['kana' => 'じゅっさつ', 'romaji' => 'jussatsu', 'meanings' => ['10 books']],
            ['kana' => 'にじゅっさつ', 'romaji' => 'nijussatsu', 'meanings' => ['20 books']],
            ['kana' => 'ごじゅっさつ', 'romaji' => 'gojussatsu', 'meanings' => ['50 books']],
            ['kana' => 'ひゃくさつ', 'romaji' => 'hyakusatsu', 'meanings' => ['100 books']],

            // 名 (めい) - People (formal)
            ['kana' => 'いちめい', 'romaji' => 'ichimei', 'meanings' => ['1 person (formal) (名)']],
            ['kana' => 'にめい', 'romaji' => 'nimei', 'meanings' => ['2 people']],
            ['kana' => 'さんめい', 'romaji' => 'sanmei', 'meanings' => ['3 people']],
            ['kana' => 'よんめい', 'romaji' => 'yonmei', 'meanings' => ['4 people']],
            ['kana' => 'ごめい', 'romaji' => 'gomei', 'meanings' => ['5 people']],
            ['kana' => 'ろくめい', 'romaji' => 'rokumei', 'meanings' => ['6 people']],
            ['kana' => 'ななめい', 'romaji' => 'nanamei', 'meanings' => ['7 people']],
            ['kana' => 'はちめい', 'romaji' => 'hachimei', 'meanings' => ['8 people']],
            ['kana' => 'きゅうめい', 'romaji' => 'kyuumei', 'meanings' => ['9 people']],
            ['kana' => 'じゅうめい', 'romaji' => 'juumei', 'meanings' => ['10 people']],

            // 泊 (はく) - Overnight stays
            ['kana' => 'いっぱく', 'romaji' => 'ippaku', 'meanings' => ['1 overnight stay (泊)', '1 night']],
            ['kana' => 'にはく', 'romaji' => 'nihaku', 'meanings' => ['2 nights']],
            ['kana' => 'さんぱく', 'romaji' => 'sanpaku', 'meanings' => ['3 nights']],
            ['kana' => 'よんはく', 'romaji' => 'yonhaku', 'meanings' => ['4 nights']],
            ['kana' => 'ごはく', 'romaji' => 'gohaku', 'meanings' => ['5 nights']],
            ['kana' => 'ろっぱく', 'romaji' => 'roppaku', 'meanings' => ['6 nights']],
            ['kana' => 'ななはく', 'romaji' => 'nanahaku', 'meanings' => ['7 nights']],
            ['kana' => 'はっぱく', 'romaji' => 'happaku', 'meanings' => ['8 nights']],
            ['kana' => 'きゅうはく', 'romaji' => 'kyuuhaku', 'meanings' => ['9 nights']],
            ['kana' => 'じゅっぱく', 'romaji' => 'juppaku', 'meanings' => ['10 nights']],
            ['kana' => 'じゅうよんはく', 'romaji' => 'juuyonhaku', 'meanings' => ['14 nights']],
            ['kana' => 'さんじゅっぱく', 'romaji' => 'sanjuppaku', 'meanings' => ['30 nights']],
        ]);

        // VTuber
        // Basic Stream Vocabulary
        $this->seedCategory('basic-stream-vocabulary', 'Basic Stream Vocabulary', [
            ['kana' => 'こんにちは', 'romaji' => 'konnichiwa', 'meanings' => ['Hello']],
            ['kana' => 'こんばんは', 'romaji' => 'konbanwa', 'meanings' => ['Good evening']],
            ['kana' => 'おはようございます', 'romaji' => 'ohayou gozaimasu', 'meanings' => ['Good morning']],
            ['kana' => 'ようこそ', 'romaji' => 'youkoso', 'meanings' => ['Welcome']],
            ['kana' => 'みてくれてありがとう', 'romaji' => 'mite kurete arigatou', 'meanings' => ['Thanks for watching']],
            ['kana' => 'きいてくれてありがとう', 'romaji' => 'kiite kurete arigatou', 'meanings' => ['Thanks for listening']],
            ['kana' => 'コメントありがとう', 'romaji' => 'komento arigatou', 'meanings' => ['Thanks for the comment']],
            ['kana' => 'ナイス', 'romaji' => 'naisu', 'meanings' => ['Nice!']],
            ['kana' => 'ナイスパ', 'romaji' => 'naisu pa', 'meanings' => ['Nice superchat!']],
            ['kana' => 'ありがとうスパチャ', 'romaji' => 'arigatou supacha', 'meanings' => ['Thanks for the superchat']],
            ['kana' => 'チャンネルとうろくしてね', 'romaji' => 'chaneru touroku shite ne', 'meanings' => ['Please subscribe to the channel']],
            ['kana' => 'フォローしてね', 'romaji' => 'foroo shite ne', 'meanings' => ['Please follow me']],
            ['kana' => 'いいねしてね', 'romaji' => 'ii ne shite ne', 'meanings' => ['Please like (the video/stream)']],
            ['kana' => 'シェアしてね', 'romaji' => 'shea shite ne', 'meanings' => ['Please share']],
            ['kana' => 'もうすぐはじまるよ', 'romaji' => 'mou sugu hajimaru yo', 'meanings' => ['It’s starting soon']],
            ['kana' => 'じゅんびできた？', 'romaji' => 'junbi dekita?', 'meanings' => ['Are you ready?']],
            ['kana' => 'いくよ！', 'romaji' => 'iku yo!', 'meanings' => ['Let’s go!']],
            ['kana' => 'さいこう！', 'romaji' => 'saikou!', 'meanings' => ['Awesome!', 'The best!']],
            ['kana' => 'つぎいこう！', 'romaji' => 'tsugi ikou!', 'meanings' => ['Let’s move on to the next!']],
            ['kana' => 'またあとで！', 'romaji' => 'mata ato de!', 'meanings' => ['See you later!']],
        ]);

        // Useful Expressions
        $this->seedCategory('useful-expressions', 'Useful Expressions', [
            ['kana' => 'ちょっとまって', 'romaji' => 'chotto matte', 'meanings' => ['Wait a moment']],
            ['kana' => 'ごめんね', 'romaji' => 'gomen ne', 'meanings' => ['Sorry']],
            ['kana' => 'だいじょうぶ？', 'romaji' => 'daijoubu?', 'meanings' => ['Are you okay?']],
            ['kana' => 'だいじょうぶです', 'romaji' => 'daijoubu desu', 'meanings' => ['It’s okay']],
            ['kana' => 'どうしたの？', 'romaji' => 'doushita no?', 'meanings' => ['What’s wrong?']],
            ['kana' => 'まかせて！', 'romaji' => 'makasete!', 'meanings' => ['Leave it to me!']],
            ['kana' => 'まちがえた', 'romaji' => 'machigaeta', 'meanings' => ['I messed up']],
            ['kana' => 'まってました！', 'romaji' => 'matte mashita!', 'meanings' => ['I’ve been waiting!']],
            ['kana' => 'いってきます', 'romaji' => 'ittekimasu', 'meanings' => ['I’ll be back (leaving temporarily)']],
            ['kana' => 'ただいま', 'romaji' => 'tadaima', 'meanings' => ['I’m back']],
        ]);

        // Chat Lingo & Slang
        $this->seedCategory('chat-lingo-and-slang', 'Chat Lingo & Slang', [
            ['kana' => 'わこつ', 'romaji' => 'wakotsu', 'meanings' => ['Thanks for starting the stream']],
            ['kana' => 'おつ', 'romaji' => 'otsu', 'meanings' => ['Good job!', 'Bye (casual)']],
            ['kana' => 'おつかれ', 'romaji' => 'otsukare', 'meanings' => ['Thanks for the hard work']],
            ['kana' => 'は？', 'romaji' => 'ha?', 'meanings' => ['Huh?', 'What?']],
            ['kana' => '888', 'romaji' => 'pachi pachi pachi', 'meanings' => ['Clap clap clap']],
            ['kana' => 'わら', 'romaji' => 'wara', 'meanings' => ['lol']],
            ['kana' => 'くさ', 'romaji' => 'kusa', 'meanings' => ['lol (literally "grass", slang for laughing)']],
            ['kana' => 'りょ', 'romaji' => 'ryo', 'meanings' => ['Got it (short for ryoukai)']],
            ['kana' => 'おこ', 'romaji' => 'oko', 'meanings' => ['Angry (slang)']],
            ['kana' => 'ガチ', 'romaji' => 'gachi', 'meanings' => ['Seriously', 'For real']],
        ]);

        // Reactions & Emotions
        $this->seedCategory('reactions-and-emotions', 'Reactions & Emotions', [
            ['kana' => 'すごい！', 'romaji' => 'sugoi!', 'meanings' => ['Amazing!', 'Wow!']],
            ['kana' => 'やったー！', 'romaji' => 'yattaa!', 'meanings' => ['I did it!', 'Yay!']],
            ['kana' => 'うれしい', 'romaji' => 'ureshii', 'meanings' => ['I’m happy']],
            ['kana' => 'たのしい', 'romaji' => 'tanoshii', 'meanings' => ['Fun']],
            ['kana' => 'かなしい', 'romaji' => 'kanashii', 'meanings' => ['Sad']],
            ['kana' => 'こわい', 'romaji' => 'kowai', 'meanings' => ['Scary']],
            ['kana' => 'びっくりした！', 'romaji' => 'bikkuri shita!', 'meanings' => ['That surprised me!']],
            ['kana' => 'むずかしい', 'romaji' => 'muzukashii', 'meanings' => ['Difficult']],
            ['kana' => 'ねむい', 'romaji' => 'nemui', 'meanings' => ['Sleepy']],
            ['kana' => 'つかれた', 'romaji' => 'tsukareta', 'meanings' => ['Tired']],
        ]);

        // Game-related Phrases
        $this->seedCategory('game-related-phrases', 'Game-related Phrases', [
            ['kana' => 'ゲームをはじめよう', 'romaji' => 'geemu o hajimeyou', 'meanings' => ['Let’s start the game']],
            ['kana' => 'スタート！', 'romaji' => 'sutaato!', 'meanings' => ['Start!']],
            ['kana' => 'クリアした！', 'romaji' => 'kuria shita!', 'meanings' => ['Cleared it!']],
            ['kana' => 'まけた～', 'romaji' => 'maketa~', 'meanings' => ['I lost~']],
            ['kana' => 'かんたん！', 'romaji' => 'kantan!', 'meanings' => ['Easy!']],
            ['kana' => 'むずかしすぎる！', 'romaji' => 'muzukashi sugiru!', 'meanings' => ['Too hard!']],
            ['kana' => 'バグった', 'romaji' => 'bagutta', 'meanings' => ['It bugged out']],
            ['kana' => 'ちょっとラグい', 'romaji' => 'chotto ragui', 'meanings' => ['It’s a bit laggy']],
            ['kana' => 'つよい！', 'romaji' => 'tsuyoi!', 'meanings' => ['Strong!']],
            ['kana' => 'ナイス！', 'romaji' => 'naisu!', 'meanings' => ['Nice!']],
        ]);

        // Technical Issues & Stream Setup
        $this->seedCategory('technical-issues-and-stream-setup', 'Technical Issues & Stream Setup', [
            ['kana' => 'マイクテスト', 'romaji' => 'maiku tesuto', 'meanings' => ['Mic test']],
            ['kana' => 'きこえますか？', 'romaji' => 'kikoemasu ka?', 'meanings' => ['Can you hear me?']],
            ['kana' => 'おとがきれい', 'romaji' => 'oto ga kirei', 'meanings' => ['The sound is clear']],
            ['kana' => 'ラグがあります', 'romaji' => 'ragu ga arimasu', 'meanings' => ['There’s lag']],
            ['kana' => 'こしょうしたみたい', 'romaji' => 'koshou shita mitai', 'meanings' => ['Seems broken']],
            ['kana' => 'パソコンがおかしい', 'romaji' => 'pasokon ga okashii', 'meanings' => ['My computer is acting weird']],
            ['kana' => 'もういちどためします', 'romaji' => 'mou ichido tameshimasu', 'meanings' => ['I’ll try again']],
            ['kana' => 'さいせっていちゅう', 'romaji' => 'saise tteichuu', 'meanings' => ['Reconfiguring']],
            ['kana' => 'こえがきれちゃった', 'romaji' => 'koe ga kirechatta', 'meanings' => ['The audio cut out']],
            ['kana' => 'すこしおまちください', 'romaji' => 'sukoshi omachi kudasai', 'meanings' => ['Please wait a moment']],
        ]);

        // Fan Engagement
        $this->seedCategory('fan-engagement', 'Fan Engagement', [
            ['kana' => 'コメントありがとう！', 'romaji' => 'komento arigatou!', 'meanings' => ['Thanks for the comment!']],
            ['kana' => 'スパチャありがとう！', 'romaji' => 'supacha arigatou!', 'meanings' => ['Thanks for the super chat!']],
            ['kana' => 'しつもんがあればきいてね', 'romaji' => 'shitsumon ga areba kiite ne', 'meanings' => ['Ask if you have any questions']],
            ['kana' => 'たのしんでる？', 'romaji' => 'tanoshinderu?', 'meanings' => ['Are you having fun?']],
            ['kana' => 'いつもおうえんありがとう', 'romaji' => 'itsumo ouen arigatou', 'meanings' => ['Thanks for always supporting me']],
            ['kana' => 'はじめてのひともいらっしゃい！', 'romaji' => 'hajimete no hito mo irasshai!', 'meanings' => ['Welcome, first-timers!']],
            ['kana' => 'フォローしてね', 'romaji' => 'foroo shite ne', 'meanings' => ['Please follow me']],
            ['kana' => 'チャンネルとうろくしてね', 'romaji' => 'channeru touroku shite ne', 'meanings' => ['Please subscribe to the channel']],
            ['kana' => 'きょうもきてくれてありがとう', 'romaji' => 'kyou mo kite kurete arigatou', 'meanings' => ['Thanks for coming today too']],
            ['kana' => 'またあそびにきてね！', 'romaji' => 'mata asobi ni kite ne!', 'meanings' => ['Come hang out again!']],
        ]);

        // End-of-Stream Phrases
        $this->seedCategory('end-of-stream-phrases', 'End-of-Stream Phrases', [
            ['kana' => 'きょうはここまで！', 'romaji' => 'kyou wa koko made!', 'meanings' => ['That’s all for today!']],
            ['kana' => 'おつかれさまでした！', 'romaji' => 'otsukaresama deshita!', 'meanings' => ['Great work everyone!']],
            ['kana' => 'またね！', 'romaji' => 'mata ne!', 'meanings' => ['See you!']],
            ['kana' => 'じゃあね～', 'romaji' => 'jaa ne~', 'meanings' => ['Bye~']],
            ['kana' => 'ばいばい～', 'romaji' => 'baibai~', 'meanings' => ['Bye bye~']],
            ['kana' => 'つぎのはいしんもたのしみにしてね！', 'romaji' => 'tsugi no haishin mo tanoshimi ni shite ne!', 'meanings' => ['Look forward to the next stream!']],
            ['kana' => 'よるおそいのでゆっくりやすんでね', 'romaji' => 'yoru osoi node yukkuri yasunde ne', 'meanings' => ['It’s late, so rest well']],
            ['kana' => 'きょうもありがとう！', 'romaji' => 'kyou mo arigatou!', 'meanings' => ['Thanks again for today!']],
            ['kana' => 'おつVTuber！', 'romaji' => 'otsu VTuber!', 'meanings' => ['VTuber-style sign-off']],
            ['kana' => 'さいごまでみてくれてありがとう！', 'romaji' => 'saigo made mite kurete arigatou!', 'meanings' => ['Thanks for watching till the end!']],
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
