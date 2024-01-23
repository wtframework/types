<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Min
{

  public static function min(int|float ...$values): static|IsNum
  {
    return new static(num: min(...$values));
  }

}