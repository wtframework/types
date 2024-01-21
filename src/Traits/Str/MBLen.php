<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBLen
{

  public function mblen(
    string $encoding = null,
    int &$return = null
  ): static|IsStr|int
  {

    $return = mb_strlen($this->string, $encoding);

    return 2 === func_num_args() ? $this : $return;

  }

}