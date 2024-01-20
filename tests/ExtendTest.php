<?php

declare(strict_types=1);

use Test\ArrExtend;
use Test\StrExtend;
use WTFramework\Types\Arr;
use WTFramework\Types\Str;

use function WTFramework\Types\arr;
use function WTFramework\Types\str;

it('can extend str', function ()
{

  $str = new StrExtend('test1-test2');

  expect($str->len)
  ->toBe(11);

  $arr = $str->explode('-');

  expect($arr)
  ->toBeInstanceOf(ArrExtend::class);

  expect($arr())
  ->toBe(['test1', 'test2']);

  expect($arr->array(['test'])())
  ->toBe(['test']);

});

it('can extend arr', function ()
{

  $arr = new ArrExtend(['test1', 'test2']);

  expect($arr->count)
  ->toBe(2);

  $str = $arr->implode('-');

  expect($str)
  ->toBeInstanceOf(StrExtend::class);

  expect($str())
  ->toBe('test1-test2');

  expect($str->string('test')())
  ->toBe('test');

});

it('can override str', function ()
{

  expect(str('test-test')->explode('-')::class)
  ->toBe(Arr::class);

  Str::arr(ArrExtend::class);

  expect(str('test-test')->explode('-')::class)
  ->toBe(ArrExtend::class);

});

it('can override arr', function ()
{

  expect(arr(['test-test'])->implode('-')::class)
  ->toBe(Str::class);

  Arr::str(StrExtend::class);

  expect(arr(['test-test'])->implode('-')::class)
  ->toBe(StrExtend::class);

});