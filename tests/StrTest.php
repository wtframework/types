<?php

declare(strict_types=1);

use WTFramework\Types\Arr;
use WTFramework\Types\Str;

use function WTFramework\Types\str;

it("can invoke", function ()
{

  $str = new Str("test");

  expect($str())
  ->toBe("test");

});

it("can return", function ()
{

  $str = new Str("test");

  expect($str->return())
  ->toBe("test");

});

it("can use static new", function ()
{

  $str = Str::new("test");

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($str())
  ->toBe("test");

});

it("can use function", function ()
{

  $str = str("test");

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($str())
  ->toBe("test");

});

it("can cast to string", function ()
{

  $str = str("test");

  expect((string) $str)
  ->toBe("test");

});

test("addcslashes", function ()
{

  $str = str("test")->addcslashes("a..z");

  expect($str())
  ->toBe(addcslashes("test", "a..z"));

});

test("addslashes", function ()
{

  $str = str("test'")->addslashes();

  expect($str())
  ->toBe(addslashes("test'"));

});

test("base64decode", function ()
{

  $str = str("test")->base64decode();

  expect($str())
  ->toBe(base64_decode("test"));

});

test("base64encode", function ()
{

  $str = str("test")->base64encode();

  expect($str())
  ->toBe(base64_encode("test"));

});

test("baseconvert", function ()
{

  $str = str("00FF")->baseconvert(16, 10);

  expect($str())
  ->toBe(base_convert("00FF", 16, 10));

});

test("bin2hex", function ()
{

  $str = str("test")->bin2hex();

  expect($str())
  ->toBe(bin2hex("test"));

});

