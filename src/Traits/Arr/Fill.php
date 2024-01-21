<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Fill
{

  public static function fill(
    int $start_index,
    int $count,
    mixed $value
  ): static|IsArr
  {
    return new static(array_fill($start_index, $count, $value));
  }

}