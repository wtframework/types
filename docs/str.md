# What the Framework?! types

## WTFramework\Types\Str

### Static methods

```php
new(string $string = ''): static

httpbuildquery(
  array|object $data,
  string $numeric_prefix = '',
  string $arg_separator = null,
  int $encoding_type = PHP_QUERY_RFC1738
): static

unserialize(
  string $data,
  array $options = []
): mixed
```

### Non-static methods

```php
addcslashes(string $characters): static

addslashes(): static

base64decode(bool $strict = false): static

base64encode(): static

baseconvert(
  int $from_base,
  int $to_base
): static

bin2hex(): static

casecmp(
  string $string,
  int &$return = null
): static|int

chunksplit(
  int $length = 76,
  string $separator = "\r\n"
): static

cmp(
  string $string,
  int &$return = null
): static|int

coll(
  string $string,
  int &$return = null
): static|int

convertuudecode(): static

convertuuencode(): static

contains(
  string $needle,
  bool &$return = null
): static|bool

cspn(
  string $characters,
  int $offset = 0,
  int $length = null,
  int &$return = null
): static|int

countchars(
  int $mode = 0,
  Arr &$return = null
): static|Arr

crc32(int &$return = null): static|int

crypt(string $salt): static

echo(
  string $prefix = '',
  string $suffix = ''
): static

endswith(
  string $needle,
  bool &$return = null
): static|bool

explode(
  string $delimeter,
  int $limit = PHP_INT_MAX,
  Arr &$return = null
): static|Arr

extract(?self &$var): static

getcsv(
  string $separator = ',',
  string $enclosure = '"',
  string $escape = '\\',
  Arr &$return = null
): static|Arr

hebrev(int $max_chars_per_line = 0): static

hex2bin(): static

hexdec(Num &$return = null): static|Num

htmlentities(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
  string $encoding = null,
  bool $double_encode = true
): static

htmlentitydecode(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
  string $encoding = null
): static

htmlspecialchars(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
  string $encoding = null,
  bool $double_encode = true
): static

htmlspecialcharsdecode(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
): static

ipos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|int|false

ireplace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static

istr(
  string $needle,
  bool $before_needle = false
): static

jsondecode(
  bool $associative = null,
  int $depth = 512,
  int $flags = 0,
  mixed &$return = null
): mixed

lcfirst(): static

len(int &$return = null): static|int

levenshtein(
  string $string,
  int $insertion_cost = 1,
  int $replacement_cost = 1,
  int $deletion_cost = 1,
  int &$return = null
): static|int

ltrim(string $characters = " \n\r\t\v\x00"): static

mbcheckencoding(
  string $encoding = null,
  bool &$return = null
): static|bool

mbconvertcase(
  int $mode,
  string $encoding = null
): static

mbconvertencoding(
  string $to_encoding,
  string|array $from_encoding = null
): static

mbconvertkana(
  string $mode = 'KV',
  string $encoding = null
): static

mbcut(
  int $start,
  int $length = null,
  string $encoding = null
): static

mbdecodemimeheader(): static

mbdecodenumericentity(
  array $map,
  string $encoding = null
): static

mbdetectencoding(
  array|string $encodings = null,
  bool $strict = false,
  string|false &$return = null
): static|string|false

mbencodemimeheader(
  string $charset = 'utf-8',
  string $transfer_encoding = 'B',
  string $newline = "\r\n",
  int $indent = 0
): static

mbencodenumericentity(
  array $map,
  string $encoding = null,
  bool $hex = false
): static

mbereg(
  string $pattern,
  array &$matches = null,
  bool &$return = null
): static|bool

mberegi(
  string $pattern,
  array &$matches = null,
  bool &$return = null
): static|bool

mberegireplace(
  string $pattern,
  string $replacement,
  string $options = null
): static

mberegmatch(
  string $pattern,
  string $options = null,
  bool &$return = null
): static|bool

mberegreplace(
  string $pattern,
  string $replacement,
  string $options = null
): static

mberegreplacecallback(
  string $pattern,
  callable $callback,
  string $options = null
): static

mbparse(?array &$result): static

mbipos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|int|false

mbistr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static

mblen(
  string $encoding = null,
  int &$return = null
): static|int

mbpos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|int|false

mbrchr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static

mbrichr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static

mbripos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|int|false

mbrpos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|int|false

mbscrub(string $encoding = null): static

mbsplit(
  string $pattern,
  int $limit = -1,
  Arr &$return = null
): static|Arr

mbstr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static

mbstrimwidth(
  int $start,
  int $width,
  string $trim_marker = '',
  string $encoding = null
): static

mbstrsplit(
  int $limit = 1,
  string $encoding = null,
  Arr &$return = null
): static|Arr

mbsubstr(
  int $start,
  int $length = null,
  string $encoding = null
): static

mbsubstrcount(
  string $needle,
  string $encoding = null,
  int &$return = null
): static|int

mbtolower(string $encoding = null): static

mbtoupper(string $encoding = null): static

mbwidth(
  string $encoding = null,
  int &$return = null
): static|int

md5(bool $binary = false): static

metaphone(int $max_phonemes = 0): static

natcmp(
  string $string,
  int &$return = null
): static|int

natcasecmp(
  string $string,
  int &$return = null
): static|int

ncasecmp(
  string $string,
  int $length,
  int &$return = null
): static|int

ncmp(
  string $string,
  int $length,
  int &$return = null
): static|int

nl2br(bool $use_xhtml = true): static

pad(
  int $length,
  string $pad_string = ' ',
  int $pad_type = STR_PAD_RIGHT
): static

parse(?array &$result): static

parseurl(
  int $component = -1,
  Arr|int|null|false &$return = null
): static|Arr|int|null|false

pbrk(string $characters): static

pos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|int|false

pregfilter(
  string|array $pattern,
  string|array $replacement,
  int $limit = -1,
  int &$count = null
): static

pregmatch(
  string $pattern,
  array &$matches = null,
  int $flags = 0,
  int $offset = 0,
  int|false &$return = null
): static|int|false

pregmatchall(
  string $pattern,
  array &$matches = null,
  int $flags = 0,
  int $offset = 0,
  int|false &$return = null
): static|int|false

pregquote(string $delimeter = null): static

pregreplace(
  string|array $pattern,
  string|array $replacement,
  int $limit = -1,
  int &$count = null
): static

pregreplacecallback(
  string|array $pattern,
  callable $callback,
  int $limit = -1,
  int &$count = null,
  int $flags = 0
): static

pregreplcatecallbackarray(
  array $pattern,
  int $limit = -1,
  int &$count = null,
  int $flags = 0
): static

pregsplit(
  string $pattern,
  int $limit = -1,
  int $flags = 0,
  Arr &$return = null
): static|Arr

quotedprintabledecode(): static

quotedprintableencode(): static

quotemeta(): static

rawurldecode(): static

rawurlencode(): static

rchr(string $needle): static

repeat(int $times): static

replace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static

return(): string

rev(): static

ripos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|int|false

rot13(): static

rpos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|int|false

rtrim(string $characters = " \n\r\t\v\x00"): static

serialize(string &$return = null): static|string

sha1(bool $binary = false): static

shuffle(): static

similartext(
  string $string,
  float &$percent = null,
  int &$return = null
): static|int

soundex(): static

split(
  int $length = 1,
  Arr &$return = null
): static|Arr

spn(
  string $characters,
  int $offset = 0,
  int $length = null,
  int &$return = null
): static|int

sprintf(mixed ...$values): static

sscanf(
  string $format,
  mixed &...$vars
): Arr|int|null

startswith(
  string $needle,
  bool &$return = null
): static|bool

str(
  string $needle,
  bool $before_needle = false
): static

stripcslashes(): static

stripslashes(): static

striptags(array|string $allowed_tags = null): static

substr(
  array|int $offset,
  array|int $length = null
): static

substrcompare(
  string $needle,
  int $offset,
  int $length = null,
  bool $case_insensitive = false,
  int &$return = null
): static|int

substrcount(
  string $needle,
  int $offset = 0,
  int $length = null,
  int &$return = null
): static|int

substrreplace(
  string $replace,
  int $offset,
  int $length = null
): static

tok(string $token): static

tolower(): static

toupper(): static

tr(
  string|array $from,
  ?string $to
): static

trim(string $characters = " \n\r\t\v\x00"): static

ucfirst(): static

ucwords(): static

urldecode(): static

urlencode(): static

vsprintf(array $values): static

wordcount(
  int $format = 0,
  string $characters = null,
  Arr|int &$return = null
): static|Arr|int

wordwrap(
  int $width = 75,
  string $break = "\n",
  bool $cut_long_words = false
): static
```