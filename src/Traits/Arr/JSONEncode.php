<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;
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

    $return = $this->str(string: (string) json_encode($this->array, $flags, $depth));

    return 3 === func_num_args() ? $this : $return;

  }

}