# What the Framework?! types

## WTFramework\Types\Arr

### Static methods

```php
new(array $array = []): static|IsArr

fill(
  int $start_index,
  int $count,
  mixed $value
): static|IsArr

range(
  string|int|float $start,
  string|int|float $end,
  int|float $step = 1
): static|IsArr
```

### Non-static methods

```php
advance(): static|IsArr

arsort(int $flags = SORT_REGULAR): static|IsArr

asort(int $flags = SORT_REGULAR): static|IsArr

changekeycase(int $case = CASE_LOWER): static|IsArr

chunk(
  int $length,
  bool $preserve_keys = false
): static|IsArr

column(
  int|string|null $column_key,
  int|string|null $index_key = null
): static|IsArr

combine(array $values): static|IsArr

contains(
  mixed $needle,
  bool $strict = false,
  bool &$return = null
): static|IsArr|bool

count(int $mode = COUNT_NORMAL): int

countvalues(): static|IsArr

diff(array ...$arrays): static|IsArr

diffassoc(array ...$arrays): static|IsArr

diffkey(array ...$arrays): static|IsArr

diffuassoc(
  callable $key_compare_func,
  array ...$arrays
): static|IsArr

diffukey(
  callable $key_compare_func,
  array ...$arrays
): static|IsArr

end(mixed &$return = null): mixed

extract(?self &$var): static|IsArr

fillkeys(mixed $value): static|IsArr

filter(
  callable $callback = null,
  int $mode = 0
): static|IsArr

flip(): static|IsArr

implode(
  string $delimeter = '',
  Str|IsStr &$return = null
): static|IsArr|Str|IsStr

intersect(array ...$arrays): static|IsArr

intersectassoc(array ...$arrays): static|IsArr

intersectkey(array ...$arrays): static|IsArr

intersectuassoc(
  callable $key_compare_func,
  array ...$arrays
): static|IsArr

intersectukey(
  callable $key_compare_func,
  array ...$arrays
): static|IsArr

islist(bool &$return = null): static|IsArr|bool

jsonencode(
  int $flags = 0,
  int $depth = 512,
  Str|IsStr &$return = null
): static|IsArr|Str|IsStr

key(int|string|null &$return = null): static|IsArr|int|string|null

keys(
  mixed $filter_value = null,
  bool $strict = false
): static|IsArr

keyexists(
  string|int $key,
  bool &$return = null
): static|IsArr|bool

keyfirst(int|string|null &$return = null): static|IsArr|int|string|null

keylast(int|string|null &$return = null): static|IsArr|int|string|null

krsort(int $flags = SORT_REGULAR): static|IsArr

ksort(int $flags = SORT_REGULAR): static|IsArr

map(
  callable $callback = null,
  array ...$arrays
): static|IsArr

max(mixed &$return = null): mixed

merge(array ...$arrays): static|IsArr

mergerecursive(array ...$arrays): static|IsArr

min(mixed &$return = null): mixed

multisort(
  mixed $array1_sort_order = SORT_ASC,
  mixed $array1_sort_flags = SORT_REGULAR,
  mixed ...$rest
): static|IsArr

natcasesort(): static|IsArr

natsort(): static|IsArr

pad(
  int $length,
  mixed $value
): static|IsArr

pop(mixed &$return = null): mixed

prev(): static|IsArr

pregfilter(
  string|array $pattern,
  string|array $replacement,
  int $limit = -1,
  int &$count = null
): static|IsArr

preggrep(
  string $pattern,
  int $flags = 0
): static|IsArr

pregreplace(
  string|array $pattern,
  string|array $replacement,
  int $limit = -1,
  int &$count = null
): static|IsArr

pregreplacecallback(
  string|array $pattern,
  callable $callback,
  int $limit = -1,
  int &$count = null,
  int $flags = 0
): static|IsArr

pregreplacecallbackarray(
  array $pattern,
  int $limit = -1,
  int &$count = null,
  int $flags = 0
): static|IsArr

printr(): static|IsArr

product(int|float &$return = null): static|IsArr|int|float

push(mixed ...$values): static|IsArr

rand(
  int $num = 1,
  int|string|array &$return = null
): static|IsArr|int|string|array

reduce(
  callable $callback,
  mixed $initial = null,
  mixed &$return = null
): mixed

replace(array ...$replacements): static|IsArr

replacerecursive(array ...$replacements): static|IsArr

reset(): static|IsArr

return(): array

reverse(bool $preserve_keys = false): static|IsArr

rsort(int $flags = SORT_REGULAR): static|IsArr

search(
  mixed $needle,
  bool $strict = false,
  int|string|false &$return = null
): static|IsArr|int|string|false

serialize(string &$return = null): static|IsArr|string

shift(mixed &$return = null): mixed

shuffle(): static|IsArr

slice(
  int $offset,
  int $length = null,
  bool $preserve_keys = false
): static|IsArr

sort(): static|IsArr

splice(
  int $offset,
  int $length = null,
  mixed $replacement = []
): static|IsArr

strireplace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static|IsArr

strreplace(
  array|string $search,
  array|string $replace,
  int &$count = null
): static|IsArr

substrreplace(
  array|string $replace,
  array|int $offset,
  array|int $length = null
): static|IsArr

sum(int|float &$return = null): static|IsArr|int|float

uasort(callable $callback): static|IsArr

udiff(
  callable $value_compare_func,
  array ...$arrays
): static|IsArr

udiffassoc(
  callable $value_compare_func,
  array ...$arrays
): static|IsArr

udiffuassoc(
  callable $value_compare_func,
  callable $key_compare_func,
  array ...$arrays
): static|IsArr

uintersect(
  callable $value_compare_func,
  array ...$arrays
): static|IsArr

uksort(callable $callback): static|IsArr

usort(callable $callback): static|IsArr

unique(int $flags = SORT_STRING): static|IsArr

unserialize(string $data): static|IsArr

unshift(mixed ...$values): static|IsArr

values(): static|IsArr

vardump(): static|IsArr

uintersectassoc(
  callable $value_compare_func,
  array ...$arrays
): static|IsArr

uintersectuassoc(
  callable $value_compare_func,
  callable $key_compare_func,
  array ...$arrays
): static|IsArr

walk(
  callable $callback,
  mixed $arg = null
): static|IsArr

walkrecursive(
  callable $callback,
  mixed $arg = null
): static|IsArr
```