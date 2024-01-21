<?php

declare(strict_types=1);

use WTFramework\Types\Str;

use function WTFramework\Types\str;

it('can invoke', function ()
{

  $str = new Str('test');

  expect($str())
  ->toBe('test');

});

it('can return', function ()
{

  $str = new Str('test');

  expect($str->return())
  ->toBe('test');

});

it('can use static new', function ()
{

  $str = Str::new('test');

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($str())
  ->toBe('test');

});

it('can use function', function ()
{

  $str = str('test');

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($str())
  ->toBe('test');

});

it('can cast to string', function ()
{

  $str = str('test');

  expect((string) $str)
  ->toBe('test');

});

it('can addcslashes', function ()
{

  $str = str('test')->addcslashes('a..z');

  expect($str())
  ->toBe(addcslashes('test', 'a..z'));

});

it('can addslashes', function ()
{

  $str = str("test'")->addslashes();

  expect($str())
  ->toBe(addslashes("test'"));

});

it('can base64decode', function ()
{

  $str = str('test')->base64decode();

  expect($str())
  ->toBe(base64_decode('test'));

});

it('can base64encode', function ()
{

  $str = str('test')->base64encode();

  expect($str())
  ->toBe(base64_encode('test'));

});

it('can baseconvert', function ()
{

  $str = str('00FF')->baseconvert(16, 10);

  expect($str())
  ->toBe(base_convert('00FF', 16, 10));

});

it('can bin2hex', function ()
{

  $str = str('test')->bin2hex();

  expect($str())
  ->toBe(bin2hex('test'));

});

