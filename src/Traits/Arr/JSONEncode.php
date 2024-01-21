<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;
use WTFramework\Types\Str as TypesStr;

trait JSONEncode
{

  use Str;

  public function jsonencode(
    int $flags = 0,
    int $depth = 512,
    TypesStr|IsStr &$return = null
  ): static|IsArr|TypesStr|IsStr
  {

    $return = new static::$str(string: (string) json_encode($this->array, $flags, $depth));

    return 3 === func_num_args() ? $this : $return;

  }

}