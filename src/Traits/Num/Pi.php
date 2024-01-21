<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Pi
{

  public static function pi(): static|IsNum
  {
    return new static(num: M_PI);
  }

}