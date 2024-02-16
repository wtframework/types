<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait Split
{

  public function split(
    int $length = 1,
    Arr|IsArr &$return = null
  ): static|IsStr|Arr|IsArr
  {

    $return = new Arr(array: str_split($this->string, $length));

    return 2 === func_num_args() ? $this : $return;

  }

}