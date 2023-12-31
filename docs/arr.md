# What the Framework?! types

## Arr

The `WTFramework\Types\Arr` object is a wrapper around many of PHP's array functions allowing for a fluent interface and a consistent naming system. The rules for method names are:

1. Underscores are removed
2. "array" is removed as a prefix
3. The primary array argument is removed

Many of these methods can be chained to provide more readable code.

```php
arr($array)
->push('item')
->sort();
```
\
Methods that do not require arguments can be called as properties rather than as methods.

```php
arr($array)
->push('item')
->sort;
```
\
Most methods that would return a string will return an instance of `WTFramework\Types\Str` and most methods that would return a number will return an instance of `WTFramework\Types\Num` allowing for further chaining.

```php
arr($array)
->implode(' ');
->ucwords
->explode(' ');
```
\
Most methods that would return something other than the current object allow for a final `$return` argument passed by reference. If provided then the normal return value will be assigned to this variable and the method will return back the current object.

```php
arr($array)
->implode(' ', return: $str1)
->implode('-', return: $str2);
```
\
The `advance` method advances the internal pointer of the array.

```php
arr($array)->advance();
```
\
The `contains` checks if the value exists in an array.

```php
arr($array)->contains(1);
```
\
The `printr` and `vardump` methods allow you to easily call `print_r` and `var_dump` respectively on the array.

```php
arr($array)
->printr
->vardump;
```
\
The `extract` method allows you to easily extract a clone of the current object.

```php
arr($array)
->sort
->extract($sorted)
->rsort
->extract($reverse_sorted);
```
\
There are several ways to instantiate a new instance of `WTFramework\Types\Arr`.

```php
use WTFramework\Types\Arr;
use function WTFramework\Types\arr;

$arr = new Arr(['array']);
$arr = Arr::new(['array']);
$arr = arr(['array']);
```
\
Either use the `return` method or invoke the object as a function to return the array.

```php
$array = $arr->return();
$array = $arr();
```
\
`WTFramework\Types\Arr` implements `ArrayAccess`, `Countable`, `Iterator`, and `Serializable`.

### Static methods

```php
new(array $array = []): static

fill(
  int $start_index,
  int $count,
  mixed $value
): static

range(
  string|int|float $start,
  string|int|float $end,
  int|float $step = 1
): static
```

### Non-static methods

```php
advance(): static

arsort(int $flags = SORT_REGULAR): static

asort(int $flags = SORT_REGULAR): static

changekeycase(int $case = CASE_LOWER): static

chunk(
  int $length,
  bool $preserve_keys = false
): static

column(
  int|string|null $column_key,
  int|string|null $index_key = null
): static

combine(array $values): static

contains(
  mixed $needle,
  bool $strict = false,
  bool &$return = null
): static|bool

count(int $mode = COUNT_NORMAL): int

countvalues(): static

diff(array ...$arrays): static

diffassoc(array ...$arrays): static

diffkey(array ...$arrays): static

diffuassoc(
  callable $key_compare_func,
  array ...$arrays
): static

diffukey(
  callable $key_compare_func,
  array ...$arrays
): static

end(mixed &$return = null): mixed

extract(?self &$var): static

fillkeys(mixed $value): static

filter(
  callable $callback = null,
  int $mode = 0
): static

flip(): static

implode(
  string $delimeter = '',
  Str &$return = null
): static|Str

intersect(array ...$arrays): static

intersectassoc(array ...$arrays): static

intersectkey(array ...$arrays): static

intersectuassoc(
  callable $key_compare_func,
  array ...$arrays
): static

intersectukey(
  callable $key_compare_func,
  array ...$arrays
): static

islist(bool &$return = null): static|bool

jsonencode(
  int $flags = 0,
  int $depth = 512,
  Str &$return = null
): static|Str

key(int|string|null &$return = null): static|int|string|null

keys(
  mixed $filter_value = null,
  bool $strict = false
): static

keyexists(
  string|int $key,
  bool &$return = null
): static|bool

keyfirst(int|string|null &$return = null): static|int|string|null

keylast(int|string|null &$return = null): static|int|string|null

krsort(int $flags = SORT_REGULAR): static

ksort(int $flags = SORT_REGULAR): static

map(
  callable $callback = null,
  array ...$arrays
): static

max(mixed &$return = null): mixed

merge(array ...$arrays): static

mergerecursive(array ...$arrays): static

min(mixed &$return = null): mixed

multisort(
  mixed $array1_sort_order = SORT_ASC,
  mixed $array1_sort_flags = SORT_REGULAR,
  mixed ...$rest
): static

natcasesort(): static

natsort(): static

pad(
  int $length,
  mixed $value
): static

pop(mixed &$return = null): mixed

prev(): static

pregfilter(
  string|array $pattern,
  string|array $replacement,
  int $limit = -1,
  int &$count = null
): static

preggrep(
  string $pattern,
  int $flags = 0
): static

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

pregreplacecallbackarray(
  array $pattern,
  int $limit = -1,
  int &$count = null,
  int $flags = 0
): static

printr(): static

product(int|float &$return = null): static|int|float

push(mixed ...$values): static

rand(
  int $num = 1,
  int|string|array &$return = null
): static|int|string|array

reduce(
  callable $callback,
  mixed $initial = null,
  mixed &$return = null
): mixed

replace(array ...$replacements): static

replacerecursive(array ...$replacements): static

reset(): static

return(): array

reverse(bool $preserve_keys = false): static

rsort(int $flags = SORT_REGULAR): static

search(
  mixed $needle,
  bool $strict = false,
  int|string|false &$return = null
): static|int|string|false

serialize(string &$return = null): static|string

shift(mixed &$return = null): mixed

shuffle(): static

slice(
  int $offset,
  int $length = null,
  bool $preserve_keys = false
): static

sort(): static

splice(
  int $offset,
  int $length = null,
  mixed $replacement = []
): static

strireplace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static

strreplace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static

substrreplace(
  array|string $replace,
  array|int $offset,
  array|int $length = null
): static

sum(int|float &$return = null): static|int|float

uasort(callable $callback): static

udiff(
  callable $value_compare_func,
  array ...$arrays
): static

udiffassoc(
  callable $value_compare_func,
  array ...$arrays
): static

udiffuassoc(
  callable $value_compare_func,
  callable $key_compare_func,
  array ...$arrays
): static

uintersect(
  callable $value_compare_func,
  array ...$arrays
): static

uksort(callable $callback): static

usort(callable $callback): static

unique(int $flags = SORT_STRING): static

unserialize(string $data): static

unshift(mixed ...$values): static

values(): static

vardump(): static

uintersectassoc(
  callable $value_compare_func,
  array ...$arrays
): static

uintersectuassoc(
  callable $value_compare_func,
  callable $key_compare_func,
  array ...$arrays
): static

walk(
  callable $callback,
  mixed $arg = null
): static

walkrecursive(
  callable $callback,
  mixed $arg = null
): static
```