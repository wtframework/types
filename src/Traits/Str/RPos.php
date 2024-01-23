<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait RPos
{

  public function rpos(
    string $needle,
    int $offset = 0,
    int|false &$return = null
  ): static|IsStr|int|false
  {

    $return = strrpos($this->string, $needle, $offset);

    return 3 === func_num_args() ? $this : $return;

  }

}