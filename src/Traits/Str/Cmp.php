<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Cmp
{

  public function cmp(
    string $string,
    int &$return = null
  ): static|IsStr|int
  {

    $return = strcmp($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

}