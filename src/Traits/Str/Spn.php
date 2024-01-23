<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Spn
{

  public function spn(
    string $characters,
    int $offset = 0,
    int $length = null,
    int &$return = null
  ): static|IsStr|int
  {

    $return = strspn($this->string, $characters, $offset, $length);

    return 4 === func_num_args() ? $this : $return;

  }

}