<?php

declare(strict_types=1);

use Test\ArrReplace;
use Test\StrReplace;

it('can replace str', function ()
{

  $str = new StrReplace('test1-test2');

  $arr = $str->toArray();

  expect($arr)
  ->toBeInstanceOf(ArrReplace::class);

  expect($arr())
  ->toBe(['test1', 'test2']);

});

it('can replace arr', function ()
{

  $arr = new ArrReplace(['test1', 'test2']);

  $str = $arr->toString();

  expect($str)
  ->toBeInstanceOf(StrReplace::class);

  expect($str())
  ->toBe('test1-test2');

});