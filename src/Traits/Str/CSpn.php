<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait CSpn
{

  public function cspn(
    string $characters,
    int $offset = 0,
    int $length = null,
    int &$return = null
  ): static|IsStr|int
  {

    $return = strcspn($this->string, $characters, $offset, $length);

    return 4 === func_num_args() ? $this : $return;

  }

}