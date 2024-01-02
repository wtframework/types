<?php

declare(strict_types=1);

namespace WTFramework\Types;

use Stringable;

class Num implements Stringable
{

  public function __construct(protected int|float $num = 0.0) {}

  public static function new(int|float $num = 0.00): static
  {
    return new static(num: $num);
  }

  public function abs(): static
  {

    $this->num = abs($this->num);

    return $this;

  }

  public function acos(): static
  {

    $this->num = acos($this->num);

    return $this;

  }

  public function acosh(): static
  {

    $this->num = acosh($this->num);

    return $this;

  }

  public function asin(): static
  {

    $this->num = asin($this->num);

    return $this;

  }

  public function asinh(): static
  {

    $this->num = asinh($this->num);

    return $this;

  }

  public function atan(): static
  {

    $this->num = atan($this->num);

    return $this;

  }

  public function atan2(int|float $x): static
  {

    $this->num = atan2($this->num, $x);

    return $this;

  }

  public function baseconvert(
    int $from_base,
    int $to_base,
    string &$return = null
  ): static|string
  {

    $return = base_convert(
      (string) (int) $this->num,
      $from_base,
      $to_base
    );

    return 3 === func_num_args() ? $this : $return;

  }

  public function bindec(): static
  {

    $this->num = bindec((string) (int) $this->num);

    return $this;

  }

  public function ceil(): static
  {

    $this->num = ceil($this->num);

    return $this;

  }

  public function cos(): static
  {

    $this->num = cos($this->num);

    return $this;

  }

  public function cosh(): static
  {

    $this->num = cosh($this->num);

    return $this;

  }

  public function decbin(): static
  {

    $this->num = (int) decbin((int) $this->num);

    return $this;

  }

  public function dechex(string &$return = null): static|string
  {

    $return = dechex((int) $this->num);

    return func_num_args() ? $this : $return;

  }

  public function decoct(): static
  {

    $this->num = (int) decoct((int) $this->num);

    return $this;

  }

  public function deg2rad(): static
  {

    $this->num = deg2rad($this->num);

    return $this;

  }

  public function echo(
    string $prefix = '',
    string $suffix = ''
  ): static
  {

    echo "$prefix$this->num$suffix";

    return $this;

  }

  public function exp(): static
  {

    $this->num = exp($this->num);

    return $this;

  }

  public function expm1(): static
  {

    $this->num = expm1($this->num);

    return $this;

  }

  public function extract(?self &$var): static
  {

    $var = clone $this;

    return $this;

  }

  public function fdiv(int|float $num): static
  {

    $this->num = fdiv($this->num, $num);

    return $this;

  }

  public function floor(): static
  {

    $this->num = floor($this->num);

    return $this;

  }

  public function fmod(int|float $num): static
  {

    $this->num = fmod($this->num, $num);

    return $this;

  }

  public function hypot(int|float $y): static
  {

    $this->num = hypot($this->num, $y);

    return $this;

  }

  public function intdiv(int $num): static
  {

    $this->num = intdiv((int) $this->num, $num);

    return $this;

  }

  public function isfinite(bool &$return = null): static|bool
  {

    $return = is_finite($this->num);

    return func_num_args() ? $this : $return;

  }

  public function isinfinite(bool &$return = null): static|bool
  {

    $return = is_infinite($this->num);

    return func_num_args() ? $this : $return;

  }

  public function isnan(bool &$return = null): static|bool
  {

    $return = is_nan($this->num);

    return func_num_args() ? $this : $return;

  }

  public function log(int|float $base = M_E): static
  {

    $this->num = log($this->num, $base);

    return $this;

  }

  public function log10(): static
  {

    $this->num = log10($this->num);

    return $this;

  }

  public function log1p(): static
  {

    $this->num = log1p($this->num);

    return $this;

  }

  public static function max(int|float ...$values): static
  {
    return new static(num: max(...$values));
  }

  public static function min(int|float ...$values): static
  {
    return new static(num: min(...$values));
  }

  public function octdec(): static
  {

    $this->num = (int) octdec((string) (int) $this->num);

    return $this;

  }

  public static function pi(): static
  {
    return new static(num: M_PI);
  }

  public function pow(int|float $exponent): static
  {

    $this->num = pow($this->num, $exponent);

    return $this;

  }

  public function rad2deg(): static
  {

    $this->num = rad2deg($this->num);

    return $this;

  }

  public function return(): int|float
  {
    return $this->num;
  }

  public function round(
    int $precision = 0,
    int $mode = PHP_ROUND_HALF_UP
  ): static
  {

    $this->num = round($this->num, $precision, $mode);

    return $this;

  }

  public function sin(): static
  {

    $this->num = sin($this->num);

    return $this;

  }

  public function sinh(): static
  {

    $this->num = sinh($this->num);

    return $this;

  }

  public function sqrt(): static
  {

    $this->num = sqrt($this->num);

    return $this;

  }

  public function tan(): static
  {

    $this->num = tan($this->num);

    return $this;

  }

  public function tanh(): static
  {

    $this->num = tanh($this->num);

    return $this;

  }

  public function __get(string $name): mixed
  {
    return $this->$name();
  }

  public function __toString(): string
  {
    return (string) $this->num;
  }

  public function __invoke(): int|float
  {
    return $this->num;
  }

}