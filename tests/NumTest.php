<?php

declare(strict_types=1);

use WTFramework\Types\Num;

use function WTFramework\Types\num;

it("can invoke", function ()
{

  $num = new Num(1.5);

  expect($num())
  ->toBe(1.5);

});

it("can return", function ()
{

  $num = new Num(1.5);

  expect($num->return())
  ->toBe(1.5);

});

it("can use static new", function ()
{

  $num = Num::new(1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(1.5);

});

it("can use function", function ()
{

  $num = num(1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(1.5);

});

it("can cast to string", function ()
{

  $num = num(-1.5);

  expect((string) $num)
  ->toBe("-1.5");

});

test("abs", function ()
{

  $num = num(-1.5)->abs();

  expect($num())
  ->toBe(abs(-1.5));

});

test("acos", function ()
{

  $num = num(0.5)->acos();

  expect($num())
  ->toBe(acos(0.5));

});

test("acosh", function ()
{

  $num = num(1.5)->acosh();

  expect($num())
  ->toBe(acosh(1.5));

});

test("asin", function ()
{

  $num = num(0.5)->asin();

  expect($num())
  ->toBe(asin(0.5));

});

test("asinh", function ()
{

  $num = num(1.5)->asinh();

  expect($num())
  ->toBe(asinh(1.5));

});

test("atan", function ()
{

  $num = num(1.5)->atan();

  expect($num())
  ->toBe(atan(1.5));

});

test("atan2", function ()
{

  $num = num(1.5)->atan2(1.5);

  expect($num())
  ->toBe(atan2(1.5, 1.5));

});

test("base_convert", function ()
{

  $str = num(10)->baseconvert(8, 6);

  expect($str)
  ->toBe(base_convert("10", 8, 6));

  $num = num(10)->baseconvert(8, 6, return: $return);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($return)
  ->toBe(base_convert("10", 8, 6));

});

test("bindec", function ()
{

  $num = num(10)->bindec();

  expect($num())
  ->toBe(bindec("10"));

});

test("ceil", function ()
{

  $num = num(1.5)->ceil();

  expect($num())
  ->toBe(ceil(1.5));

});

test("cos", function ()
{

  $num = num(1.5)->cos();

  expect($num())
  ->toBe(cos(1.5));

});

test("cosh", function ()
{

  $num = num(1.5)->cosh();

  expect($num())
  ->toBe(cosh(1.5));

});

test("decbin", function ()
{

  $num = num(10)->decbin();

  expect($num())
  ->toBe((int) decbin(10));

});

test("dechex", function ()
{

  $str = num(10)->dechex();

  expect($str)
  ->toBe(dechex(10));

  $num = num(10)->dechex(return: $return);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($return)
  ->toBe(dechex(10));

});

test("decoct", function ()
{

  $num = num(10)->decoct();

  expect($num())
  ->toBe((int) decoct(10));

});

test("deg2rad", function ()
{

  $num = num(1.5)->deg2rad();

  expect($num())
  ->toBe(deg2rad(1.5));

});

test("echo", function ()
{

  $this->expectOutputString("1.5");

  $num = num(1.5)->echo();

  expect($num)
  ->toBeInstanceOf(Num::class);

});

test("echo with prefix", function ()
{

  $this->expectOutputString("test1.5");

  num(1.5)->echo(prefix: "test");

});

test("echo with suffix", function ()
{

  $this->expectOutputString("1.5test");

  num(1.5)->echo(suffix: "test");

});

test("echo with prefix and suffix", function ()
{

  $this->expectOutputString("test11.5test2");

  num(1.5)->echo(
    prefix: "test1",
    suffix: "test2"
  );

});

test("exp", function ()
{

  $num = num(1.5)->exp();

  expect($num())
  ->toBe(exp(1.5));

});

test("expm1", function ()
{

  $num = num(1.5)->expm1();

  expect($num())
  ->toBe(expm1(1.5));

});

test("extract", function ()
{

  $num1 = num(-1.5)
  ->extract($num2)
  ->abs();

  expect($num1())
  ->toBe(abs(-1.5));

  expect($num2)
  ->toBeInstanceOf(Num::class);

  expect($num2())
  ->toBe(-1.5);

});

test("fdiv", function ()
{

  $num = num(1.5)->fdiv(1.5);

  expect($num())
  ->toBe(fdiv(1.5, 1.5));

});

test("floor", function ()
{

  $num = num(1.5)->floor();

  expect($num())
  ->toBe(floor(1.5));

});

test("fmod", function ()
{

  $num = num(1.5)->fmod(1.5);

  expect($num())
  ->toBe(fmod(1.5, 1.5));

});

test("hypot", function ()
{

  $num = num(1.5)->hypot(1.5);

  expect($num())
  ->toBe(hypot(1.5, 1.5));

});

test("intdiv", function ()
{

  $num = num(1)->intdiv(1);

  expect($num())
  ->toBe(intdiv(1, 1));

});

test("is_finite", function ()
{

  $result1 = num(1.5)->isfinite();

  expect($result1)
  ->toBeTrue();

  $result1 = num(log(0))->isfinite();

  expect($result1)
  ->toBeFalse();

  $num = num(1.5)->isfinite($result2);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($result2)
  ->toBeTrue();

});

test("is_infinite", function ()
{

  $result1 = num(log(0))->isinfinite();

  expect($result1)
  ->toBeTrue();

  $result1 = num(1.5)->isinfinite();

  expect($result1)
  ->toBeFalse();

  $num = num(log(0))->isinfinite($result2);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($result2)
  ->toBeTrue();

});

test("is_nan", function ()
{

  $result1 = num(acos(1.01))->isnan();

  expect($result1)
  ->toBeTrue();

  $result1 = num(1.5)->isnan();

  expect($result1)
  ->toBeFalse();

  $num = num(acos(1.01))->isnan($result2);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($result2)
  ->toBeTrue();

});

test("log", function ()
{

  $num = num(1.5)->log();

  expect($num())
  ->toBe(log(1.5));

  $num = num(1.5)->log(1.5);

  expect($num())
  ->toBe(log(1.5, 1.5));

});

test("log10", function ()
{

  $num = num(1.5)->log10();

  expect($num())
  ->toBe(log10(1.5));

});

test("log1p", function ()
{

  $num = num(1.5)->log1p();

  expect($num())
  ->toBe(log1p(1.5));

});

test("max", function ()
{

  $num = Num::max(0.5, -1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(max(0.5, -1.5));

});

test("min", function ()
{

  $num = Num::min(0.5, -1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(min(0.5, -1.5));

});

test("octdec", function ()
{

  $num = num(10)->octdec();

  expect($num())
  ->toBe((int) octdec("10"));

});

test("use static pi", function ()
{

  $num = Num::pi();

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(M_PI);

});

test("pow", function ()
{

  $num = num(1.5)->pow(1.5);

  expect($num())
  ->toBe(pow(1.5, 1.5));

});

test("rad2deg", function ()
{

  $num = num(1.5)->rad2deg();

  expect($num())
  ->toBe(rad2deg(1.5));

});

test("round", function ()
{

  $num = num(1.5)->round();

  expect($num())
  ->toBe(round(1.5));

  $num = num(1.4)->round();

  expect($num())
  ->toBe(round(1.4));

  $num = num(1.55)->round(1, PHP_ROUND_HALF_DOWN);

  expect($num())
  ->toBe(round(1.55, 1, PHP_ROUND_HALF_DOWN));

});

test("sin", function ()
{

  $num = num(1.5)->sin();

  expect($num())
  ->toBe(sin(1.5));

});

test("sinh", function ()
{

  $num = num(1.5)->sinh();

  expect($num())
  ->toBe(sinh(1.5));

});

test("sqrt", function ()
{

  $num = num(1.5)->sqrt();

  expect($num())
  ->toBe(sqrt(1.5));

});

test("tan", function ()
{

  $num = num(1.5)->tan();

  expect($num())
  ->toBe(tan(1.5));

});

test("tanh", function ()
{

  $num = num(1.5)->tanh();

  expect($num())
  ->toBe(tanh(1.5));

});

it("can use properties as methods", function ()
{

  $num = num(-1.5)->abs;

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num->isfinite)
  ->toBeTrue();

});