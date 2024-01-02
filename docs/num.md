# What the Framework?! types

## WTFramework\Types\Num

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
  string &$return = null
): static|string

bindec(): static

ceil(): static

cos(): static

cosh(): static

decbin(): static

dechex(string &$return = null): static|string

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