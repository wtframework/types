<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait IPos
{

  public function ipos(
    string $needle,
    int $offset = 0,
    int|false &$return = null
  ): static|IsStr|int|false
  {

    $return = stripos($this->string, $needle, $offset);

    return 3 === func_num_args() ? $this : $return;

  }

}