<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait Split
{

  use Arr;

  public function split(
    int $length = 1,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = new static::$arr(array: str_split($this->string, $length));

    return 2 === func_num_args() ? $this : $return;

  }

}