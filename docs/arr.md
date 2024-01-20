# What the Framework?! types

## WTFramework\Types\Arr

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