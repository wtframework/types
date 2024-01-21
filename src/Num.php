<?php

declare(strict_types=1);

namespace WTFramework\Types;

use Stringable;
use WTFramework\Types\Interfaces\IsNum;

class Num implements IsNum, Stringable
{

  public function __construct(protected int|float $num = 0.0) {}

  public static function new(int|float $num = 0.00): static|IsNum
  {
    return new static(num: $num);
  }

  public function abs(): static|IsNum
  {

    $this->num = abs($this->num);

    return $this;

  }

  public function acos(): static|IsNum
  {

    $this->num = acos($this->num);

    return $this;

  }

  public function acosh(): static|IsNum
  {

    $this->num = acosh($this->num);

    return $this;

  }

  public function asin(): static|IsNum
  {

    $this->num = asin($this->num);

    return $this;

  }

  public function asinh(): static|IsNum
  {

    $this->num = asinh($this->num);

    return $this;

  }

  public function atan(): static|IsNum
  {

    $this->num = atan($this->num);

    return $this;

  }

  public function atan2(int|float $x): static|IsNum
  {

    $this->num = atan2($this->num, $x);

    return $this;

  }

  public function baseconvert(
    int $from_base,
    int $to_base,
    string &$return = null
  ): static|IsNum|string
  {

    $return = base_convert(
      (string) (int) $this->num,
      $from_base,
      $to_base
    );

    return 3 === func_num_args() ? $this : $return;

  }

  public function bindec(): static|IsNum
  {

    $this->num = bindec((string) (int) $this->num);

    return $this;

  }

  public function ceil(): static|IsNum
  {

    $this->num = ceil($this->num);

    return $this;

  }

  public function cos(): static|IsNum
  {

    $this->num = cos($this->num);

    return $this;

  }

  public function cosh(): static|IsNum
  {

    $this->num = cosh($this->num);

    return $this;

  }

  public function decbin(): static|IsNum
  {

    $this->num = (int) decbin((int) $this->num);

    return $this;

  }

  public function dechex(string &$return = null): static|IsNum|string
  {

    $return = dechex((int) $this->num);

    return func_num_args() ? $this : $return;

  }

  public function decoct(): static|IsNum
  {

    $this->num = (int) decoct((int) $this->num);

    return $this;

  }

  public function deg2rad(): static|IsNum
  {

    $this->num = deg2rad($this->num);

    return $this;

  }

  public function echo(
    string $prefix = '',
    string $suffix = ''
  ): static|IsNum
  {

    echo "$prefix$this->num$suffix";

    return $this;

  }

  public function exp(): static|IsNum
  {

    $this->num = exp($this->num);

    return $this;

  }

  public function expm1(): static|IsNum
  {

    $this->num = expm1($this->num);

    return $this;

  }

  public function extract(?self &$var): static|IsNum
  {

    $var = clone $this;

    return $this;

  }

  public function fdiv(int|float $num): static|IsNum
  {

    $this->num = fdiv($this->num, $num);

    return $this;

  }

  public function floor(): static|IsNum
  {

    $this->num = floor($this->num);

    return $this;

  }

  public function fmod(int|float $num): static|IsNum
  {

    $this->num = fmod($this->num, $num);

    return $this;

  }

  public function hypot(int|float $y): static|IsNum
  {

    $this->num = hypot($this->num, $y);

    return $this;

  }

  public function intdiv(int $num): static|IsNum
  {

    $this->num = intdiv((int) $this->num, $num);

    return $this;

  }

  public function isfinite(bool &$return = null): static|IsNum|bool
  {

    $return = is_finite($this->num);

    return func_num_args() ? $this : $return;

  }

  public function isinfinite(bool &$return = null): static|IsNum|bool
  {

    $return = is_infinite($this->num);

    return func_num_args() ? $this : $return;

  }

  public function isnan(bool &$return = null): static|IsNum|bool
  {

    $return = is_nan($this->num);

    return func_num_args() ? $this : $return;

  }

  public function log(int|float $base = M_E): static|IsNum
  {

    $this->num = log($this->num, $base);

    return $this;

  }

  public function log10(): static|IsNum
  {

    $this->num = log10($this->num);

    return $this;

  }

  public function log1p(): static|IsNum
  {

    $this->num = log1p($this->num);

    return $this;

  }

  public static function max(int|float ...$values): static|IsNum
  {
    return new static(num: max(...$values));
  }

  public static function min(int|float ...$values): static|IsNum
  {
    return new static(num: min(...$values));
  }

  public function octdec(): static|IsNum
  {

    $this->num = (int) octdec((string) (int) $this->num);

    return $this;

  }

  public static function pi(): static|IsNum
  {
    return new static(num: M_PI);
  }

  public function pow(int|float $exponent): static|IsNum
  {

    $this->num = pow($this->num, $exponent);

    return $this;

  }

  public function rad2deg(): static|IsNum
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
  ): static|IsNum
  {

    $this->num = round($this->num, $precision, $mode);

    return $this;

  }

  public function sin(): static|IsNum
  {

    $this->num = sin($this->num);

    return $this;

  }

  public function sinh(): static|IsNum
  {

    $this->num = sinh($this->num);

    return $this;

  }

  public function sqrt(): static|IsNum
  {

    $this->num = sqrt($this->num);

    return $this;

  }

  public function tan(): static|IsNum
  {

    $this->num = tan($this->num);

    return $this;

  }

  public function tanh(): static|IsNum
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