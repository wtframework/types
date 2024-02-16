<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;

trait Arr
{

  protected string $arr = Arr::class;

  protected function arr(array $array): Arr|IsArr
  {
    return new ($this->arr)(array: $array);
  }

}