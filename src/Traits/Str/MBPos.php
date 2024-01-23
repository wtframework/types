<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBPos
{

  public function mbpos(
    string $needle,
    int $offset = 0,
    string $encoding = null,
    int|false &$return = null
  ): static|IsStr|int|false
  {

    $return = mb_strpos($this->string, $needle, $offset, $encoding);

    return 4 === func_num_args() ? $this : $return;

  }

}