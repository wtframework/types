<?php

declare(strict_types=1);

namespace WTFramework\Types;

use Stringable;

class Str implements Stringable
{

  public function __construct(protected string $string = '') {}

  public static function new(string $string = ''): static
  {
    return new static(string: $string);
  }

  public function addcslashes(string $characters): static
  {

    $this->string = addcslashes($this->string, $characters);

    return $this;

  }

  public function addslashes(): static
  {

    $this->string = addslashes($this->string);

    return $this;

  }

  public function base64decode(bool $strict = false): static
  {

    $this->string = (string) base64_decode($this->string, $strict);

    return $this;

  }

  public function base64encode(): static
  {

    $this->string = base64_encode($this->string);

    return $this;

  }

  public function baseconvert(
    int $from_base,
    int $to_base
  ): static
  {

    $this->string = base_convert($this->string, $from_base, $to_base);

    return $this;

  }

  public function bin2hex(): static
  {

    $this->string = bin2hex($this->string);

    return $this;

  }

  public function casecmp(
    string $string,
    int &$return = null
  ): static|int
  {

    $return = strcasecmp($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

  public function chunksplit(
    int $length = 76,
    string $separator = "\r\n"
  ): static
  {

    $this->string = chunk_split($this->string, $length, $separator);

    return $this;

  }

  public function cmp(
    string $string,
    int &$return = null
  ): static|int
  {

    $return = strcmp($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

  public function coll(
    string $string,
    int &$return = null
  ): static|int
  {

    $return = strcoll($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

  public function convertuudecode(): static
  {

    $this->string = (string) convert_uudecode($this->string);

    return $this;

  }

  public function convertuuencode(): static
  {

    $this->string = convert_uuencode($this->string);

    return $this;

  }

  public function contains(
    string $needle,
    bool &$return = null
  ): static|bool
  {

    $return = str_contains($this->string, $needle);

    return 2 === func_num_args() ? $this : $return;

  }

  public function cspn(
    string $characters,
    int $offset = 0,
    int $length = null,
    int &$return = null
  ): static|int
  {

    $return = strcspn($this->string, $characters, $offset, $length);

    return 4 === func_num_args() ? $this : $return;

  }

  public function countchars(
    int $mode = 0,
    Arr &$return = null
  ): static|Arr
  {

    if (is_array($result = count_chars($this->string, $mode)))
    {

      $return = new Arr(array: $result);

      return 2 === func_num_args() ? $this : $return;

    }

    $this->string = $result;

    return $this;

  }

  public function crc32(int &$return = null): static|int
  {

    $return = crc32($this->string);

    return func_num_args() ? $this : $return;

  }

  public function crypt(string $salt): static
  {

    $this->string = crypt($this->string, $salt);

    return $this;

  }

  public function echo(
    string $prefix = '',
    string $suffix = ''
  ): static
  {

    echo "$prefix$this->string$suffix";

    return $this;

  }

  public function endswith(
    string $needle,
    bool &$return = null
  ): static|bool
  {

    $return = str_ends_with($this->string, $needle);

    return 2 === func_num_args() ? $this : $return;

  }

  public function explode(
    string $delimeter,
    int $limit = PHP_INT_MAX,
    Arr &$return = null
  ): static|Arr
  {

    $return = new Arr(array: explode($delimeter, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

  public function extract(?self &$var): static
  {

    $var = clone $this;

    return $this;

  }

  public function getcsv(
    string $separator = ',',
    string $enclosure = '"',
    string $escape = '\\',
    Arr &$return = null
  ): static|Arr
  {

    $return = new Arr(array: str_getcsv(
      $this->string,
      $separator,
      $enclosure,
      $escape
    ));

    return 4 === func_num_args() ? $this : $return;

  }

  public function hebrev(int $max_chars_per_line = 0): static
  {

    $this->string = hebrev($this->string, $max_chars_per_line);

    return $this;

  }

  public function hex2bin(): static
  {

    $this->string = (string) hex2bin($this->string);

    return $this;

  }

  public function hexdec(Num &$return = null): static|Num
  {

    $return = new Num(num: hexdec($this->string));

    return func_num_args() ? $this : $return;

  }

  public static function httpbuildquery(
    array|object $data,
    string $numeric_prefix = '',
    string $arg_separator = null,
    int $encoding_type = PHP_QUERY_RFC1738
  ): static
  {

    return new static(string: http_build_query(
      $data,
      $numeric_prefix,
      $arg_separator,
      $encoding_type
    ));

  }

  public function htmlentities(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
    string $encoding = null,
    bool $double_encode = true
  ): static
  {

    $this->string = htmlentities(
      $this->string,
      $flags,
      $encoding,
      $double_encode
    );

    return $this;

  }

  public function htmlentitydecode(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
    string $encoding = null
  ): static
  {

    $this->string = html_entity_decode($this->string, $flags, $encoding);

    return $this;

  }

  public function htmlspecialchars(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
    string $encoding = null,
    bool $double_encode = true
  ): static
  {

    $this->string = htmlspecialchars(
      $this->string,
      $flags,
      $encoding,
      $double_encode
    );

    return $this;

  }

  public function htmlspecialcharsdecode(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
  ): static
  {

    $this->string = htmlspecialchars_decode($this->string, $flags);

    return $this;

  }

  public function ipos(
    string $needle,
    int $offset = 0,
    int|false &$return = null
  ): static|int|false
  {

    $return = stripos($this->string, $needle, $offset);

    return 3 === func_num_args() ? $this : $return;

  }

  public function ireplace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static
  {

    $this->string = str_ireplace($search, $replace, $this->string, $count);

    return $this;

  }

  public function istr(
    string $needle,
    bool $before_needle = false
  ): static
  {

    $this->string = (string) stristr($this->string, $needle, $before_needle);

    return $this;

  }

  public function jsondecode(
    bool $associative = null,
    int $depth = 512,
    int $flags = 0,
    mixed &$return = null
  ): mixed
  {

    $result = json_decode($this->string, $associative, $depth, $flags);

    $return = is_array($result) ? new Arr(array: $result) : $result;

    return 4 === func_num_args() ? $this : $return;

  }

  public function lcfirst(): static
  {

    $this->string = lcfirst($this->string);

    return $this;

  }

  public function len(int &$return = null): static|int
  {

    $return = strlen($this->string);

    return func_num_args() ? $this : $return;

  }

  public function levenshtein(
    string $string,
    int $insertion_cost = 1,
    int $replacement_cost = 1,
    int $deletion_cost = 1,
    int &$return = null
  ): static|int
  {

    $return = levenshtein(
      $this->string,
      $string,
      $insertion_cost,
      $replacement_cost,
      $deletion_cost
    );

    return 5 === func_num_args() ? $this : $return;

  }

  public function ltrim(string $characters = " \n\r\t\v\x00"): static
  {

    $this->string = ltrim($this->string, $characters);

    return $this;

  }

  public function mbcheckencoding(
    string $encoding = null,
    bool &$return = null
  ): static|bool
  {

    $return = mb_check_encoding($this->string, $encoding);

    return 2 === func_num_args() ? $this : $return;

  }

  public function mbconvertcase(
    int $mode,
    string $encoding = null
  ): static
  {

    $this->string = mb_convert_case($this->string, $mode, $encoding);

    return $this;

  }

  public function mbconvertencoding(
    string $to_encoding,
    string|array $from_encoding = null
  ): static
  {

    $this->string = mb_convert_encoding(
      $this->string,
      $to_encoding,
      $from_encoding
    );

    return $this;

  }

  public function mbconvertkana(
    string $mode = 'KV',
    string $encoding = null
  ): static
  {

    $this->string = mb_convert_kana($this->string, $mode, $encoding);

    return $this;

  }

  public function mbcut(
    int $start,
    int $length = null,
    string $encoding = null
  ): static
  {

    $this->string = mb_strcut($this->string, $start, $length, $encoding);

    return $this;

  }

  public function mbdecodemimeheader(): static
  {

    $this->string = mb_decode_mimeheader($this->string);

    return $this;

  }

  public function mbdecodenumericentity(
    array $map,
    string $encoding = null
  ): static
  {

    $this->string = mb_decode_numericentity($this->string, $map, $encoding);

    return $this;

  }

  public function mbdetectencoding(
    array|string $encodings = null,
    bool $strict = false,
    string|false &$return = null
  ): static|string|false
  {

    $return = mb_detect_encoding($this->string, $encodings, $strict);

    return 3 === func_num_args() ? $this : $return;

  }

  public function mbencodemimeheader(
    string $charset = 'utf-8',
    string $transfer_encoding = 'B',
    string $newline = "\r\n",
    int $indent = 0
  ): static
  {

    $this->string = mb_encode_mimeheader(
      $this->string,
      $charset,
      $transfer_encoding,
      $newline,
      $indent
    );

    return $this;

  }

  public function mbencodenumericentity(
    array $map,
    string $encoding = null,
    bool $hex = false
  ): static
  {

    $this->string = mb_encode_numericentity(
      $this->string,
      $map,
      $encoding,
      $hex
    );

    return $this;

  }

  public function mbereg(
    string $pattern,
    array &$matches = null,
    bool &$return = null
  ): static|bool
  {

    $return = mb_ereg($pattern, $this->string, $matches);

    return 3 === func_num_args() ? $this : $return;

  }

  public function mberegi(
    string $pattern,
    array &$matches = null,
    bool &$return = null
  ): static|bool
  {

    $return = mb_eregi($pattern, $this->string, $matches);

    return 3 === func_num_args() ? $this : $return;

  }

  public function mberegireplace(
    string $pattern,
    string $replacement,
    string $options = null
  ): static
  {

    $this->string = (string) mb_eregi_replace(
      $pattern,
      $replacement,
      $this->string,
      $options
    );

    return $this;

  }

  public function mberegmatch(
    string $pattern,
    string $options = null,
    bool &$return = null
  ): static|bool
  {

    $return = mb_ereg_match($pattern, $this->string, $options);

    return 3 === func_num_args() ? $this : $return;

  }

  public function mberegreplace(
    string $pattern,
    string $replacement,
    string $options = null
  ): static
  {

    $this->string = (string) mb_ereg_replace(
      $pattern,
      $replacement,
      $this->string,
      $options
    );

    return $this;

  }

  public function mberegreplacecallback(
    string $pattern,
    callable $callback,
    string $options = null
  ): static
  {

    $this->string = (string) mb_ereg_replace_callback(
      $pattern,
      $callback,
      $this->string,
      $options
    );

    return $this;

  }

  public function mbparse(?array &$result): static
  {

    mb_parse_str($this->string, $result);

    return $this;

  }

  public function mbipos(
    string $needle,
    int $offset = 0,
    string $encoding = null,
    int|false &$return = null
  ): static|int|false
  {

    $return = mb_stripos($this->string, $needle, $offset, $encoding);

    return 4 === func_num_args() ? $this : $return;

  }

  public function mbistr(
    string $needle,
    bool $before_needle = false,
    string $encoding = null
  ): static
  {

    $this->string = (string) mb_stristr(
      $this->string,
      $needle,
      $before_needle,
      $encoding
    );

    return $this;

  }

  public function mblen(
    string $encoding = null,
    int &$return = null
  ): static|int
  {

    $return = mb_strlen($this->string, $encoding);

    return 2 === func_num_args() ? $this : $return;

  }

  public function mbpos(
    string $needle,
    int $offset = 0,
    string $encoding = null,
    int|false &$return = null
  ): static|int|false
  {

    $return = mb_strpos($this->string, $needle, $offset, $encoding);

    return 4 === func_num_args() ? $this : $return;

  }

  public function mbrchr(
    string $needle,
    bool $before_needle = false,
    string $encoding = null
  ): static
  {

    $this->string = (string) mb_strrchr(
      $this->string,
      $needle,
      $before_needle,
      $encoding
    );

    return $this;

  }

  public function mbrichr(
    string $needle,
    bool $before_needle = false,
    string $encoding = null
  ): static
  {

    $this->string = (string) mb_strrichr(
      $this->string,
      $needle,
      $before_needle,
      $encoding
    );

    return $this;

  }

  public function mbripos(
    string $needle,
    int $offset = 0,
    string $encoding = null,
    int|false &$return = null
  ): static|int|false
  {

    $return = mb_strripos($this->string, $needle, $offset, $encoding);

    return 4 === func_num_args() ? $this : $return;

  }

  public function mbrpos(
    string $needle,
    int $offset = 0,
    string $encoding = null,
    int|false &$return = null
  ): static|int|false
  {

    $return = mb_strrpos($this->string, $needle, $offset, $encoding);

    return 4 === func_num_args() ? $this : $return;

  }

  public function mbscrub(string $encoding = null): static
  {

    $this->string = mb_scrub($this->string, $encoding);

    return $this;

  }

  public function mbsplit(
    string $pattern,
    int $limit = -1,
    Arr &$return = null
  ): static|Arr
  {

    $return = new Arr(array: (array) mb_split($pattern, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

  public function mbstr(
    string $needle,
    bool $before_needle = false,
    string $encoding = null
  ): static
  {

    $this->string = (string) mb_strstr(
      $this->string,
      $needle,
      $before_needle,
      $encoding
    );

    return $this;

  }

  public function mbstrimwidth(
    int $start,
    int $width,
    string $trim_marker = '',
    string $encoding = null
  ): static
  {

    $this->string = mb_strimwidth(
      $this->string,
      $start,
      $width,
      $trim_marker,
      $encoding
    );

    return $this;

  }

  public function mbstrsplit(
    int $limit = 1,
    string $encoding = null,
    Arr &$return = null
  ): static|Arr
  {

    $return = new Arr(array: mb_str_split($this->string, $limit, $encoding));

    return 3 === func_num_args() ? $this : $return;

  }

  public function mbsubstr(
    int $start,
    int $length = null,
    string $encoding = null
  ): static
  {

    $this->string = mb_substr($this->string, $start, $length, $encoding);

    return $this;

  }

  public function mbsubstrcount(
    string $needle,
    string $encoding = null,
    int &$return = null
  ): static|int
  {

    $return = mb_substr_count($this->string, $needle, $encoding);

    return 3 === func_num_args() ? $this : $return;

  }

  public function mbtolower(string $encoding = null): static
  {

    $this->string = mb_strtolower($this->string, $encoding);

    return $this;

  }

  public function mbtoupper(string $encoding = null): static
  {

    $this->string = mb_strtoupper($this->string, $encoding);

    return $this;

  }

  public function mbwidth(
    string $encoding = null,
    int &$return = null
  ): static|int
  {

    $return = mb_strwidth($this->string, $encoding);

    return 2 === func_num_args() ? $this : $return;

  }

  public function md5(bool $binary = false): static
  {

    $this->string = md5($this->string, $binary);

    return $this;

  }

  public function metaphone(int $max_phonemes = 0): static
  {

    $this->string = metaphone($this->string, $max_phonemes);

    return $this;

  }

  public function natcmp(
    string $string,
    int &$return = null
  ): static|int
  {

    $return = strnatcmp($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

  public function natcasecmp(
    string $string,
    int &$return = null
  ): static|int
  {

    $return = strnatcasecmp($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

  public function ncasecmp(
    string $string,
    int $length,
    int &$return = null
  ): static|int
  {

    $return = strncasecmp($this->string, $string, $length);

    return 3 === func_num_args() ? $this : $return;

  }

  public function ncmp(
    string $string,
    int $length,
    int &$return = null
  ): static|int
  {

    $return = strncmp($this->string, $string, $length);

    return 3 === func_num_args() ? $this : $return;

  }

  public function nl2br(bool $use_xhtml = true): static
  {

    $this->string = nl2br($this->string, $use_xhtml);

    return $this;

  }

  public function pad(
    int $length,
    string $pad_string = ' ',
    int $pad_type = STR_PAD_RIGHT
  ): static
  {

    $this->string = str_pad($this->string, $length, $pad_string, $pad_type);

    return $this;

  }

  public function parse(?array &$result): static
  {

    parse_str($this->string, $result);

    return $this;

  }

  public function parseurl(
    int $component = -1,
    Arr|int|null|false &$return = null
  ): static|Arr|int|null|false
  {

    if (!is_string($result = parse_url($this->string, $component)))
    {

      $return = is_array($result) ? new Arr(array: $result) : $result;

      return 2 === func_num_args() ? $this : $return;

    }

    $this->string = $result;

    return $this;

  }

  public function pbrk(string $characters): static
  {

    $this->string = (string) strpbrk($this->string, $characters);

    return $this;

  }

  public function pos(
    string $needle,
    int $offset = 0,
    int|false &$return = null
  ): static|int|false
  {

    $return = strpos($this->string, $needle, $offset);

    return 3 === func_num_args() ? $this : $return;

  }

  public function pregfilter(
    string|array $pattern,
    string|array $replacement,
    int $limit = -1,
    int &$count = null
  ): static
  {

    $this->string = (string) preg_filter(
      $pattern,
      $replacement,
      $this->string,
      $limit,
      $count
    );

    return $this;

  }

  public function pregmatch(
    string $pattern,
    array &$matches = null,
    int $flags = 0,
    int $offset = 0,
    int|false &$return = null
  ): static|int|false
  {

    $return = preg_match(
      $pattern,
      $this->string,
      $matches,
      $flags,
      $offset
    );

    return 5 === func_num_args() ? $this : $return;

  }

  public function pregmatchall(
    string $pattern,
    array &$matches = null,
    int $flags = 0,
    int $offset = 0,
    int|false &$return = null
  ): static|int|false
  {

    $return = preg_match_all(
      $pattern,
      $this->string,
      $matches,
      $flags,
      $offset
    );

    return 5 === func_num_args() ? $this : $return;

  }

  public function pregquote(string $delimeter = null): static
  {

    $this->string = preg_quote($this->string, $delimeter);

    return $this;

  }

  public function pregreplace(
    string|array $pattern,
    string|array $replacement,
    int $limit = -1,
    int &$count = null
  ): static
  {

    $this->string = (string) preg_replace(
      $pattern,
      $replacement,
      $this->string,
      $limit,
      $count
    );

    return $this;

  }

  public function pregreplacecallback(
    string|array $pattern,
    callable $callback,
    int $limit = -1,
    int &$count = null,
    int $flags = 0
  ): static
  {

    $this->string = (string) preg_replace_callback(
      $pattern,
      $callback,
      $this->string,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

  public function pregreplcatecallbackarray(
    array $pattern,
    int $limit = -1,
    int &$count = null,
    int $flags = 0
  ): static
  {

    $this->string = (string) preg_replace_callback_array(
      $pattern,
      $this->string,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

  public function pregsplit(
    string $pattern,
    int $limit = -1,
    int $flags = 0,
    Arr &$return = null
  ): static|Arr
  {

    $return = new Arr(array: preg_split(
      $pattern,
      $this->string,
      $limit,
      $flags
    ) ?: []);

    return 4 === func_num_args() ? $this : $return;

  }

  public function quotedprintabledecode(): static
  {

    $this->string = quoted_printable_decode($this->string);

    return $this;

  }

  public function quotedprintableencode(): static
  {

    $this->string = quoted_printable_encode($this->string);

    return $this;

  }

  public function quotemeta(): static
  {

    $this->string = quotemeta($this->string);

    return $this;

  }

  public function rawurldecode(): static
  {

    $this->string = rawurldecode($this->string);

    return $this;

  }

  public function rawurlencode(): static
  {

    $this->string = rawurlencode($this->string);

    return $this;

  }

  public function rchr(string $needle): static
  {

    $this->string = (string) strrchr($this->string, $needle);

    return $this;

  }

  public function repeat(int $times): static
  {

    $this->string = str_repeat($this->string, $times);

    return $this;

  }

  public function replace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static
  {

    $this->string = str_replace($search, $replace, $this->string, $count);

    return $this;

  }

  public function return(): string
  {
    return $this->string;
  }

  public function rev(): static
  {

    $this->string = strrev($this->string);

    return $this;

  }

  public function ripos(
    string $needle,
    int $offset = 0,
    int|false &$return = null
  ): static|int|false
  {

    $return = strripos($this->string, $needle, $offset);

    return 3 === func_num_args() ? $this : $return;

  }

  public function rot13(): static
  {

    $this->string = str_rot13($this->string);

    return $this;

  }

  public function rpos(
    string $needle,
    int $offset = 0,
    int|false &$return = null
  ): static|int|false
  {

    $return = strrpos($this->string, $needle, $offset);

    return 3 === func_num_args() ? $this : $return;

  }

  public function rtrim(string $characters = " \n\r\t\v\x00"): static
  {

    $this->string = rtrim($this->string, $characters);

    return $this;

  }

  public function serialize(string &$return = null): static|string
  {

    $return = serialize($this->string);

    return func_num_args() ? $this : $return;

  }

  public function sha1(bool $binary = false): static
  {

    $this->string = sha1($this->string, $binary);

    return $this;

  }

  public function shuffle(): static
  {

    $this->string = str_shuffle($this->string);

    return $this;

  }

  public function similartext(
    string $string,
    float &$percent = null,
    int &$return = null
  ): static|int
  {

    $return = similar_text($this->string, $string, $percent);

    return 3 === func_num_args() ? $this : $return;

  }

  public function soundex(): static
  {

    $this->string = soundex($this->string);

    return $this;

  }

  public function split(
    int $length = 1,
    Arr &$return = null
  ): static|Arr
  {

    $return = new Arr(array: str_split($this->string, $length));

    return 2 === func_num_args() ? $this : $return;

  }

  public function spn(
    string $characters,
    int $offset = 0,
    int $length = null,
    int &$return = null
  ): static|int
  {

    $return = strspn($this->string, $characters, $offset, $length);

    return 4 === func_num_args() ? $this : $return;

  }

  public function sprintf(mixed ...$values): static
  {

    $this->string = sprintf($this->string, ...$values);

    return $this;

  }

  public function sscanf(
    string $format,
    mixed &...$vars
  ): Arr|int|null
  {

    if (is_array($result = sscanf($this->string, $format, ...$vars)))
    {
      return new Arr(array: $result);
    }

    return $result;

  }

  public function startswith(
    string $needle,
    bool &$return = null
  ): static|bool
  {

    $return = str_starts_with($this->string, $needle);

    return 2 === func_num_args() ? $this : $return;

  }

  public function str(
    string $needle,
    bool $before_needle = false
  ): static
  {

    $this->string = (string) strstr($this->string, $needle, $before_needle);

    return $this;

  }

  public function stripcslashes(): static
  {

    $this->string = stripcslashes($this->string);

    return $this;

  }

  public function stripslashes(): static
  {

    $this->string = stripslashes($this->string);

    return $this;

  }

  public function striptags(array|string $allowed_tags = null): static
  {

    $this->string = strip_tags($this->string, $allowed_tags);

    return $this;

  }

  public function substr(
    array|int $offset,
    array|int $length = null
  ): static
  {

    $this->string = substr($this->string, $offset, $length);

    return $this;

  }

  public function substrcompare(
    string $needle,
    int $offset,
    int $length = null,
    bool $case_insensitive = false,
    int &$return = null
  ): static|int
  {

    $return = substr_compare(
      $this->string,
      $needle,
      $offset,
      $length,
      $case_insensitive
    );

    return 5 === func_num_args() ? $this : $return;

  }

  public function substrcount(
    string $needle,
    int $offset = 0,
    int $length = null,
    int &$return = null
  ): static|int
  {

    $return = substr_count($this->string, $needle, $offset, $length);

    return 4 === func_num_args() ? $this : $return;

  }

  public function substrreplace(
    string $replace,
    int $offset,
    int $length = null
  ): static
  {

    $this->string = substr_replace($this->string, $replace, $offset, $length);

    return $this;

  }

  public function tok(string $token): static
  {

    $this->string = strtok($this->string, $token);

    return $this;

  }

  public function tolower(): static
  {

    $this->string = strtolower($this->string);

    return $this;

  }

  public function toupper(): static
  {

    $this->string = strtoupper($this->string);

    return $this;

  }

  public function tr(
    string|array $from,
    ?string $to
  ): static
  {

    $this->string = strtr($this->string, ...func_get_args());

    return $this;

  }

  public function trim(string $characters = " \n\r\t\v\x00"): static
  {

    $this->string = trim($this->string, $characters);

    return $this;

  }

  public function ucfirst(): static
  {

    $this->string = ucfirst($this->string);

    return $this;

  }

  public function ucwords(): static
  {

    $this->string = ucwords($this->string);

    return $this;

  }

  public static function unserialize(
    string $data,
    array $options = []
  ): mixed
  {

    if (!is_string($result = unserialize($data, $options)))
    {
      return is_array($result) ? new Arr(array: $result) : $result;
    }

    return new static(string: $result);

  }

  public function urldecode(): static
  {

    $this->string = urldecode($this->string);

    return $this;

  }

  public function urlencode(): static
  {

    $this->string = urlencode($this->string);

    return $this;

  }

  public function vsprintf(array $values): static
  {

    $this->string = vsprintf($this->string, $values);

    return $this;

  }

  public function wordcount(
    int $format = 0,
    string $characters = null,
    Arr|int &$return = null
  ): static|Arr|int
  {

    $result = str_word_count($this->string, $format, $characters);

    $return = is_array($result) ? new Arr(array: $result) : $result;

    return 3 === func_num_args() ? $this : $return;

  }

  public function wordwrap(
    int $width = 75,
    string $break = "\n",
    bool $cut_long_words = false
  ): static
  {

    $this->string = wordwrap($this->string, $width, $break, $cut_long_words);

    return $this;

  }

  public function __get(string $name): mixed
  {
    return $this->$name();
  }

  public function __toString(): string
  {
    return $this->string;
  }

  public function __invoke(): string
  {
    return $this->string;
  }

}