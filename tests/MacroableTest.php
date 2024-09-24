<?php

declare(strict_types=1);

use WTFramework\Types\Arr;
use WTFramework\Types\Num;
use WTFramework\Types\Str;

use function WTFramework\Types\arr;
use function WTFramework\Types\num;
use function WTFramework\Types\str;

it("can add macro to arr", function ()
{

  Arr::macro("append", function (mixed $value)
  {

    $this->array[] = $value;

    return $this;

  });

  expect(arr([1, 2, 3])->append(4)())
  ->toBe([1, 2, 3, 4]);

});

it("can add static macro to arr", function ()
{

  Arr::macro("toArray", function (mixed $value)
  {
    return arr((array) $value);
  });

  expect(Arr::toArray(1)())
  ->toBe([1]);

});

it("can add macro to str", function ()
{

  Str::macro("prefix", function (string $prefix)
  {

    $this->string = "$prefix$this->string";

    return $this;

  });

  expect(str("test")->prefix("123")())
  ->toBe("123test");

});

it("can add static macro to str", function ()
{

  Str::macro("camelCase", function (string $string)
  {

    return str($string)
    ->ucwords()
    ->replace(" ", "")
    ->lcfirst();

  });

  expect(Str::camelCase("test test")())
  ->toBe("testTest");

});

it("can add macro to num", function ()
{

  Num::macro("add", function (int|float $num)
  {

    $this->num += $num;

    return $this;

  });

  expect(num(1)->add(2)())
  ->toBe(3);

});

it("can add static macro to num", function ()
{

  Num::macro("subtract", function (int|float $num1, int|float $num2)
  {
    return num($num1 - $num2);
  });

  expect(Num::subtract(3, 2)())
  ->toBe(1);

});

it("can throw bad method call call exception", function ()
{
  Str::test();
})
->throws(BadMethodCallException::class);