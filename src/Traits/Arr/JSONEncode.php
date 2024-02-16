<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;
use WTFramework\Types\Str;

trait JSONEncode
{

  public function jsonencode(
    int $flags = 0,
    int $depth = 512,
    Str|IsStr &$return = null
  ): static|IsArr|Str|IsStr
  {

    $return = new Str(string: (string) json_encode($this->array, $flags, $depth));

    return 3 === func_num_args() ? $this : $return;

  }

}