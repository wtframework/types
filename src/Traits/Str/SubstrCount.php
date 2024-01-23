<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait SubstrCount
{

  public function substrcount(
    string $needle,
    int $offset = 0,
    int $length = null,
    int &$return = null
  ): static|IsStr|int
  {

    $return = substr_count($this->string, $needle, $offset, $length);

    return 4 === func_num_args() ? $this : $return;

  }

}