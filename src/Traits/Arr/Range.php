<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Range
{

  public static function range(
    string|int|float $start,
    string|int|float $end,
    int|float $step = 1
  ): static|IsArr
  {
    return new static(array: range($start, $end, $step));
  }

}