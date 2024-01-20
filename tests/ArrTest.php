<?php

declare(strict_types=1);

use WTFramework\Types\Arr;

use function WTFramework\Types\arr;

it('can invoke', function ()
{

  $arr = new Arr(['test']);

  expect($arr())
  ->toBe(['test']);

});

it('can return', function ()
{

  $arr = new Arr(['test']);

  expect($arr->return())
  ->toBe(['test']);

});

it('can use static new', function ()
{

  $arr = Arr::new(['test']);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr())
  ->toBe(['test']);

});

it('can use function', function ()
{

  $arr = arr(['test']);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr())
  ->toBe(['test']);

});

it('can advance', function ()
{

  $arr = arr([1, 2, 3])->advance();

  $test = [1, 2, 3];

  next($test);

  expect($arr())
  ->toBe($test);

});

it('can arsort', function ()
{

  $arr = arr([1, 2, 3])->arsort();

  $test = [1, 2, 3];

  arsort($test);

  expect($arr())
  ->toBe($test);

});

it('can asort', function ()
{

  $arr = arr([1, 2, 3])->asort();

  $test = [1, 2, 3];

  asort($test);

  expect($arr())
  ->toBe($test);

});

it('can changekeycase', function ()
{

  $arr = arr(['A' => 1, 'B' => 2, 'C' => 3])->changekeycase();

  expect($arr())
  ->toBe(array_change_key_case(['A' => 1, 'B' => 2, 'C' => 3]));

});

it('can chunk', function ()
{

  $arr = arr([1, 2, 3])->chunk(2);

  expect($arr())
  ->toBe(array_chunk([1, 2, 3], 2));

});

it('can column', function ()
{

  $arr = arr([[
    'test' => 1,
  ], [
    'test' => 2,
  ], [
    'test' => 3,
  ]])->column('test');

  expect($arr())
  ->toBe(array_column([[
    'test' => 1,
  ], [
    'test' => 2,
  ], [
    'test' => 3,
  ]], 'test'));

});

it('can combine', function ()
{

  $arr = arr([1, 2, 3])->combine([4, 5, 6]);

  expect($arr())
  ->toBe(array_combine([1, 2, 3], [4, 5, 6]));

});