test("casecmp", function ()
{

  expect(str("test")->casecmp("testing"))
  ->toBe($result = strcasecmp("test", "testing"));

  $str = str("test")->casecmp("testing", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("chunksplit", function ()
{

  $str = str("test")->chunksplit();

  expect($str())
  ->toBe(chunk_split("test"));

});

test("cmp", function ()
{

  expect(str("test")->cmp("testing"))
  ->toBe($result = strcmp("test", "testing"));

  $str = str("test")->cmp("testing", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("coll", function ()
{

  expect(str("test")->coll("testing"))
  ->toBe($result = strcoll("test", "testing"));

  $str = str("test")->coll("testing", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("convertuudecode", function ()
{

  $test = convert_uuencode("test");

  $str = str($test)->convertuudecode();

  expect($str())
  ->toBe(convert_uudecode($test));

});

test("convertuuencode", function ()
{

  $str = str("test")->convertuuencode();

  expect($str())
  ->toBe(convert_uuencode("test"));

});

test("contains", function ()
{

  expect(str("test")->contains("e"))
  ->toBe($result = str_contains("test", "e"));

  $str = str("test")->contains("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("cspn", function ()
{

  expect(str("test")->cspn("testing"))
  ->toBe($result = strcspn("test", "testing"));

  $str = str("test")->cspn("testing", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("countchars", function ()
{

  $arr = str("test")->countchars();

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr())
  ->toBe(count_chars("test"));

  $str = str("test")->countchars(3);

  expect($str())
  ->toBe(count_chars("test", 3));

});

test("crc32", function ()
{

  expect(str("test")->crc32())
  ->toBe($result = crc32("test"));

  $str = str("test")->crc32(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("crypt", function ()
{

  $str = str("test")->crypt("testing");

  expect($str())
  ->toBe(crypt("test", "testing"));

});

test("endswith", function ()
{

  expect(str("test")->endswith("t"))
  ->toBe($result = str_ends_with("test", "t"));

  $str = str("test")->endswith("t", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("getcsv", function ()
{

  $str = str("test")->getcsv();

  expect($str())
  ->toBe(str_getcsv("test"));

});

test("hebrev", function ()
{

  $str = str("test")->hebrev();

  expect($str())
  ->toBe(hebrev("test"));

});

test("hex2bin", function ()
{

  $str = str("00FF")->hex2bin();

  expect($str())
  ->toBe(hex2bin("00FF"));

});

test("hexdec", function ()
{

  $str = str("00FF")->hexdec();

  expect($str)
  ->toBe(hexdec("00FF"));

});

test("httpbuildquery", function ()
{

  $str = Str::httpbuildquery(["test"]);

  expect($str())
  ->toBe(http_build_query(["test"]));

});

test("htmlentities", function ()
{

  $str = str("test")->htmlentities();

  expect($str())
  ->toBe(htmlentities("test"));

});

test("htmlentitydecode", function ()
{

  $str = str("test")->htmlentitydecode();

  expect($str())
  ->toBe(html_entity_decode("test"));

});

test("htmlspecialchars", function ()
{

  $str = str("test")->htmlspecialchars();

  expect($str())
  ->toBe(htmlspecialchars("test"));

});

test("htmlspecialcharsdecode", function ()
{

  $str = str("test")->htmlspecialcharsdecode();

  expect($str())
  ->toBe(htmlspecialchars_decode("test"));

});

test("ipos", function ()
{

  expect(str("test")->ipos("t"))
  ->toBe($result = stripos("test", "t"));

  $str = str("test")->ipos("t", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("ireplace", function ()
{

  $str = str("test")->ireplace("e", "s");

  expect($str())
  ->toBe(str_ireplace("e", "s", "test"));

});

test("istr", function ()
{

  $str = str("test")->istr("e");

  expect($str())
  ->toBe(stristr("test", "e"));

});

test("jsondecode", function ()
{

  expect(str("{}")->jsondecode())
  ->toEqual($result = json_decode("{}"));

  $str = str("{}")->jsondecode(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toEqual($result);

});

test("lcfirst", function ()
{

  $str = str("test")->lcfirst();

  expect($str())
  ->toBe(lcfirst("test"));

});

test("len", function ()
{

  expect(str("test")->len())
  ->toBe($result = strlen("test"));

  $str = str("test")->len(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("levenshtein", function ()
{

  expect(str("test")->levenshtein("testing"))
  ->toBe($result = levenshtein("test", "testing"));

  $str = str("test")->levenshtein("testing", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("ltrim", function ()
{

  $str = str("test")->ltrim();

  expect($str())
  ->toBe(ltrim("test"));

});

test("mbcheckencoding", function ()
{

  expect(str("test")->mbcheckencoding())
  ->toBe($result = mb_check_encoding("test"));

  $str = str("test")->mbcheckencoding(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbconvertcase", function ()
{

  $str = str("test")->mbconvertcase(MB_CASE_UPPER);

  expect($str())
  ->toBe(mb_convert_case("test", MB_CASE_UPPER));

});

test("mbconvertencoding", function ()
{

  $str = str("test")->mbconvertencoding("utf-8", "utf-7");

  expect($str())
  ->toBe(mb_convert_encoding("test", "utf-8", "utf-7"));

});

test("mbconvertkana", function ()
{

  $str = str("test")->mbconvertkana();

  expect($str())
  ->toBe(mb_convert_kana("test"));

});

test("mbcut", function ()
{

  $str = str("test")->mbcut(1);

  expect($str())
  ->toBe(mb_strcut("test", 1));

});

test("mbdecodemimeheader", function ()
{

  $str = str("test")->mbdecodemimeheader();

  expect($str())
  ->toBe(mb_decode_mimeheader("test"));

});

test("mbdecodenumericentity", function ()
{

  $str = str("test")->mbdecodenumericentity([1, 1, 1, 1]);

  expect($str())
  ->toBe(mb_decode_numericentity("test", [1, 1, 1, 1]));

});

test("mbdetectencoding", function ()
{

  expect(str("test")->mbdetectencoding())
  ->toBe($result = mb_detect_encoding("test"));

  $str = str("test")->mbdetectencoding(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbencodemimeheader", function ()
{

  $str = str("test")->mbencodemimeheader();

  expect($str())
  ->toBe(mb_encode_mimeheader("test"));

});

test("mbencodenumericentity", function ()
{

  $str = str("test")->mbencodenumericentity([1, 1, 1, 1]);

  expect($str())
  ->toBe(mb_encode_numericentity("test", [1, 1, 1, 1]));

});

test("mbereg", function ()
{

  expect(str("test")->mbereg("/test/"))
  ->toBe($result = mb_ereg("/test/", "test"));

  $str = str("test")->mbereg("/test/", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);


});

test("mberegi", function ()
{

  expect(str("test")->mberegi("/test/"))
  ->toBe($result = mb_eregi("/test/", "test"));

  $str = str("test")->mberegi("/test/", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mberegireplace", function ()
{

  $str = str("test")->mberegireplace("/e/", "s");

  expect($str())
  ->toBe(mb_eregi_replace("/test/", "s", "test"));

});

test("mberegmatch", function ()
{

  expect(str("test")->mberegmatch("/test/"))
  ->toBe($result = mb_ereg_match("/test/", "test"));

  $str = str("test")->mberegmatch("/test/", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mberegreplace", function ()
{

  $str = str("test")->mberegreplace("/e/", "s");

  expect($str())
  ->toBe(mb_ereg_replace("/e/", "s", "test"));

});

test("mberegreplacecallback", function ()
{

  $str = str("test")->mberegreplacecallback("/e/", fn () => "s");

  expect($str())
  ->toBe(mb_ereg_replace_callback("/e/", fn () => "s", "test"));

});

test("mbparse", function ()
{

  str("test")->mbparse($test1);

  mb_parse_str("test", $test2);

  expect($test1)
  ->toBe($test2);

});

test("mbipos", function ()
{

  expect(str("test")->mbipos("e"))
  ->toBe($result = mb_stripos("test", "e"));

  $str = str("test")->mbipos("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbistr", function ()
{

  $str = str("test")->mbistr("e");

  expect($str())
  ->toBe(mb_stristr("test", "e"));

});

test("mblen", function ()
{

  expect(str("test")->mblen())
  ->toBe($result = mb_strlen("test"));

  $str = str("test")->mblen(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbpos", function ()
{

  expect(str("test")->mbpos("e"))
  ->toBe($result = mb_strpos("test", "e"));

  $str = str("test")->mbpos("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbrchr", function ()
{

  $str = str("test")->mbrchr("e");

  expect($str())
  ->toBe(mb_strrchr("test", "e"));

});

test("mbrichr", function ()
{

  $str = str("test")->mbrichr("e");

  expect($str())
  ->toBe(mb_strrichr("test", "e"));

});

test("mbripos", function ()
{

  expect(str("test")->mbripos("e"))
  ->toBe($result = mb_strripos("test", "e"));

  $str = str("test")->mbripos("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbrpos", function ()
{

  expect(str("test")->mbrpos("e"))
  ->toBe($result = mb_strrpos("test", "e"));

  $str = str("test")->mbrpos("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbscrub", function ()
{

  $str = str("test")->mbscrub();

  expect($str())
  ->toBe(mb_scrub("test"));

});

test("mbsplit", function ()
{

  $str = str("test")->mbsplit("/e/");

  expect($str())
  ->toBe(mb_split("/e/", "test"));

});

test("mbstr", function ()
{

  $str = str("test")->mbstr("e");

  expect($str())
  ->toBe(mb_strstr("test", "e"));

});

test("mbstrimwidth", function ()
{

  $str = str("test")->mbstrimwidth(1, 1);

  expect($str())
  ->toBe(mb_strimwidth("test", 1, 1));

});

test("mbstrsplit", function ()
{

  $str = str("test")->mbstrsplit();

  expect($str())
  ->toBe(mb_str_split("test"));

});

test("mbsubstr", function ()
{

  $str = str("test")->mbsubstr(1);

  expect($str())
  ->toBe(mb_substr("test", 1));

});

test("mbsubstrcount", function ()
{

  expect(str("test")->mbsubstrcount("e"))
  ->toBe($result = mb_substr_count("test", "e"));

  $str = str("test")->mbsubstrcount("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("mbtolower", function ()
{

  $str = str("test")->mbtolower();

  expect($str())
  ->toBe(mb_strtolower("test"));

});

test("mbtoupper", function ()
{

  $str = str("test")->mbtoupper();

  expect($str())
  ->toBe(mb_strtoupper("test"));

});

test("mbwidth", function ()
{

  expect(str("test")->mbwidth())
  ->toBe($result = mb_strwidth("test"));

  $str = str("test")->mbwidth(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("md5", function ()
{

  $str = str("test")->md5();

  expect($str())
  ->toBe(md5("test"));

});

test("metaphone", function ()
{

  $str = str("test")->metaphone();

  expect($str())
  ->toBe(metaphone("test"));

});

test("natcmp", function ()
{

  expect(str("test")->natcmp("e"))
  ->toBe($result = strnatcmp("test", "e"));

  $str = str("test")->natcmp("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("natcasecmp", function ()
{

  expect(str("test")->natcasecmp("e"))
  ->toBe($result = strnatcasecmp("test", "e"));

  $str = str("test")->natcasecmp("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("ncasecmp", function ()
{

  expect(str("test")->ncasecmp("e", 2))
  ->toBe($result = strncasecmp("test", "e", 2));

  $str = str("test")->ncasecmp("e", 2, return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("ncmp", function ()
{

  expect(str("test")->ncmp("e", 2))
  ->toBe($result = strncmp("test", "e", 2));

  $str = str("test")->ncmp("e", 2, return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("nl2br", function ()
{

  $str = str("test")->nl2br();

  expect($str())
  ->toBe(nl2br("test"));

});

test("pad", function ()
{

  $str = str("test")->pad(5);

  expect($str())
  ->toBe(str_pad("test", 5));

});

test("parse", function ()
{

  $str = str("test")->parse($test1);

  parse_str("test", $test2);

  expect($test1)
  ->toBe($test2);

});

test("parseurl", function ()
{

  $str = str("test")->parseurl();

  expect($str())
  ->toBe(parse_url("test"));

  $str = str("https://example.org")->parseurl(PHP_URL_HOST);

  expect($str())
  ->toBe("example.org");

});

test("pbrk", function ()
{

  $str = str("test")->pbrk("e");

  expect($str())
  ->toBe(strpbrk("test", "e"));

});

test("pos", function ()
{

  expect(str("test")->pos("e"))
  ->toBe($result = strpos("test", "e"));

  $str = str("test")->pos("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("pregfilter", function ()
{

  $str = str("test")->pregfilter("/e/", "s");

  expect($str())
  ->toBe(preg_filter("/e/", "s", "test"));

});

test("pregmatch", function ()
{

  expect(str("test")->pregmatch("/e/"))
  ->toBe($result = preg_match("/e/", "test"));

  $str = str("test")->pregmatch("/e/", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("pregmatchall", function ()
{

  expect(str("test")->pregmatchall("/e/"))
  ->toBe($result = preg_match_all("/e/", "test"));

  $str = str("test")->pregmatchall("/e/", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("pregquote", function ()
{

  $str = str("test")->pregquote();

  expect($str())
  ->toBe(preg_quote("test"));

});

test("pregreplace", function ()
{

  $str = str("test")->pregreplace("/e/", "s");

  expect($str())
  ->toBe(preg_replace("/e/", "s", "test"));

});

test("pregreplacecallback", function ()
{

  $str = str("test")->pregreplacecallback("/e/", fn () => "s");

  expect($str())
  ->toBe(preg_replace_callback("/e/", fn () => "s", "test"));

});

test("pregreplcatecallbackarray", function ()
{

  $str = str("test")->pregreplcatecallbackarray(["/e/" => fn () => "s"]);

  expect($str())
  ->toBe(preg_replace_callback_array(["/e/" => fn () => "s"], "test"));

});

test("pregsplit", function ()
{

  $str = str("test")->pregsplit("/e/");

  expect($str())
  ->toBe(preg_split("/e/", "test"));

});

test("quotedprintabledecode", function ()
{

  $str = str("test")->quotedprintabledecode();

  expect($str())
  ->toBe(quoted_printable_decode("test"));

});

test("quotedprintableencode", function ()
{

  $str = str("test")->quotedprintableencode();

  expect($str())
  ->toBe(quoted_printable_encode("test"));

});

test("quotemeta", function ()
{

  $str = str("test")->quotemeta();

  expect($str())
  ->toBe(quotemeta("test"));

});

test("rawurldecode", function ()
{

  $str = str("test")->rawurldecode();

  expect($str())
  ->toBe(rawurldecode("test"));

});

test("rawurlencode", function ()
{

  $str = str("test")->rawurlencode();

  expect($str())
  ->toBe(rawurlencode("test"));

});

test("rchr", function ()
{

  $str = str("test")->rchr("e");

  expect($str())
  ->toBe(strrchr("test", "e"));

});

test("repeat", function ()
{

  $str = str("test")->repeat(2);

  expect($str())
  ->toBe(str_repeat("test", 2));

});

test("replace", function ()
{

  $str = str("test")->replace("/e/", "s");

  expect($str())
  ->toBe(str_replace("/e/", "s", "test"));

});

test("rev", function ()
{

  $str = str("test")->rev();

  expect($str())
  ->toBe(strrev("test"));

});

test("ripos", function ()
{

  expect(str("test")->ripos("e"))
  ->toBe($result = strripos("test", "e"));

  $str = str("test")->ripos("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("rot13", function ()
{

  $str = str("test")->rot13();

  expect($str())
  ->toBe(str_rot13("test"));

});

test("rpos", function ()
{

  expect(str("test")->rpos("e"))
  ->toBe($result = strrpos("test", "e"));

  $str = str("test")->rpos("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("rtrim", function ()
{

  $str = str("test")->rtrim();

  expect($str())
  ->toBe(rtrim("test"));

});

test("serialize", function ()
{

  expect(str("test")->serialize())
  ->toBe($result = serialize("test"));

  $str = str("test")->serialize(return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("sha1", function ()
{

  $str = str("test")->sha1();

  expect($str())
  ->toBe(sha1("test"));

});

test("shuffle", function ()
{

  $str = str("test")->shuffle();

  $arr1 = str_split($str());

  sort($arr1);

  $arr2 = str_split(str_shuffle("test"));

  sort($arr2);

  expect($arr1)
  ->toBe($arr2);

});

test("similartext", function ()
{

  expect(str("test")->similartext("testing"))
  ->toBe($result = similar_text("test", "testing"));

  $str = str("test")->similartext("testing", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("soundex", function ()
{

  $str = str("test")->soundex();

  expect($str())
  ->toBe(soundex("test"));

});

test("split", function ()
{

  $str = str("test")->split();

  expect($str())
  ->toBe(str_split("test"));

});

test("spn", function ()
{

  expect(str("test")->spn("e"))
  ->toBe($result = strspn("test", "e"));

  $str = str("test")->spn("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("sprintf", function ()
{

  $str = str("test")->sprintf();

  expect($str())
  ->toBe(sprintf("test"));

});

test("sscanf", function ()
{

  $arr = str("test")->sscanf("%s");

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr())
  ->toBe(sscanf("test", "%s"));

  $str = str("test")->sscanf("%s", $var);

  expect($str)
  ->toBe(1);

});

test("startswith", function ()
{

  expect(str("test")->startswith("e"))
  ->toBe($result = str_starts_with("test", "s"));

  $str = str("test")->startswith("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("str", function ()
{

  $str = str("test")->str("e");

  expect($str())
  ->toBe(strstr("test", "e"));

});

test("stripcslashes", function ()
{

  $str = str("test")->stripcslashes();

  expect($str())
  ->toBe(stripcslashes("test"));

});

test("stripslashes", function ()
{

  $str = str("test")->stripslashes();

  expect($str())
  ->toBe(stripslashes("test"));

});

test("striptags", function ()
{

  $str = str("test")->striptags();

  expect($str())
  ->toBe(strip_tags("test"));

});

test("substr", function ()
{

  $str = str("test")->substr(1);

  expect($str())
  ->toBe(substr("test", 1));

});

test("substrcompare", function ()
{

  expect(str("test")->substrcompare("e", 1))
  ->toBe($result = substr_compare("test", "e", 1));

  $str = str("test")->substrcompare("e", 1, return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($result);

});

test("substrcount", function ()
{

  expect(str("test")->substrcount("e"))
  ->toBe($count = substr_count("test", "e"));

  $str = str("test")->substrcount("e", return: $return);

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($return)
  ->toBe($count);

});

test("substrreplace", function ()
{

  $str = str("test")->substrreplace("e", 1);

  expect($str())
  ->toBe(substr_replace("test", "e", 1));

});

test("tok", function ()
{

  $str = str("test")->tok("e");

  expect($str())
  ->toBe(strtok("test", "e"));

});

test("tolower", function ()
{

  $str = str("test")->tolower();

  expect($str())
  ->toBe(strtolower("test"));

});

test("toupper", function ()
{

  $str = str("test")->toupper();

  expect($str())
  ->toBe(strtoupper("test"));

});

test("tr", function ()
{

  $str = str("test")->tr("e", "s");

  expect($str())
  ->toBe(strtr("test", "e", "s"));

});

test("trim", function ()
{

  $str = str("test")->trim();

  expect($str())
  ->toBe(trim("test"));

});

test("ucfirst", function ()
{

  $str = str("test")->ucfirst();

  expect($str())
  ->toBe(ucfirst("test"));

});

test("ucwords", function ()
{

  $str = str("test")->ucwords();

  expect($str())
  ->toBe(ucwords("test"));

});

test("unserialize", function ()
{

  $test = serialize("test");

  $str = Str::unserialize($test);

  expect($str())
  ->toBe(unserialize($test));

  $test = serialize(["test"]);

  $arr = Str::unserialize($test);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr())
  ->toBe(["test"]);

});

test("urldecode", function ()
{

  $str = str("test")->urldecode();

  expect($str())
  ->toBe(urldecode("test"));

});

test("urlencode", function ()
{

  $str = str("test")->urlencode();

  expect($str())
  ->toBe(urlencode("test"));

});

test("vsprintf", function ()
{

  $str = str("%s")->vsprintf(["test"]);

  expect($str())
  ->toBe(vsprintf("%s", ["test"]));

});

test("wordcount", function ()
{

  expect(str("test")->wordcount())
  ->toBe($count = str_word_count("test"));

  $str = str("test")->wordcount(return: $return);

  expect($str)
  ->toBeInstanceof(Str::class);

  expect($return)
  ->toBe($count);

});

test("wordwrap", function ()
{

  $str = str("test")->wordwrap();

  expect($str())
  ->toBe(wordwrap("test"));

});

test("echo", function ()
{

  $this->expectOutputString("test");

  $num = str("test")->echo();

  expect($num)
  ->toBeInstanceOf(Str::class);

});

test("echo with prefix", function ()
{

  $this->expectOutputString("test1test");

  str("test")->echo(prefix: "test1");

});

test("echo with suffix", function ()
{

  $this->expectOutputString("testtest2");

  str("test")->echo(suffix: "test2");

});

test("echo with prefix and suffix", function ()
{

  $this->expectOutputString("test1testtest2");

  str("test")->echo(
    prefix: "test1",
    suffix: "test2"
  );

});

test("explode", function ()
{

  $arr = str("test,test")->explode(",");

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr())
  ->toBe(["test", "test"]);

});

test("extract", function ()
{

  $str1 = str("test")
  ->extract($str2)
  ->rev();

  expect($str1())
  ->toBe("tset");

  expect($str2)
  ->toBeInstanceOf(Str::class);

  expect($str2())
  ->toBe("test");

});

it("can use properties as methods", function ()
{

  $str = str("test")->rev;

  expect($str)
  ->toBeInstanceOf(Str::class);

  expect($str->len)
  ->toBe(4);

});