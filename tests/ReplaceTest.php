<?php

declare(strict_types=1);

use Test\ArrReplace;
use Test\StrReplace;
use WTFramework\Types\Arr;
use WTFramework\Types\Str;

use function WTFramework\Types\arr;
use function WTFramework\Types\str;

it('can replace str', function ()
{

  Arr::str(StrReplace::class);

  $str = arr(['test1', 'test2'])
  ->implode('-');

  expect($str)
  ->toBeInstanceOf(StrReplace::class);

  expect($str())
  ->toBe('test1-test2');

  $arr = $str->toArray();

  expect($arr)
  ->toBeInstanceOf(ArrReplace::class);

  expect($arr())
  ->toBe(['test1', 'test2']);

});

it('can replace arr', function ()
{

  Str::arr(ArrReplace::class);

  $arr = str('test1-test2')
  ->explode('-');

  expect($arr)
  ->toBeInstanceOf(ArrReplace::class);

  expect($arr())
  ->toBe(['test1', 'test2']);

  $str = $arr->toString();

  expect($str)
  ->toBeInstanceOf(StrReplace::class);

  expect($str())
  ->toBe('test1-test2');

});