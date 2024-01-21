<?php

declare(strict_types=1);

namespace WTFramework\Types;

use ArrayAccess;
use Countable;
use Iterator;
use Serializable;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

class Arr implements IsArr, ArrayAccess, Countable, Iterator, Serializable
{

  protected static string $str = Str::class;

  public function __construct(protected array $array = []) {}

  public static function new(array $array = []): static|IsArr
  {
    return new static(array: $array);
  }

  public static function str(string $str): void
  {
    static::$str = $str;
  }

  protected function convert(mixed $value): mixed
  {

    switch (true)
    {

      case is_array($value):
        return new Arr(array: $value);

      case is_string($value):
        return new static::$str(string: $value);

      default:
        return $value;

    }
  }

  public function advance(): static|IsArr
  {

    next($this->array);

    return $this;

  }

  public function arsort(int $flags = SORT_REGULAR): static|IsArr
  {

    arsort($this->array, $flags);

    return $this;

  }

  public function asort(int $flags = SORT_REGULAR): static|IsArr
  {

    asort($this->array, $flags);

    return $this;

  }

  public function changekeycase(int $case = CASE_LOWER): static|IsArr
  {

    $this->array = array_change_key_case($this->array, $case);

    return $this;

  }

  public function chunk(
    int $length,
    bool $preserve_keys = false
  ): static|IsArr
  {

    $this->array = array_chunk($this->array, $length, $preserve_keys);

    return $this;

  }

  public function column(
    int|string|null $column_key,
    int|string|null $index_key = null
  ): static|IsArr
  {

    $this->array = array_column($this->array, $column_key, $index_key);

    return $this;

  }

  public function combine(array $values): static|IsArr
  {

    $this->array = array_combine($this->array, $values);

    return $this;

  }

  public function contains(
    mixed $needle,
    bool $strict = false,
    bool &$return = null
  ): static|IsArr|bool
  {

    $return = in_array($needle, $this->array, $strict);

    return 3 === func_num_args() ? $this : $return;

  }

  public function count(int $mode = COUNT_NORMAL): int
  {
    return count($this->array, $mode);
  }

  public function countvalues(): static|IsArr
  {

    $this->array = array_count_values($this->array);

    return $this;

  }

  public function current(mixed &$return = null): mixed
  {

    $return = $this->convert(current($this->array));

    return func_num_args() ? $this : $return;

  }

  public function diff(array ...$arrays): static|IsArr
  {

    $this->array = array_diff($this->array, ...$arrays);

    return $this;

  }

  public function diffassoc(array ...$arrays): static|IsArr
  {

    $this->array = array_diff_assoc($this->array, ...$arrays);

    return $this;

  }

  public function diffkey(array ...$arrays): static|IsArr
  {

    $this->array = array_diff_key($this->array, ...$arrays);

    return $this;

  }

  public function diffuassoc(
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $key_compare_func;

    $this->array = array_diff_uassoc($this->array, ...$arrays);

    return $this;

  }

  public function diffukey(
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $key_compare_func;

    $this->array = array_diff_ukey($this->array, ...$arrays);

    return $this;

  }

  public function end(mixed &$return = null): mixed
  {

    $return = $this->convert(end($this->array));

    return func_num_args() ? $this : $return;

  }

  public function extract(?self &$var): static|IsArr
  {

    $var = clone $this;

    return $this;

  }

  public static function fill(
    int $start_index,
    int $count,
    mixed $value
  ): static|IsArr
  {
    return new static(array_fill($start_index, $count, $value));
  }

  public function fillkeys(mixed $value): static|IsArr
  {

    $this->array = array_fill_keys($this->array, $value);

    return $this;

  }

  public function filter(
    callable $callback = null,
    int $mode = 0
  ): static|IsArr
  {

    $this->array = array_filter($this->array, $callback, $mode);

    return $this;

  }

  public function flip(): static|IsArr
  {

    $this->array = array_flip($this->array);

    return $this;

  }