it('can contains', function ()
{

  expect(arr([1, 2, 3])->contains(2))
  ->toBe($result = in_array(2, [1, 2, 3]));

  $arr = arr([1, 2, 3])->contains(2, return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can count', function ()
{

  expect(arr([1, 2, 3])->count())
  ->toBe(count([1, 2, 3]));

  expect(count(arr([1, 2, 3])))
  ->toBe(count([1, 2, 3]));

});

it('can countvalues', function ()
{

  $arr = arr([1, 2, 3])->countvalues();

  expect($arr())
  ->toBe(array_count_values([1, 2, 3]));

});

it('can current', function ()
{

  expect(arr([1, 2, 3])->current())
  ->toBe(1);

  $arr = arr([1, 2, 3])
  ->current(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe(1);

});

it('can diff', function ()
{

  $arr = arr([1, 2, 3])->diff([2]);

  expect($arr())
  ->toBe(array_diff([1, 2, 3], [2]));

});

it('can diffassoc', function ()
{

  $arr = arr([1, 2, 3])->diffassoc([2]);

  expect($arr())
  ->toBe(array_diff_assoc([1, 2, 3], [2]));

});

it('can diffkey', function ()
{

  $arr = arr([1, 2, 3])->diffkey([2]);

  expect($arr())
  ->toBe(array_diff_key([1, 2, 3], [2]));

});

it('can diffuassoc', function ()
{

  $arr = arr([1, 2, 3])->diffuassoc(fn () => 1);

  expect($arr())
  ->toBe(array_diff_uassoc([1, 2, 3], fn () => 1));

});

it('can diffukey', function ()
{

  $arr = arr([1, 2, 3])->diffukey(fn () => 1);

  expect($arr())
  ->toBe(array_diff_ukey([1, 2, 3], fn () => 1));

});

it('can end', function ()
{

  expect(arr([1, 2, 3])->end())
  ->toBe(3);

  $arr = arr([1, 2, 3])
  ->end(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe(3);

});

it('can fill', function ()
{

  $arr = Arr::fill(0, 6, 0);

  expect($arr())
  ->toBe(array_fill(0, 6, 0));

});

it('can fillkeys', function ()
{

  $arr = arr([1, 2, 3])->fillkeys('test');

  expect($arr())
  ->toBe(array_fill_keys([1, 2, 3], 'test'));

});

it('can filter', function ()
{

  $arr = arr([1, 2, 3])->filter();

  expect($arr())
  ->toBe(array_filter([1, 2, 3]));

});

it('can flip', function ()
{

  $arr = arr([1, 2, 3])->flip();

  expect($arr())
  ->toBe(array_flip([1, 2, 3]));

});

it('can implode', function ()
{

  $arr = arr([1, 2, 3])->implode();

  expect($arr())
  ->toBe(implode([1, 2, 3]));

});

it('can intersect', function ()
{

  $arr = arr([1, 2, 3])->intersect([2]);

  expect($arr())
  ->toBe(array_intersect([1, 2, 3], [2]));

});

it('can intersectassoc', function ()
{

  $arr = arr([1, 2, 3])->intersectassoc([2]);

  expect($arr())
  ->toBe(array_intersect_assoc([1, 2, 3], [2]));

});

it('can intersectkey', function ()
{

  $arr = arr([1, 2, 3])->intersectkey([2]);

  expect($arr())
  ->toBe(array_intersect_key([1, 2, 3], [2]));

});

it('can intersectuassoc', function ()
{

  $arr = arr([1, 2, 3])->intersectuassoc(fn () => 1);

  expect($arr())
  ->toBe(array_intersect_uassoc([1, 2, 3], fn () => 1));

});

it('can intersectukey', function ()
{

  $arr = arr([1, 2, 3])->intersectukey(fn () => 1);

  expect($arr())
  ->toBe(array_intersect_ukey([1, 2, 3], fn () => 1));

});

it('can islist', function ()
{

  expect(arr([1, 2, 3])->islist())
  ->toBe($result = array_is_list([1, 2, 3]));

  $arr = arr([1, 2, 3])->islist(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can jsonencode', function ()
{

  $arr = arr([1, 2, 3])->jsonencode();

  expect($arr())
  ->toBe(json_encode([1, 2, 3]));

});

it('can keys', function ()
{

  $arr = arr([1, 2, 3])->keys();

  expect($arr())
  ->toBe(array_keys([1, 2, 3], ...func_get_args()));

});

it('can keyexists', function ()
{

  expect(arr([1, 2, 3])->keyexists(2))
  ->toBe($result = array_key_exists(2, [1, 2, 3]));

  $arr = arr([1, 2, 3])->keyexists(2, return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can keyfirst', function ()
{

  expect(arr([1, 2, 3])->keyfirst())
  ->toBe($result = array_key_first([1, 2, 3]));

  $arr = arr([1, 2, 3])->keyfirst(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can keylast', function ()
{

  expect(arr([1, 2, 3])->keylast())
  ->toBe($result = array_key_last([1, 2, 3]));

  $arr = arr([1, 2, 3])->keylast(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can krsort', function ()
{

  $arr = arr([1, 2, 3])->krsort();

  $test = [1, 2, 3];

  krsort($test);

  expect($arr())
  ->toBe($test);

});

it('can ksort', function ()
{

  $arr = arr([1, 2, 3])->ksort();

  $test = [1, 2, 3];

  ksort($test);

  expect($arr())
  ->toBe($test);

});

it('can map', function ()
{

  $arr = arr([1, 2, 3])->map(fn ($n) => $n * 2);

  expect($arr())
  ->toBe(array_map(fn ($n) => $n * 2, [1, 2, 3]));

});

it('can merge', function ()
{

  $arr = arr([1, 2, 3])->merge([2]);

  expect($arr())
  ->toBe(array_merge([1, 2, 3], [2]));

});

it('can mergerecursive', function ()
{

  $arr = arr([1, 2, 3])->mergerecursive([2]);

  expect($arr())
  ->toBe(array_merge_recursive([1, 2, 3], [2]));

});

it('can multisort', function ()
{

  $arr = arr([1, 2, 3])->multisort();

  $test = [1, 2, 3];

  array_multisort([1, 2, 3]);

  expect($arr())
  ->toBe($test);

});

it('can natcasesort', function ()
{

  $arr = arr([1, 2, 3])->natcasesort();

  $test = [1, 2, 3];

  natcasesort($test);

  expect($arr())
  ->toBe($test);

});

it('can natsort', function ()
{

  $arr = arr([1, 2, 3])->natsort();

  $test = [1, 2, 3];

  natsort($test);

  expect($arr())
  ->toBe($test);

});

it('can pad', function ()
{

  $arr = arr([1, 2, 3])->pad(6, ' ');

  expect($arr())
  ->toBe(array_pad([1, 2, 3], 6, ' '));

});

it('can pop', function ()
{

  $num = arr([1, 2, 3])->pop();

  expect($num)
  ->toBe(3);

  $arr = arr([1, 2, 3])
  ->pop(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr())
  ->toBe([1, 2]);

  expect($return)
  ->toBe(3);

});

it('can prev', function ()
{

  $arr = arr([1, 2, 3])->prev();

  $test = [1, 2, 3];

  prev($test);

  expect($arr())
  ->toBe($test);

});

it('can pregfilter', function ()
{

  $arr = arr([1, 2, 3])->pregfilter('/2/', '3');

  expect($arr())
  ->toBe(preg_filter('/2/', '3', [1, 2, 3]));

});

it('can preggrep', function ()
{

  $arr = arr([1, 2, 3])->preggrep('/2/');

  expect($arr())
  ->toBe(preg_grep('/2/', [1, 2, 3]));

});

it('can pregreplace', function ()
{

  $arr = arr([1, 2, 3])->pregreplace('/2/', '3');

  expect($arr())
  ->toBe(preg_replace('/2/', '3', [1, 2, 3]));

});

it('can pregreplacecallback', function ()
{

  $arr = arr([1, 2, 3])->pregreplacecallback('/2/', fn () => 3);

  expect($arr())
  ->toBe(preg_replace_callback('/2/', fn () => 3, [1, 2, 3]));

});

it('can pregreplcatecallbackarray', function ()
{

  $arr = arr([1, 2, 3])->pregreplacecallbackarray(['/2/' => fn () => 3]);

  expect($arr())
  ->toBe(preg_replace_callback_array(['/2/' => fn () => 3], [1, 2, 3]));

});

it('can printr', function ()
{

  $this->expectOutputString(print_r([1, 2, 3], true));

  arr([1, 2, 3])->printr();

});

it('can product', function ()
{

  expect(arr([1, 2, 3])->product())
  ->toBe($result = array_product([1, 2, 3]));

  $arr = arr([1, 2, 3])->product(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can push', function ()
{

  $arr = arr([1, 2, 3])->push(2);

  $test = [1, 2, 3];

  array_push($test, 2);

  expect($arr())
  ->toBe($test);

});

it('can rand', function ()
{

  expect(arr([1, 2, 3])->rand())
  ->toBeInt();

  $arr = arr([1, 2, 3])->rand(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBeInt();

});

it('can range', function ()
{

  $arr = Arr::range(0, 2, 1);

  expect($arr())
  ->toBe(range(0, 2, 1));

});

it('can reduce', function ()
{

  expect(arr([1, 2, 3])->reduce(fn () => 1))
  ->toBe($result = array_reduce([1, 2, 3], fn () => 1));

  $arr = arr([1, 2, 3])->reduce(fn () => 1, return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can replace', function ()
{

  $arr = arr([1, 2, 3])->replace([2]);

  expect($arr())
  ->toBe(array_replace([1, 2, 3], [2]));

});

it('can replacerecursive', function ()
{

  $arr = arr([1, 2, 3])->replacerecursive([2]);

  expect($arr())
  ->toBe(array_replace_recursive([1, 2, 3], [2]));

});

it('can reset', function ()
{

  $arr = arr([1, 2, 3])->reset();

  $test = [1, 2, 3];

  reset($test);

  expect($arr())
  ->toBe($test);

});

it('can reverse', function ()
{

  $arr = arr([1, 2, 3])->reverse();

  expect($arr())
  ->toBe(array_reverse([1, 2, 3]));

});

it('can rsort', function ()
{

  $arr = arr([1, 2, 3])->rsort();

  $test = [1, 2, 3];

  rsort($test);

  expect($arr())
  ->toBe($test);

});

it('can search', function ()
{

  expect(arr([1, 2, 3])->search(2))
  ->toBe($result = array_search(2, [1, 2, 3]));

  $arr = arr([1, 2, 3])->search(2, return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can serialize', function ()
{

  expect(arr([1, 2, 3])->serialize())
  ->toBe($result = serialize([1, 2, 3]));

  $arr = arr([1, 2, 3])->serialize(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can shift', function ()
{

  $test = [1, 2, 3];

  expect(arr([1, 2, 3])->shift())
  ->toBe($result = array_shift($test));

  $arr = arr([1, 2, 3])->shift(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can shuffle', function ()
{

  $arr = arr([1, 2, 3])->shuffle();

  $test = [1, 2, 3];

  shuffle($test);

  sort($test);

  expect($arr->sort()())
  ->toBe($test);

});

it('can slice', function ()
{

  $arr = arr([1, 2, 3])->slice(2);

  expect($arr())
  ->toBe(array_slice([1, 2, 3], 2));

});

it('can sort', function ()
{

  $arr = arr([1, 2, 3])->sort();

  $test = [1, 2, 3];

  sort($test);

  expect($arr())
  ->toBe($test);

});

it('can splice', function ()
{

  $arr = arr([1, 2, 3])->splice(2);

  $test = [1, 2, 3];

  array_splice($test, 2);

  expect($arr())
  ->toBe($test);

});

it('can strireplace', function ()
{

  $arr = arr([1, 2, 3])->strireplace([2], [3]);

  expect($arr())
  ->toBe(str_ireplace([2], [3], [1, 2, 3]));

});

it('can strreplace', function ()
{

  $arr = arr([1, 2, 3])->strreplace([2], [3]);

  expect($arr())
  ->toBe(str_replace([2], [3], [1, 2, 3]));

});

it('can substrreplace', function ()
{

  $arr = arr([1, 2, 3])->substrreplace([2], [3]);

  expect($arr())
  ->toBe(substr_replace([1, 2, 3], [2], [3]));

});

it('can sum', function ()
{

  expect(arr([1, 2, 3])->sum())
  ->toBe($result = array_sum([1, 2, 3]));

  $arr = arr([1, 2, 3])->sum(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe($result);

});

it('can uasort', function ()
{

  $arr = arr([1, 2, 3])->uasort(fn () => 1);

  $test = [1, 2, 3];

  uasort($test, fn () => 1);

  expect($arr())
  ->toBe($test);

});

it('can udiff', function ()
{

  $arr = arr([1, 2, 3])->udiff(fn () => 1);

  expect($arr())
  ->toBe(array_udiff([1, 2, 3], fn () => 1));

});

it('can udiffassoc', function ()
{

  $arr = arr([1, 2, 3])->udiffassoc(fn () => 1);

  expect($arr())
  ->toBe(array_udiff_assoc([1, 2, 3], fn () => 1));

});

it('can udiffuassoc', function ()
{

  $arr = arr([1, 2, 3])->udiffuassoc(fn () => 1, fn () => 0);

  expect($arr())
  ->toBe(array_udiff_uassoc([1, 2, 3], fn () => 1, fn () => 0));

});

it('can uintersect', function ()
{

  $arr = arr([1, 2, 3])->uintersect(fn () => 1);

  expect($arr())
  ->toBe(array_uintersect([1, 2, 3], fn () => 1));

});

it('can uksort', function ()
{

  $arr = arr([1, 2, 3])->uksort(fn () => 1);

  $test = [1, 2, 3];

  uksort($test, fn () => 1);

  expect($arr())
  ->toBe($test);

});

it('can usort', function ()
{

  $arr = arr([1, 2, 3])->usort(fn () => 1);

  $test = [1, 2, 3];

  usort($test, fn () => 1);

  expect($arr())
  ->toBe($test);

});

it('can unique', function ()
{

  $arr = arr([1, 2, 3])->unique();

  expect($arr())
  ->toBe(array_unique([1, 2, 3]));

});

it('can unserialize', function ()
{

  $arr = arr()->unserialize(serialize([1, 2, 3]));

  expect($arr())
  ->toBe(unserialize(serialize([1, 2, 3])));

});

it('can unshift', function ()
{

  $arr = arr([1, 2, 3])->unshift();

  $test = [1, 2, 3];

  array_unshift($test);

  expect($arr())
  ->toBe($test);

});

it('can values', function ()
{

  $arr = arr([1, 2, 3])->values();

  expect($arr())
  ->toBe(array_values([1, 2, 3]));

});

it('can vardump', function ()
{

  $this->expectOutputString("array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
");

  arr([1, 2, 3])->vardump();

});

it('can uintersectassoc', function ()
{

  $arr = arr([1, 2, 3])->uintersectassoc(fn () => 1);

  expect($arr())
  ->toBe(array_uintersect_assoc([1, 2, 3], fn () => 1));

});

it('can uintersectuassoc', function ()
{

  $arr = arr([1, 2, 3])->uintersectuassoc(fn () => 1, fn () => 0);

  expect($arr())
  ->toBe(array_uintersect_uassoc([1, 2, 3], fn () => 1, fn () => 0));

});

it('can walk', function ()
{

  $arr = arr([1, 2, 3])->walk(fn () => 1);

  $test = [1, 2, 3];

  array_walk($test, fn () => 1);

  expect($arr())
  ->toBe($test);

});

it('can walkrecursive', function ()
{

  $arr = arr([1, 2, 3])->walkrecursive(fn () => 1);

  $test = [1, 2, 3];

  array_walk_recursive($test, fn () => 1);

  expect($arr())
  ->toBe($test);

});

it('can extract', function ()
{

  $arr1 = arr(['b', 'a'])
  ->extract($arr2)
  ->sort();

  expect($arr1())
  ->toBe(['a', 'b']);

  expect($arr2)
  ->toBeInstanceOf(Arr::class);

  expect($arr2())
  ->toBe(['b', 'a']);

});

it('can max', function ()
{

  $num = arr([0.5, -1.5])
  ->max();

  expect($num)
  ->toBe(0.5);

  $arr = arr([0.5, -1.5])
  ->max(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe(0.5);

});

it('can min', function ()
{

  $num = arr([0.5, -1.5])
  ->min();

  expect($num)
  ->toBe(-1.5);

  $arr = arr([0.5, -1.5])
  ->min(return: $return);

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($return)
  ->toBe(-1.5);

});

it('can use properties as methods', function ()
{

  $arr = arr(['a', 'b'])->sort;

  expect($arr)
  ->toBeInstanceOf(Arr::class);

  expect($arr->count)
  ->toBe(2);

});