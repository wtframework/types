<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBWidth
{

  public function mbwidth(
    string $encoding = null,
    int &$return = null
  ): static|IsStr|int
  {

    $return = mb_strwidth($this->string, $encoding);

    return 2 === func_num_args() ? $this : $return;

  }

}