it('can casecmp', function ()
{

  expect(str('test')->casecmp('testing'))
  ->toBe($result = strcasecmp('test', 'testing'));

  $str = str('test')->casecmp('testing', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can chunksplit', function ()
{

  $str = str('test')->chunksplit();

  expect($str())
  ->toBe(chunk_split('test'));

});

it('can cmp', function ()
{

  expect(str('test')->cmp('testing'))
  ->toBe($result = strcmp('test', 'testing'));

  $str = str('test')->cmp('testing', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can coll', function ()
{

  expect(str('test')->coll('testing'))
  ->toBe($result = strcoll('test', 'testing'));

  $str = str('test')->coll('testing', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can convertuudecode', function ()
{

  $test = convert_uuencode('test');

  $str = str($test)->convertuudecode();

  expect($str())
  ->toBe(convert_uudecode($test));

});

it('can convertuuencode', function ()
{

  $str = str('test')->convertuuencode();

  expect($str())
  ->toBe(convert_uuencode('test'));

});

it('can contains', function ()
{

  expect(str('test')->contains('e'))
  ->toBe($result = str_contains('test', 'e'));

  $str = str('test')->contains('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can cspn', function ()
{

  expect(str('test')->cspn('testing'))
  ->toBe($result = strcspn('test', 'testing'));

  $str = str('test')->cspn('testing', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can countchars', function ()
{

  $str = str('test')->countchars();

  expect($str())
  ->toBe(count_chars('test'));

});

it('can crc32', function ()
{

  expect(str('test')->crc32())
  ->toBe($result = crc32('test'));

  $str = str('test')->crc32(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can crypt', function ()
{

  $str = str('test')->crypt('testing');

  expect($str())
  ->toBe(crypt('test', 'testing'));

});

it('can endswith', function ()
{

  expect(str('test')->endswith('t'))
  ->toBe($result = str_ends_with('test', 't'));

  $str = str('test')->endswith('t', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can getcsv', function ()
{

  $str = str('test')->getcsv();

  expect($str())
  ->toBe(str_getcsv('test'));

});

it('can hebrev', function ()
{

  $str = str('test')->hebrev();

  expect($str())
  ->toBe(hebrev('test'));

});

it('can hex2bin', function ()
{

  $str = str('00FF')->hex2bin();

  expect($str())
  ->toBe(hex2bin('00FF'));

});

it('can hexdec', function ()
{

  $str = str('00FF')->hexdec();

  expect($str)
  ->toBe(hexdec('00FF'));

});

it('can httpbuildquery', function ()
{

  $str = Str::httpbuildquery(['test']);

  expect($str())
  ->toBe(http_build_query(['test']));

});

it('can htmlentities', function ()
{

  $str = str('test')->htmlentities();

  expect($str())
  ->toBe(htmlentities('test'));

});

it('can htmlentitydecode', function ()
{

  $str = str('test')->htmlentitydecode();

  expect($str())
  ->toBe(html_entity_decode('test'));

});

it('can htmlspecialchars', function ()
{

  $str = str('test')->htmlspecialchars();

  expect($str())
  ->toBe(htmlspecialchars('test'));

});

it('can htmlspecialcharsdecode', function ()
{

  $str = str('test')->htmlspecialcharsdecode();

  expect($str())
  ->toBe(htmlspecialchars_decode('test'));

});

it('can ipos', function ()
{

  expect(str('test')->ipos('t'))
  ->toBe($result = stripos('test', 't'));

  $str = str('test')->ipos('t', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can ireplace', function ()
{

  $str = str('test')->ireplace('e', 's');

  expect($str())
  ->toBe(str_ireplace('e', 's', 'test'));

});

it('can istr', function ()
{

  $str = str('test')->istr('e');

  expect($str())
  ->toBe(stristr('test', 'e'));

});

it('can jsondecode', function ()
{

  expect(str('{}')->jsondecode())
  ->toEqual($result = json_decode('{}'));

  $str = str('{}')->jsondecode(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toEqual($result);

});

it('can lcfirst', function ()
{

  $str = str('test')->lcfirst();

  expect($str())
  ->toBe(lcfirst('test'));

});

it('can len', function ()
{

  expect(str('test')->len())
  ->toBe($result = strlen('test'));

  $str = str('test')->len(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can levenshtein', function ()
{

  expect(str('test')->levenshtein('testing'))
  ->toBe($result = levenshtein('test', 'testing'));

  $str = str('test')->levenshtein('testing', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can ltrim', function ()
{

  $str = str('test')->ltrim();

  expect($str())
  ->toBe(ltrim('test'));

});

it('can mbcheckencoding', function ()
{

  expect(str('test')->mbcheckencoding())
  ->toBe($result = mb_check_encoding('test'));

  $str = str('test')->mbcheckencoding(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbconvertcase', function ()
{

  $str = str('test')->mbconvertcase(MB_CASE_UPPER);

  expect($str())
  ->toBe(mb_convert_case('test', MB_CASE_UPPER));

});

it('can mbconvertencoding', function ()
{

  $str = str('test')->mbconvertencoding('utf-8', 'utf-7');

  expect($str())
  ->toBe(mb_convert_encoding('test', 'utf-8', 'utf-7'));

});

it('can mbconvertkana', function ()
{

  $str = str('test')->mbconvertkana();

  expect($str())
  ->toBe(mb_convert_kana('test'));

});

it('can mbcut', function ()
{

  $str = str('test')->mbcut(1);

  expect($str())
  ->toBe(mb_strcut('test', 1));

});

it('can mbdecodemimeheader', function ()
{

  $str = str('test')->mbdecodemimeheader();

  expect($str())
  ->toBe(mb_decode_mimeheader('test'));

});

it('can mbdecodenumericentity', function ()
{

  $str = str('test')->mbdecodenumericentity([1, 1, 1, 1]);

  expect($str())
  ->toBe(mb_decode_numericentity('test', [1, 1, 1, 1]));

});

it('can mbdetectencoding', function ()
{

  expect(str('test')->mbdetectencoding())
  ->toBe($result = mb_detect_encoding('test'));

  $str = str('test')->mbdetectencoding(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbencodemimeheader', function ()
{

  $str = str('test')->mbencodemimeheader();

  expect($str())
  ->toBe(mb_encode_mimeheader('test'));

});

it('can mbencodenumericentity', function ()
{

  $str = str('test')->mbencodenumericentity([1, 1, 1, 1]);

  expect($str())
  ->toBe(mb_encode_numericentity('test', [1, 1, 1, 1]));

});

it('can mbereg', function ()
{

  expect(str('test')->mbereg('/test/'))
  ->toBe($result = mb_ereg('/test/', 'test'));

  $str = str('test')->mbereg('/test/', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);


});

it('can mberegi', function ()
{

  expect(str('test')->mberegi('/test/'))
  ->toBe($result = mb_eregi('/test/', 'test'));

  $str = str('test')->mberegi('/test/', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mberegireplace', function ()
{

  $str = str('test')->mberegireplace('/e/', 's');

  expect($str())
  ->toBe(mb_eregi_replace('/test/', 's', 'test'));

});

it('can mberegmatch', function ()
{

  expect(str('test')->mberegmatch('/test/'))
  ->toBe($result = mb_ereg_match('/test/', 'test'));

  $str = str('test')->mberegmatch('/test/', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mberegreplace', function ()
{

  $str = str('test')->mberegreplace('/e/', 's');

  expect($str())
  ->toBe(mb_ereg_replace('/e/', 's', 'test'));

});

it('can mberegreplacecallback', function ()
{

  $str = str('test')->mberegreplacecallback('/e/', fn () => 's');

  expect($str())
  ->toBe(mb_ereg_replace_callback('/e/', fn () => 's', 'test'));

});

it('can mbparse', function ()
{

  $str = str('test')->mbparse($test1);

  mb_parse_str('test', $test2);

  expect($test1)
  ->toBe($test2);

});

it('can mbipos', function ()
{

  expect(str('test')->mbipos('e'))
  ->toBe($result = mb_stripos('test', 'e'));

  $str = str('test')->mbipos('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbistr', function ()
{

  $str = str('test')->mbistr('e');

  expect($str())
  ->toBe(mb_stristr('test', 'e'));

});

it('can mblen', function ()
{

  expect(str('test')->mblen())
  ->toBe($result = mb_strlen('test'));

  $str = str('test')->mblen(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbpos', function ()
{

  expect(str('test')->mbpos('e'))
  ->toBe($result = mb_strpos('test', 'e'));

  $str = str('test')->mbpos('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbrchr', function ()
{

  $str = str('test')->mbrchr('e');

  expect($str())
  ->toBe(mb_strrchr('test', 'e'));

});

it('can mbrichr', function ()
{

  $str = str('test')->mbrichr('e');

  expect($str())
  ->toBe(mb_strrichr('test', 'e'));

});

it('can mbripos', function ()
{

  expect(str('test')->mbripos('e'))
  ->toBe($result = mb_strripos('test', 'e'));

  $str = str('test')->mbripos('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbrpos', function ()
{

  expect(str('test')->mbrpos('e'))
  ->toBe($result = mb_strrpos('test', 'e'));

  $str = str('test')->mbrpos('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbscrub', function ()
{

  $str = str('test')->mbscrub();

  expect($str())
  ->toBe(mb_scrub('test'));

});

it('can mbsplit', function ()
{

  $str = str('test')->mbsplit('/e/');

  expect($str())
  ->toBe(mb_split('/e/', 'test'));

});

it('can mbstr', function ()
{

  $str = str('test')->mbstr('e');

  expect($str())
  ->toBe(mb_strstr('test', 'e'));

});

it('can mbstrimwidth', function ()
{

  $str = str('test')->mbstrimwidth(1, 1);

  expect($str())
  ->toBe(mb_strimwidth('test', 1, 1));

});

it('can mbstrsplit', function ()
{

  $str = str('test')->mbstrsplit();

  expect($str())
  ->toBe(mb_str_split('test'));

});

it('can mbsubstr', function ()
{

  $str = str('test')->mbsubstr(1);

  expect($str())
  ->toBe(mb_substr('test', 1));

});

it('can mbsubstrcount', function ()
{

  expect(str('test')->mbsubstrcount('e'))
  ->toBe($result = mb_substr_count('test', 'e'));

  $str = str('test')->mbsubstrcount('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can mbtolower', function ()
{

  $str = str('test')->mbtolower();

  expect($str())
  ->toBe(mb_strtolower('test'));

});

it('can mbtoupper', function ()
{

  $str = str('test')->mbtoupper();

  expect($str())
  ->toBe(mb_strtoupper('test'));

});

it('can mbwidth', function ()
{

  expect(str('test')->mbwidth())
  ->toBe($result = mb_strwidth('test'));

  $str = str('test')->mbwidth(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can md5', function ()
{

  $str = str('test')->md5();

  expect($str())
  ->toBe(md5('test'));

});

it('can metaphone', function ()
{

  $str = str('test')->metaphone();

  expect($str())
  ->toBe(metaphone('test'));

});

it('can natcmp', function ()
{

  expect(str('test')->natcmp('e'))
  ->toBe($result = strnatcmp('test', 'e'));

  $str = str('test')->natcmp('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can natcasecmp', function ()
{

  expect(str('test')->natcasecmp('e'))
  ->toBe($result = strnatcasecmp('test', 'e'));

  $str = str('test')->natcasecmp('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can ncasecmp', function ()
{

  expect(str('test')->ncasecmp('e', 2))
  ->toBe($result = strncasecmp('test', 'e', 2));

  $str = str('test')->ncasecmp('e', 2, return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can ncmp', function ()
{

  expect(str('test')->ncmp('e', 2))
  ->toBe($result = strncmp('test', 'e', 2));

  $str = str('test')->ncmp('e', 2, return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can nl2br', function ()
{

  $str = str('test')->nl2br();

  expect($str())
  ->toBe(nl2br('test'));

});

it('can pad', function ()
{

  $str = str('test')->pad(5);

  expect($str())
  ->toBe(str_pad('test', 5));

});

it('can parse', function ()
{

  $str = str('test')->parse($test1);

  parse_str('test', $test2);

  expect($test1)
  ->toBe($test2);

});

it('can parseurl', function ()
{

  $str = str('test')->parseurl();

  expect($str())
  ->toBe(parse_url('test'));

});

it('can pbrk', function ()
{

  $str = str('test')->pbrk('e');

  expect($str())
  ->toBe(strpbrk('test', 'e'));

});

it('can pos', function ()
{

  expect(str('test')->pos('e'))
  ->toBe($result = strpos('test', 'e'));

  $str = str('test')->pos('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can pregfilter', function ()
{

  $str = str('test')->pregfilter('/e/', 's');

  expect($str())
  ->toBe(preg_filter('/e/', 's', 'test'));

});

it('can pregmatch', function ()
{

  expect(str('test')->pregmatch('/e/'))
  ->toBe($result = preg_match('/e/', 'test'));

  $str = str('test')->pregmatch('/e/', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can pregmatchall', function ()
{

  expect(str('test')->pregmatchall('/e/'))
  ->toBe($result = preg_match_all('/e/', 'test'));

  $str = str('test')->pregmatchall('/e/', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can pregquote', function ()
{

  $str = str('test')->pregquote();

  expect($str())
  ->toBe(preg_quote('test'));

});

it('can pregreplace', function ()
{

  $str = str('test')->pregreplace('/e/', 's');

  expect($str())
  ->toBe(preg_replace('/e/', 's', 'test'));

});

it('can pregreplacecallback', function ()
{

  $str = str('test')->pregreplacecallback('/e/', fn () => 's');

  expect($str())
  ->toBe(preg_replace_callback('/e/', fn () => 's', 'test'));

});

it('can pregreplcatecallbackarray', function ()
{

  $str = str('test')->pregreplcatecallbackarray(['/e/' => fn () => 's']);

  expect($str())
  ->toBe(preg_replace_callback_array(['/e/' => fn () => 's'], 'test'));

});

it('can pregsplit', function ()
{

  $str = str('test')->pregsplit('/e/');

  expect($str())
  ->toBe(preg_split('/e/', 'test'));

});

it('can quotedprintabledecode', function ()
{

  $str = str('test')->quotedprintabledecode();

  expect($str())
  ->toBe(quoted_printable_decode('test'));

});

it('can quotedprintableencode', function ()
{

  $str = str('test')->quotedprintableencode();

  expect($str())
  ->toBe(quoted_printable_encode('test'));

});

it('can quotemeta', function ()
{

  $str = str('test')->quotemeta();

  expect($str())
  ->toBe(quotemeta('test'));

});

it('can rawurldecode', function ()
{

  $str = str('test')->rawurldecode();

  expect($str())
  ->toBe(rawurldecode('test'));

});

it('can rawurlencode', function ()
{

  $str = str('test')->rawurlencode();

  expect($str())
  ->toBe(rawurlencode('test'));

});

it('can rchr', function ()
{

  $str = str('test')->rchr('e');

  expect($str())
  ->toBe(strrchr('test', 'e'));

});

it('can repeat', function ()
{

  $str = str('test')->repeat(2);

  expect($str())
  ->toBe(str_repeat('test', 2));

});

it('can replace', function ()
{

  $str = str('test')->replace('/e/', 's');

  expect($str())
  ->toBe(str_replace('/e/', 's', 'test'));

});

it('can rev', function ()
{

  $str = str('test')->rev();

  expect($str())
  ->toBe(strrev('test'));

});

it('can ripos', function ()
{

  expect(str('test')->ripos('e'))
  ->toBe($result = strripos('test', 'e'));

  $str = str('test')->ripos('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can rot13', function ()
{

  $str = str('test')->rot13();

  expect($str())
  ->toBe(str_rot13('test'));

});

it('can rpos', function ()
{

  expect(str('test')->rpos('e'))
  ->toBe($result = strrpos('test', 'e'));

  $str = str('test')->rpos('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can rtrim', function ()
{

  $str = str('test')->rtrim();

  expect($str())
  ->toBe(rtrim('test'));

});

it('can serialize', function ()
{

  expect(str('test')->serialize())
  ->toBe($result = serialize('test'));

  $str = str('test')->serialize(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can sha1', function ()
{

  $str = str('test')->sha1();

  expect($str())
  ->toBe(sha1('test'));

});

it('can shuffle', function ()
{

  $str = str('test')->shuffle();

  $arr1 = str_split($str());

  sort($arr1);

  $arr2 = str_split(str_shuffle('test'));

  sort($arr2);

  expect($arr1)
  ->toBe($arr2);

});

it('can similartext', function ()
{

  expect(str('test')->similartext('testing'))
  ->toBe($result = similar_text('test', 'testing'));

  $str = str('test')->similartext('testing', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can soundex', function ()
{

  $str = str('test')->soundex();

  expect($str())
  ->toBe(soundex('test'));

});

it('can split', function ()
{

  $str = str('test')->split();

  expect($str())
  ->toBe(str_split('test'));

});

it('can spn', function ()
{

  expect(str('test')->spn('e'))
  ->toBe($result = strspn('test', 'e'));

  $str = str('test')->spn('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can sprintf', function ()
{

  $str = str('test')->sprintf();

  expect($str())
  ->toBe(sprintf('test'));

});

it('can sscanf', function ()
{

  $str = str('test')->sscanf('%s');

  expect($str())
  ->toBe(sscanf('test', '%s'));

});

it('can startswith', function ()
{

  expect(str('test')->startswith('e'))
  ->toBe($result = str_starts_with('test', 's'));

  $str = str('test')->startswith('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can str', function ()
{

  $str = str('test')->str('e');

  expect($str())
  ->toBe(strstr('test', 'e'));

});

it('can stripcslashes', function ()
{

  $str = str('test')->stripcslashes();

  expect($str())
  ->toBe(stripcslashes('test'));

});

it('can stripslashes', function ()
{

  $str = str('test')->stripslashes();

  expect($str())
  ->toBe(stripslashes('test'));

});

it('can striptags', function ()
{

  $str = str('test')->striptags();

  expect($str())
  ->toBe(strip_tags('test'));

});

it('can substr', function ()
{

  $str = str('test')->substr(1);

  expect($str())
  ->toBe(substr('test', 1));

});

it('can substrcompare', function ()
{

  expect(str('test')->substrcompare('e', 1))
  ->toBe($result = substr_compare('test', 'e', 1));

  $str = str('test')->substrcompare('e', 1, return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

it('can substrcount', function ()
{

  expect(str('test')->substrcount('e'))
  ->toBe($count = substr_count('test', 'e'));

  $str = str('test')->substrcount('e', return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($count);

});

it('can substrreplace', function ()
{

  $str = str('test')->substrreplace('e', 1);

  expect($str())
  ->toBe(substr_replace('test', 'e', 1));

});

it('can tok', function ()
{

  $str = str('test')->tok('e');

  expect($str())
  ->toBe(strtok('test', 'e'));

});

it('can tolower', function ()
{

  $str = str('test')->tolower();

  expect($str())
  ->toBe(strtolower('test'));

});

it('can toupper', function ()
{

  $str = str('test')->toupper();

  expect($str())
  ->toBe(strtoupper('test'));

});

it('can tr', function ()
{

  $str = str('test')->tr('e', 's');

  expect($str())
  ->toBe(strtr('test', 'e', 's'));

});

it('can trim', function ()
{

  $str = str('test')->trim();

  expect($str())
  ->toBe(trim('test'));

});

it('can ucfirst', function ()
{

  $str = str('test')->ucfirst();

  expect($str())
  ->toBe(ucfirst('test'));

});

it('can ucwords', function ()
{

  $str = str('test')->ucwords();

  expect($str())
  ->toBe(ucwords('test'));

});

it('can unserialize', function ()
{

  $test = serialize('test');

  $str = Str::unserialize($test);

  expect($str())
  ->toBe(unserialize($test));

});

it('can urldecode', function ()
{

  $str = str('test')->urldecode();

  expect($str())
  ->toBe(urldecode('test'));

});

it('can urlencode', function ()
{

  $str = str('test')->urlencode();

  expect($str())
  ->toBe(urlencode('test'));

});

it('can vsprintf', function ()
{

  $str = str('%s')->vsprintf(['test']);

  expect($str())
  ->toBe(vsprintf('%s', ['test']));

});

it('can wordcount', function ()
{

  expect(str('test')->wordcount())
  ->toBe($count = str_word_count('test'));

  $str = str('test')->wordcount(return: $return);

  expect($str)
  ->toBeInstanceof(Str::class);

  expect($return)
  ->toBe($count);

});

it('can wordwrap', function ()
{

  $str = str('test')->wordwrap();

  expect($str())
  ->toBe(wordwrap('test'));

});

it('can echo', function ()
{

  $this->expectOutputString('test');

  $num = str('test')->echo();

  expect($num)
  ->toBeInstanceOf(Str::class);

});

it('can echo with prefix', function ()
{

  $this->expectOutputString('test1test');

  str('test')->echo(prefix: 'test1');

});

it('can echo with suffix', function ()
{

  $this->expectOutputString('testtest2');

  str('test')->echo(suffix: 'test2');

});

it('can echo with prefix and suffix', function ()
{

  $this->expectOutputString('test1testtest2');

  str('test')->echo(
    prefix: 'test1',
    suffix: 'test2'
  );

});

it('can extract', function ()
{

  $str1 = str('test')
  ->extract($str2)
  ->rev();

  expect($str1())
  ->toBe('tset');

  expect($str2)
  ->toBeInstanceOf(Str::class);

  expect($str2())
  ->toBe('test');

});

it('can use properties as methods', function ()
{

  $str = str('test')->rev;

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($str->len)
  ->toBe(4);

});