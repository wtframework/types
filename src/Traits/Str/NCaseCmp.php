<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait NCaseCmp
{

  public function ncasecmp(
    string $string,
    int $length,
    int &$return = null
  ): static|IsStr|int
  {

    $return = strncasecmp($this->string, $string, $length);

    return 3 === func_num_args() ? $this : $return;

  }

}