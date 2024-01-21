<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBRPos
{

  public function mbrpos(
    string $needle,
    int $offset = 0,
    string $encoding = null,
    int|false &$return = null
  ): static|IsStr|int|false
  {

    $return = mb_strrpos($this->string, $needle, $offset, $encoding);

    return 4 === func_num_args() ? $this : $return;

  }

}