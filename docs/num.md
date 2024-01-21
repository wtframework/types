# What the Framework?! types

## WTFramework\Types\Num

### Static methods

```php
new(int|float $num = 0.00): static|IsNum

max(int|float ...$values): static|IsNum

min(int|float ...$values): static|IsNum

pi(): static|IsNum
```

### Non-static methods

```php
abs(): static|IsNum

acos(): static|IsNum

acosh(): static|IsNum

asin(): static|IsNum

asinh(): static|IsNum

atan(): static|IsNum

atan2(int|float $x): static|IsNum

baseconvert(
  int $from_base,
  int $to_base,
  string &$return = null
): static|IsNum|string

bindec(): static|IsNum

ceil(): static|IsNum

cos(): static|IsNum

cosh(): static|IsNum

decbin(): static|IsNum

dechex(string &$return = null): static|IsNum|string

decoct(): static|IsNum

deg2rad(): static|IsNum

echo(
  string $prefix = '',
  string $suffix = ''
): static|IsNum

exp(): static|IsNum

expm1(): static|IsNum

extract(?self &$var): static|IsNum

fdiv(int|float $num): static|IsNum

floor(): static|IsNum

fmod(int|float $num): static|IsNum

hypot(int|float $y): static|IsNum

intdiv(int $num): static|IsNum

isfinite(bool &$return = null): static|IsNum|bool

isinfinite(bool &$return = null): static|IsNum|bool

isnan(bool &$return = null): static|IsNum|bool

log(int|float $base = M_E): static|IsNum

log10(): static|IsNum

log1p(): static|IsNum

octdec(): static|IsNum

pow(int|float $exponent): static|IsNum

rad2deg(): static|IsNum

return(): int|float

round(
  int $precision = 0,
  int $mode = PHP_ROUND_HALF_UP
): static|IsNum

sin(): static|IsNum

sinh(): static|IsNum

sqrt(): static|IsNum

tan(): static|IsNum

tanh(): static|IsNum
```