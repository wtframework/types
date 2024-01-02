<?php

declare(strict_types=1);

use WTFramework\Types\Num;

use function WTFramework\Types\num;

it('can invoke', function ()
{

  $num = new Num(1.5);

  expect($num())
  ->toBe(1.5);

});

it('can return', function ()
{

  $num = new Num(1.5);

  expect($num->return())
  ->toBe(1.5);

});

it('can use static new', function ()
{

  $num = Num::new(1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(1.5);

});

it('can use function', function ()
{

  $num = num(1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(1.5);

});

it('can cast to string', function ()
{

  $num = num(-1.5);

  expect((string) $num)
  ->toBe('-1.5');

});

it('can abs', function ()
{

  $num = num(-1.5)->abs();

  expect($num())
  ->toBe(abs(-1.5));

});

it('can acos', function ()
{

  $num = num(0.5)->acos();

  expect($num())
  ->toBe(acos(0.5));

});

it('can acosh', function ()
{

  $num = num(1.5)->acosh();

  expect($num())
  ->toBe(acosh(1.5));

});

it('can asin', function ()
{

  $num = num(0.5)->asin();

  expect($num())
  ->toBe(asin(0.5));

});

it('can asinh', function ()
{

  $num = num(1.5)->asinh();

  expect($num())
  ->toBe(asinh(1.5));

});

it('can atan', function ()
{

  $num = num(1.5)->atan();

  expect($num())
  ->toBe(atan(1.5));

});

it('can atan2', function ()
{

  $num = num(1.5)->atan2(1.5);

  expect($num())
  ->toBe(atan2(1.5, 1.5));

});

it('can base_convert', function ()
{

  $str = num(10)->baseconvert(8, 6);

  expect($str)
  ->toBe(base_convert('10', 8, 6));

  $num = num(10)->baseconvert(8, 6, return: $return);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($return)
  ->toBe(base_convert('10', 8, 6));

});

it('can bindec', function ()
{

  $num = num(10)->bindec();

  expect($num())
  ->toBe(bindec('10'));

});

it('can ceil', function ()
{

  $num = num(1.5)->ceil();

  expect($num())
  ->toBe(ceil(1.5));

});

it('can cos', function ()
{

  $num = num(1.5)->cos();

  expect($num())
  ->toBe(cos(1.5));

});

it('can cosh', function ()
{

  $num = num(1.5)->cosh();

  expect($num())
  ->toBe(cosh(1.5));

});

it('can decbin', function ()
{

  $num = num(10)->decbin();

  expect($num())
  ->toBe((int) decbin(10));

});

it('can dechex', function ()
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

it('can decoct', function ()
{

  $num = num(10)->decoct();

  expect($num())
  ->toBe((int) decoct(10));

});

it('can deg2rad', function ()
{

  $num = num(1.5)->deg2rad();

  expect($num())
  ->toBe(deg2rad(1.5));

});

it('can echo', function ()
{

  $this->expectOutputString('1.5');

  $num = num(1.5)->echo();

  expect($num)
  ->toBeInstanceOf(Num::class);

});

it('can echo with prefix', function ()
{

  $this->expectOutputString('test1.5');

  num(1.5)->echo(prefix: 'test');

});

it('can echo with suffix', function ()
{

  $this->expectOutputString('1.5test');

  num(1.5)->echo(suffix: 'test');

});

it('can echo with prefix and suffix', function ()
{

  $this->expectOutputString('test11.5test2');

  num(1.5)->echo(
    prefix: 'test1',
    suffix: 'test2'
  );

});

it('can exp', function ()
{

  $num = num(1.5)->exp();

  expect($num())
  ->toBe(exp(1.5));

});

it('can expm1', function ()
{

  $num = num(1.5)->expm1();

  expect($num())
  ->toBe(expm1(1.5));

});

it('can extract', function ()
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

it('can fdiv', function ()
{

  $num = num(1.5)->fdiv(1.5);

  expect($num())
  ->toBe(fdiv(1.5, 1.5));

});

it('can floor', function ()
{

  $num = num(1.5)->floor();

  expect($num())
  ->toBe(floor(1.5));

});

it('can fmod', function ()
{

  $num = num(1.5)->fmod(1.5);

  expect($num())
  ->toBe(fmod(1.5, 1.5));

});

it('can hypot', function ()
{

  $num = num(1.5)->hypot(1.5);

  expect($num())
  ->toBe(hypot(1.5, 1.5));

});

it('can intdiv', function ()
{

  $num = num(1)->intdiv(1);

  expect($num())
  ->toBe(intdiv(1, 1));

});

it('can is_finite', function ()
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

it('can is_infinite', function ()
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

it('can is_nan', function ()
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

it('can log', function ()
{

  $num = num(1.5)->log();

  expect($num())
  ->toBe(log(1.5));

  $num = num(1.5)->log(1.5);

  expect($num())
  ->toBe(log(1.5, 1.5));

});

it('can log10', function ()
{

  $num = num(1.5)->log10();

  expect($num())
  ->toBe(log10(1.5));

});

it('can log1p', function ()
{

  $num = num(1.5)->log1p();

  expect($num())
  ->toBe(log1p(1.5));

});

it('can max', function ()
{

  $num = Num::max(0.5, -1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(max(0.5, -1.5));

});

it('can min', function ()
{

  $num = Num::min(0.5, -1.5);

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(min(0.5, -1.5));

});

it('can octdec', function ()
{

  $num = num(10)->octdec();

  expect($num())
  ->toBe((int) octdec('10'));

});

it('can use static pi', function ()
{

  $num = Num::pi();

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num())
  ->toBe(M_PI);

});

it('can pow', function ()
{

  $num = num(1.5)->pow(1.5);

  expect($num())
  ->toBe(pow(1.5, 1.5));

});

it('can rad2deg', function ()
{

  $num = num(1.5)->rad2deg();

  expect($num())
  ->toBe(rad2deg(1.5));

});

it('can round', function ()
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

it('can sin', function ()
{

  $num = num(1.5)->sin();

  expect($num())
  ->toBe(sin(1.5));

});

it('can sinh', function ()
{

  $num = num(1.5)->sinh();

  expect($num())
  ->toBe(sinh(1.5));

});

it('can sqrt', function ()
{

  $num = num(1.5)->sqrt();

  expect($num())
  ->toBe(sqrt(1.5));

});

it('can tan', function ()
{

  $num = num(1.5)->tan();

  expect($num())
  ->toBe(tan(1.5));

});

it('can tanh', function ()
{

  $num = num(1.5)->tanh();

  expect($num())
  ->toBe(tanh(1.5));

});

it('can use properties as methods', function ()
{

  $num = num(-1.5)->abs;

  expect($num)
  ->toBeInstanceOf(Num::class);

  expect($num->isfinite)
  ->toBeTrue();

});