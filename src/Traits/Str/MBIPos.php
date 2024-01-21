<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBIPos
{

  public function mbipos(
    string $needle,
    int $offset = 0,
    string $encoding = null,
    int|false &$return = null
  ): static|IsStr|int|false
  {

    $return = mb_stripos($this->string, $needle, $offset, $encoding);

    return 4 === func_num_args() ? $this : $return;

  }

}