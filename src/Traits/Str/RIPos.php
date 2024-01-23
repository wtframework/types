<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait RIPos
{

  public function ripos(
    string $needle,
    int $offset = 0,
    int|false &$return = null
  ): static|IsStr|int|false
  {

    $return = strripos($this->string, $needle, $offset);

    return 3 === func_num_args() ? $this : $return;

  }

}