  public function implode(
    string $delimeter = '',
    Str|IsStr &$return = null
  ): static|IsArr|Str|IsStr
  {

    $return = new static::$str(string: implode($delimeter, $this->array));

    return 2 === func_num_args() ? $this : $return;

  }

  public function intersect(array ...$arrays): static|IsArr
  {

    $this->array = array_intersect($this->array, ...$arrays);

    return $this;

  }

  public function intersectassoc(array ...$arrays): static|IsArr
  {

    $this->array = array_intersect_assoc($this->array, ...$arrays);

    return $this;

  }

  public function intersectkey(array ...$arrays): static|IsArr
  {

    $this->array = array_intersect_key($this->array, ...$arrays);

    return $this;

  }

  public function intersectuassoc(
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $key_compare_func;

    $this->array = array_intersect_uassoc($this->array, ...$arrays);

    return $this;

  }

  public function intersectukey(
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $key_compare_func;

    $this->array = array_intersect_ukey($this->array, ...$arrays);

    return $this;

  }

  public function islist(bool &$return = null): static|IsArr|bool
  {

    $return = array_is_list($this->array);

    return func_num_args() ? $this : $return;

  }

  public function jsonencode(
    int $flags = 0,
    int $depth = 512,
    Str|IsStr &$return = null
  ): static|IsArr|Str|IsStr
  {

    $return = new static::$str(string: (string) json_encode($this->array, $flags, $depth));

    return 3 === func_num_args() ? $this : $return;

  }

  public function key(int|string|null &$return = null): static|IsArr|int|string|null
  {

    $return = key($this->array);

    return func_num_args() ? $this : $return;

  }

  public function keys(
    mixed $filter_value = null,
    bool $strict = false
  ): static|IsArr
  {

    $this->array = array_keys($this->array, ...func_get_args());

    return $this;

  }

  public function keyexists(
    string|int $key,
    bool &$return = null
  ): static|IsArr|bool
  {

    $return = array_key_exists($key, $this->array);

    return 2 === func_num_args() ? $this : $return;

  }

  public function keyfirst(int|string|null &$return = null): static|IsArr|int|string|null
  {

    $return = array_key_first($this->array);

    return func_num_args() ? $this : $return;

  }

  public function keylast(int|string|null &$return = null): static|IsArr|int|string|null
  {

    $return = array_key_last($this->array);

    return func_num_args() ? $this : $return;

  }

  public function krsort(int $flags = SORT_REGULAR): static|IsArr
  {

    krsort($this->array, $flags);

    return $this;

  }

  public function ksort(int $flags = SORT_REGULAR): static|IsArr
  {

    ksort($this->array, $flags);

    return $this;

  }

  public function map(
    callable $callback = null,
    array ...$arrays
  ): static|IsArr
  {

    $this->array = array_map($callback, $this->array, ...$arrays);

    return $this;

  }

  public function max(mixed &$return = null): mixed
  {

    $return = $this->convert(max($this->array));

    return func_num_args() ? $this : $return;

  }

  public function merge(array ...$arrays): static|IsArr
  {

    $this->array = array_merge($this->array, ...$arrays);

    return $this;

  }

  public function mergerecursive(array ...$arrays): static|IsArr
  {

    $this->array = array_merge_recursive($this->array, ...$arrays);

    return $this;

  }

  public function min(mixed &$return = null): mixed
  {

    $return = $this->convert(min($this->array));

    return func_num_args() ? $this : $return;

  }

  public function multisort(
    mixed $array1_sort_order = SORT_ASC,
    mixed $array1_sort_flags = SORT_REGULAR,
    mixed ...$rest
  ): static|IsArr
  {

    array_multisort(
      $this->array,
      $array1_sort_order,
      $array1_sort_flags,
      ...$rest
    );

    return $this;

  }

  public function natcasesort(): static|IsArr
  {

    natcasesort($this->array);

    return $this;

  }

  public function natsort(): static|IsArr
  {

    natsort($this->array);

    return $this;

  }

  public function next(): void
  {
    next($this->array);
  }

  public function offsetExists(mixed $offset): bool
  {
    return isset($this->array[$offset]);
  }

