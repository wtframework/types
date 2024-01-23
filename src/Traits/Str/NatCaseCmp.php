<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait NatCaseCmp
{

  public function natcasecmp(
    string $string,
    int &$return = null
  ): static|IsStr|int
  {

    $return = strnatcasecmp($this->string, $string);

    return 2 === func_num_args() ? $this : $return;

  }

}