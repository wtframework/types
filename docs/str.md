# What the Framework?! types

## WTFramework\Types\Str

### Static methods

```php
new(string $string = ''): static|IsStr

httpbuildquery(
  array|object $data,
  string $numeric_prefix = '',
  string $arg_separator = null,
  int $encoding_type = PHP_QUERY_RFC1738
): static|IsStr

unserialize(
  string $data,
  array $options = []
): mixed
```

### Non-static methods

```php
addcslashes(string $characters): static|IsStr

addslashes(): static|IsStr

base64decode(bool $strict = false): static|IsStr

base64encode(): static|IsStr

baseconvert(
  int $from_base,
  int $to_base
): static|IsStr

bin2hex(): static|IsStr

casecmp(
  string $string,
  int &$return = null
): static|IsStr|int

chunksplit(
  int $length = 76,
  string $separator = "\r\n"
): static|IsStr

cmp(
  string $string,
  int &$return = null
): static|IsStr|int

coll(
  string $string,
  int &$return = null
): static|IsStr|int

convertuudecode(): static|IsStr

convertuuencode(): static|IsStr

contains(
  string $needle,
  bool &$return = null
): static|IsStr|bool

cspn(
  string $characters,
  int $offset = 0,
  int $length = null,
  int &$return = null
): static|IsStr|int

countchars(
  int $mode = 0,
  Arr|IsArr &$return = null
): static|IsStr|Arr|IsArr

crc32(int &$return = null): static|IsStr|int

crypt(string $salt): static|IsStr

echo(
  string $prefix = '',
  string $suffix = ''
): static|IsStr

endswith(
  string $needle,
  bool &$return = null
): static|IsStr|bool

explode(
  string $delimeter,
  int $limit = PHP_INT_MAX,
  Arr|IsArr &$return = null
): static|IsStr|Arr|IsArr

extract(?self &$var): static|IsStr

getcsv(
  string $separator = ',',
  string $enclosure = '"',
  string $escape = '\\',
  Arr|IsArr &$return = null
): static|IsStr|Arr|IsArr

hebrev(int $max_chars_per_line = 0): static|IsStr

hex2bin(): static|IsStr

hexdec(int|float &$return = null): static|IsStr|int|float

htmlentities(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
  string $encoding = null,
  bool $double_encode = true
): static|IsStr

htmlentitydecode(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
  string $encoding = null
): static|IsStr

htmlspecialchars(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
  string $encoding = null,
  bool $double_encode = true
): static|IsStr

htmlspecialcharsdecode(
  int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
): static|IsStr

ipos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|IsStr|int|false

ireplace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static|IsStr

istr(
  string $needle,
  bool $before_needle = false
): static|IsStr

jsondecode(
  bool $associative = null,
  int $depth = 512,
  int $flags = 0,
  mixed &$return = null
): mixed

lcfirst(): static|IsStr

len(int &$return = null): static|IsStr|int

levenshtein(
  string $string,
  int $insertion_cost = 1,
  int $replacement_cost = 1,
  int $deletion_cost = 1,
  int &$return = null
): static|IsStr|int

ltrim(string $characters = " \n\r\t\v\x00"): static|IsStr

mbcheckencoding(
  string $encoding = null,
  bool &$return = null
): static|IsStr|bool

mbconvertcase(
  int $mode,
  string $encoding = null
): static|IsStr

mbconvertencoding(
  string $to_encoding,
  string|array $from_encoding = null
): static|IsStr

mbconvertkana(
  string $mode = 'KV',
  string $encoding = null
): static|IsStr

mbcut(
  int $start,
  int $length = null,
  string $encoding = null
): static|IsStr

mbdecodemimeheader(): static|IsStr

mbdecodenumericentity(
  array $map,
  string $encoding = null
): static|IsStr

mbdetectencoding(
  array|string $encodings = null,
  bool $strict = false,
  string|false &$return = null
): static|IsStr|string|false

mbencodemimeheader(
  string $charset = 'utf-8',
  string $transfer_encoding = 'B',
  string $newline = "\r\n",
  int $indent = 0
): static|IsStr

mbencodenumericentity(
  array $map,
  string $encoding = null,
  bool $hex = false
): static|IsStr

mbereg(
  string $pattern,
  array &$matches = null,
  bool &$return = null
): static|IsStr|bool

mberegi(
  string $pattern,
  array &$matches = null,
  bool &$return = null
): static|IsStr|bool

mberegireplace(
  string $pattern,
  string $replacement,
  string $options = null
): static|IsStr

mberegmatch(
  string $pattern,
  string $options = null,
  bool &$return = null
): static|IsStr|bool

mberegreplace(
  string $pattern,
  string $replacement,
  string $options = null
): static|IsStr

mberegreplacecallback(
  string $pattern,
  callable $callback,
  string $options = null
): static|IsStr

mbparse(?array &$result): static|IsStr

mbipos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|IsStr|int|false

mbistr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static|IsStr

mblen(
  string $encoding = null,
  int &$return = null
): static|IsStr|int

mbpos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|IsStr|int|false

mbrchr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static|IsStr

mbrichr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static|IsStr

mbripos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|IsStr|int|false

mbrpos(
  string $needle,
  int $offset = 0,
  string $encoding = null,
  int|false &$return = null
): static|IsStr|int|false

mbscrub(string $encoding = null): static|IsStr

mbsplit(
  string $pattern,
  int $limit = -1,
  Arr|IsArr &$return = null
): static|IsStr|Arr|IsArr

mbstr(
  string $needle,
  bool $before_needle = false,
  string $encoding = null
): static|IsStr

mbstrimwidth(
  int $start,
  int $width,
  string $trim_marker = '',
  string $encoding = null
): static|IsStr

mbstrsplit(
  int $limit = 1,
  string $encoding = null,
  Arr|IsArr &$return = null
): static|IsStr|Arr|IsArr

mbsubstr(
  int $start,
  int $length = null,
  string $encoding = null
): static|IsStr

mbsubstrcount(
  string $needle,
  string $encoding = null,
  int &$return = null
): static|IsStr|int

mbtolower(string $encoding = null): static|IsStr

mbtoupper(string $encoding = null): static|IsStr

mbwidth(
  string $encoding = null,
  int &$return = null
): static|IsStr|int

md5(bool $binary = false): static|IsStr

metaphone(int $max_phonemes = 0): static|IsStr

natcmp(
  string $string,
  int &$return = null
): static|IsStr|int

natcasecmp(
  string $string,
  int &$return = null
): static|IsStr|int

ncasecmp(
  string $string,
  int $length,
  int &$return = null
): static|IsStr|int

ncmp(
  string $string,
  int $length,
  int &$return = null
): static|IsStr|int

nl2br(bool $use_xhtml = true): static|IsStr

pad(
  int $length,
  string $pad_string = ' ',
  int $pad_type = STR_PAD_RIGHT
): static|IsStr

parse(?array &$result): static|IsStr

parseurl(
  int $component = -1,
  Arr|IsArr|int|null|false &$return = null
): static|IsStr|Arr|IsArr|int|null|false

pbrk(string $characters): static|IsStr

pos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|IsStr|int|false

pregfilter(
  string|array $pattern,
  string|array $replacement,
  int $limit = -1,
  int &$count = null
): static|IsStr

pregmatch(
  string $pattern,
  array &$matches = null,
  int $flags = 0,
  int $offset = 0,
  int|false &$return = null
): static|IsStr|int|false

pregmatchall(
  string $pattern,
  array &$matches = null,
  int $flags = 0,
  int $offset = 0,
  int|false &$return = null
): static|IsStr|int|false

pregquote(string $delimeter = null): static|IsStr

pregreplace(
  string|array $pattern,
  string|array $replacement,
  int $limit = -1,
  int &$count = null
): static|IsStr

pregreplacecallback(
  string|array $pattern,
  callable $callback,
  int $limit = -1,
  int &$count = null,
  int $flags = 0
): static|IsStr

pregreplcatecallbackarray(
  array $pattern,
  int $limit = -1,
  int &$count = null,
  int $flags = 0
): static|IsStr

pregsplit(
  string $pattern,
  int $limit = -1,
  int $flags = 0,
  Arr|IsArr &$return = null
): static|IsStr|Arr|IsArr

quotedprintabledecode(): static|IsStr

quotedprintableencode(): static|IsStr

quotemeta(): static|IsStr

rawurldecode(): static|IsStr

rawurlencode(): static|IsStr

rchr(string $needle): static|IsStr

repeat(int $times): static|IsStr

replace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static|IsStr

return(): string

rev(): static|IsStr

ripos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|IsStr|int|false

rot13(): static|IsStr

rpos(
  string $needle,
  int $offset = 0,
  int|false &$return = null
): static|IsStr|int|false

rtrim(string $characters = " \n\r\t\v\x00"): static|IsStr

serialize(string &$return = null): static|IsStr|string

sha1(bool $binary = false): static|IsStr

shuffle(): static|IsStr

similartext(
  string $string,
  float &$percent = null,
  int &$return = null
): static|IsStr|int

soundex(): static|IsStr

split(
  int $length = 1,
  Arr|IsArr &$return = null
): static|IsStr|Arr|IsArr

spn(
  string $characters,
  int $offset = 0,
  int $length = null,
  int &$return = null
): static|IsStr|int

sprintf(mixed ...$values): static|IsStr

sscanf(
  string $format,
  mixed &...$vars
): Arr|IsArr|int|null

startswith(
  string $needle,
  bool &$return = null
): static|IsStr|bool

str(
  string $needle,
  bool $before_needle = false
): static|IsStr

stripcslashes(): static|IsStr

stripslashes(): static|IsStr

striptags(array|string $allowed_tags = null): static|IsStr

substr(
  array|int $offset,
  array|int $length = null
): static|IsStr

substrcompare(
  string $needle,
  int $offset,
  int $length = null,
  bool $case_insensitive = false,
  int &$return = null
): static|IsStr|int

substrcount(
  string $needle,
  int $offset = 0,
  int $length = null,
  int &$return = null
): static|IsStr|int

substrreplace(
  string $replace,
  int $offset,
  int $length = null
): static|IsStr

tok(string $token): static|IsStr

tolower(): static|IsStr

toupper(): static|IsStr

tr(
  string|array $from,
  ?string $to
): static|IsStr

trim(string $characters = " \n\r\t\v\x00"): static|IsStr

ucfirst(): static|IsStr

ucwords(): static|IsStr

urldecode(): static|IsStr

urlencode(): static|IsStr

vsprintf(array $values): static|IsStr

wordcount(
  int $format = 0,
  string $characters = null,
  Arr|IsArr|int &$return = null
): static|IsStr|Arr|IsArr|int

wordwrap(
  int $width = 75,
  string $break = "\n",
  bool $cut_long_words = false
): static|IsStr
```