  public function offsetGet(mixed $offset): mixed
  {
    return $this->convert($this->array[$offset] ?? null);
  }

  public function offsetSet(
    mixed $offset,
    mixed $value
  ): void
  {
    null === $offset ? $this->array[] = $value : $this->array[$offset] = $value;
  }

  public function offsetUnset(mixed $offset): void
  {
    unset($this->array[$offset]);
  }

  public function pad(
    int $length,
    mixed $value
  ): static|IsArr
  {

    $this->array = array_pad($this->array, $length, $value);

    return $this;

  }

  public function pop(mixed &$return = null): mixed
  {

    $return = $this->convert(array_pop($this->array));

    return func_num_args() ? $this : $return;

  }

  public function prev(): static|IsArr
  {

    prev($this->array);

    return $this;

  }

  public function pregfilter(
    string|array $pattern,
    string|array $replacement,
    int $limit = -1,
    int &$count = null
  ): static|IsArr
  {

    $this->array = (array) preg_filter(
      $pattern,
      $replacement,
      $this->array,
      $limit,
      $count
    );

    return $this;

  }

  public function preggrep(
    string $pattern,
    int $flags = 0
  ): static|IsArr
  {

    $this->array = (array) preg_grep($pattern, $this->array, $flags);

    return $this;

  }

