<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait NatCmp
{

  public function natcmp(
    string $string,
    int &$return = null
  ): static|IsStr|int
  {

    $return = strnatcmp($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

}