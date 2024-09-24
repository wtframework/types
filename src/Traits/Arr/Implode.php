<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;
use WTFramework\Types\Str;

trait Implode
{

  public function implode(
    string $delimeter = "",
    Str|IsStr &$return = null
  ): static|IsArr|Str|IsStr
  {

    $return = new Str(string: implode($delimeter, $this->array));

    return 2 === func_num_args() ? $this : $return;

  }

}