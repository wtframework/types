<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Contracts\IsArr;

trait Arr
{

  protected string $arr = TypesArr::class;

  protected function arr(array $array): TypesArr|IsArr
  {
    return new ($this->arr)(array: $array);
  }

}