  public function pregreplace(
    string|array $pattern,
    string|array $replacement,
    int $limit = -1,
    int &$count = null
  ): static|IsArr
  {

    $this->array = (array) preg_replace(
      $pattern,
      $replacement,
      $this->array,
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
  ): static|IsArr
  {

    $this->array = (array) preg_replace_callback(
      $pattern,
      $callback,
      $this->array,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

  public function pregreplacecallbackarray(
    array $pattern,
    int $limit = -1,
    int &$count = null,
    int $flags = 0
  ): static|IsArr
  {

    $this->array = (array) preg_replace_callback_array(
      $pattern,
      $this->array,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

  public function printr(): static|IsArr
  {

    print_r($this->array);

    return $this;

  }

  public function product(int|float &$return = null): static|IsArr|int|float
  {

    $return = array_product($this->array);

    return func_num_args() ? $this : $return;
  }

  public function push(mixed ...$values): static|IsArr
  {

    array_push($this->array, ...$values);

    return $this;

  }

  public function rand(
    int $num = 1,
    int|string|array &$return = null
  ): static|IsArr|int|string|array
  {

    $return = array_rand($this->array, $num);

    return 2 === func_num_args() ? $this : $return;

  }

  public static function range(
    string|int|float $start,
    string|int|float $end,
    int|float $step = 1
  ): static|IsArr
  {
    return new static(array: range($start, $end, $step));
  }

  public function reduce(
    callable $callback,
    mixed $initial = null,
    mixed &$return = null
  ): mixed
  {

    $return = array_reduce($this->array, $callback, $initial);

    return 3 === func_num_args() ? $this : $return;

  }

  public function replace(array ...$replacements): static|IsArr
  {

    $this->array = array_replace($this->array, ...$replacements);

    return $this;

  }

  public function replacerecursive(array ...$replacements): static|IsArr
  {

    $this->array = array_replace_recursive($this->array, ...$replacements);

    return $this;

  }

  public function reset(): static|IsArr
  {

    reset($this->array);

    return $this;

  }

  public function return(): array
  {
    return $this->array;
  }

  public function reverse(bool $preserve_keys = false): static|IsArr
  {

    $this->array = array_reverse($this->array, $preserve_keys);

    return $this;

  }

  public function rewind(): void
  {
    reset($this->array);
  }

  public function rsort(int $flags = SORT_REGULAR): static|IsArr
  {

    rsort($this->array, $flags);

    return $this;

  }

  public function search(
    mixed $needle,
    bool $strict = false,
    int|string|false &$return = null
  ): static|IsArr|int|string|false
  {

    $return = array_search($needle, $this->array, $strict);

    return 3 === func_num_args() ? $this : $return;

  }

  public function serialize(string &$return = null): static|IsArr|string
  {

    $return = serialize($this->array);

    return func_num_args() ? $this : $return;

  }

  public function shift(mixed &$return = null): mixed
  {

    $return = array_shift($this->array);

    return func_num_args() ? $this : $return;

  }

  public function shuffle(): static|IsArr
  {

    shuffle($this->array);

    return $this;

  }

  public function slice(
    int $offset,
    int $length = null,
    bool $preserve_keys = false
  ): static|IsArr
  {

    $this->array = array_slice($this->array, $offset, $length, $preserve_keys);

    return $this;

  }

  public function sort(): static|IsArr
  {

    sort($this->array);

    return $this;

  }

  public function splice(
    int $offset,
    int $length = null,
    mixed $replacement = []
  ): static|IsArr
  {

    array_splice(
      $this->array,
      $offset,
      $length,
      $replacement
    );

    return $this;


  }

  public function strireplace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static|IsArr
  {

    $this->array = str_ireplace($search, $replace, $this->array, $count);

    return $this;

  }

  public function strreplace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static|IsArr
  {

    $this->array = str_replace($search, $replace, $this->array, $count);

    return $this;

  }

  public function substrreplace(
    array|string $replace,
    array|int $offset,
    array|int $length = null
  ): static|IsArr
  {

    $this->array = substr_replace($this->array, $replace, $offset, $length);

    return $this;

  }

  public function sum(int|float &$return = null): static|IsArr|int|float
  {

    $return = array_sum($this->array);

    return func_num_args() ? $this : $return;

  }

  public function uasort(callable $callback): static|IsArr
  {

    uasort($this->array, $callback);

    return $this;

  }

  public function udiff(
    callable $value_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;

    $this->array = array_udiff($this->array, ...$arrays);

    return $this;

  }

  public function udiffassoc(
    callable $value_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;

    $this->array = array_udiff_assoc($this->array, ...$arrays);

    return $this;

  }

  public function udiffuassoc(
    callable $value_compare_func,
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;
    $arrays[] = $key_compare_func;

    $this->array = array_udiff_uassoc($this->array, ...$arrays);

    return $this;

  }

  public function uintersect(
    callable $value_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;

    $this->array = array_uintersect($this->array, ...$arrays);

    return $this;

  }

  public function uksort(callable $callback): static|IsArr
  {

    uksort($this->array, $callback);

    return $this;

  }

  public function usort(callable $callback): static|IsArr
  {

    usort($this->array, $callback);

    return $this;

  }

  public function unique(int $flags = SORT_STRING): static|IsArr
  {

    $this->array = array_unique($this->array, $flags);

    return $this;

  }

  public function unserialize(string $data): static|IsArr
  {

    $this->array = (array) unserialize($data);

    return $this;

  }

  public function unshift(mixed ...$values): static|IsArr
  {

    array_unshift($this->array, ...$values);

    return $this;

  }

  public function valid(): bool
  {
    return null !== key($this->array);
  }

  public function values(): static|IsArr
  {

    $this->array = array_values($this->array);

    return $this;

  }

  public function vardump(): static|IsArr
  {

    var_dump($this->array);

    return $this;

  }

  public function uintersectassoc(
    callable $value_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;

    $this->array = array_uintersect_assoc($this->array, ...$arrays);

    return $this;

  }

  public function uintersectuassoc(
    callable $value_compare_func,
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;
    $arrays[] = $key_compare_func;

    $this->array = array_uintersect_uassoc($this->array, ...$arrays);

    return $this;

  }

  public function walk(
    callable $callback,
    mixed $arg = null
  ): static|IsArr
  {

    array_walk($this->array, $callback, $arg);

    return $this;

  }

  public function walkrecursive(
    callable $callback,
    mixed $arg = null
  ): static|IsArr
  {

    array_walk_recursive($this->array, $callback, $arg);

    return $this;

  }

  public function __serialize(): array
  {
    return $this->array;
  }

  public function __unserialize(array $data): void
  {
    $this->array = $data;
  }

  public function __get(string $name): mixed
  {
    return $this->$name();
  }

  public function __invoke(): array
  {
    return $this->array;
  }

}