# What the Framework?! types

## Num

The `WTFramework\Types\Num` object is a wrapper around many of PHP's number functions allowing for a fluent interface and a consistent naming system. The rules for method names are:

1. Underscores are removed
2. The primary number argument is removed

Many of these methods can be chained to provide more readable code.

```php
num($number)
->abs()
->exp();
```
\
Methods that do not require arguments can be called as properties rather than as methods.

```php
num($number)
->abs
->exp;
```
\
Most methods that would return a string will return an instance of `WTFramework\Types\Str` allowing for further chaining.

```php
num($number)
->dechex
->toupper;
```
\
Most methods that would return something other than the current object allow for a final `$return` argument passed by reference. If provided then the normal return value will be assigned to this variable and the method will return back the current object.

```php
num($number)
->dechex(return: $str1)
->dechex(return: $str2);
```
\
The `echo` method allows you to easily `echo` the number. This method has optional `$prefix` and `$suffix` arguments.

```php
num($number)
->echo(suffix: '<br>')
->abs
->echo(prefix: 'Abs: ');
```
\
The `extract` method allows you to easily extract a clone of the current object.

```php
num($number)
->abs
->extract($abs)
->exp
->extract($exp);
```
\
There are several ways to instantiate a new instance of `WTFramework\Types\Num`.

```php
use WTFramework\Types\Num;
use function WTFramework\Types\num;

$num = new Num(1);
$num = Num::new(1);
$num = num(1);
```
\
Either use the `return` method or invoke the object as a function to return the number or cast it to a string to return the number as a string.

```php
$number = $num->return();
$number = $num();
$number = (string) $num;
```

### Static methods

```php
new(int|float $num = 0.00): static

max(int|float ...$values): static

min(int|float ...$values): static

pi(): static
```

### Non-static methods

```php
abs(): static

acos(): static

acosh(): static

asin(): static

asinh(): static

atan(): static

atan2(int|float $x): static

baseconvert(
  int $from_base,
  int $to_base,
  Str &$return = null
): static|Str

bindec(): static

ceil(): static

cos(): static

cosh(): static

decbin(): static

dechex(Str &$return = null): static|Str

decoct(): static

deg2rad(): static

echo(
  string $prefix = '',
  string $suffix = ''
): static

exp(): static

expm1(): static

extract(?self &$var): static

fdiv(int|float $num): static

floor(): static

fmod(int|float $num): static

hypot(int|float $y): static

intdiv(int $num): static

isfinite(bool &$return = null): static|bool

isinfinite(bool &$return = null): static|bool

isnan(bool &$return = null): static|bool

log(int|float $base = M_E): static

log10(): static

log1p(): static

octdec(): static

pow(int|float $exponent): static

rad2deg(): static

return(): int|float

round(
  int $precision = 0,
  int $mode = PHP_ROUND_HALF_UP
): static

sin(): static

sinh(): static

sqrt(): static

tan(): static

tanh(): static
```