<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait ArrNew
{

  public static function new(array $array = []): static|IsArr
  {
    return new static(array: $array);
  }

}