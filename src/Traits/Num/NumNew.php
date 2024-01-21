<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait NumNew
{

  public static function new(int|float $num = 0.00): static|IsNum
  {
    return new static(num: $num);
  }

}