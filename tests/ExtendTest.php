<?php

declare(strict_types=1);

use Test\ArrExtend;
use Test\StrExtend;
use WTFramework\Types\Arr;
use WTFramework\Types\Str;

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

  $arr = new ArrExtend(['camel', 'case']);

  expect($arr->count)
  ->toBe(2);

  $str = $arr->implode(' ');

  expect($str)
  ->toBeInstanceOf(StrExtend::class);

  expect($str())
  ->toBe('camel case');

  expect($str->camelCase()())
  ->toBe('camelCase');

});