<?php

declare(strict_types=1);

namespace WTFramework\Types;

function arr(array $array = []): Arr
{
  return new Arr(array: $array);
}

function num(int|float $number = 0.00): Num
{
  return new Num(num: $number);
}

function str(string $string = ''): Str
{
  return new Str(string: $string);
}