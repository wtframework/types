<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Max
{

  public static function max(int|float ...$values): static|IsNum
  {
    return new static(num: max(...$values));
  }

}