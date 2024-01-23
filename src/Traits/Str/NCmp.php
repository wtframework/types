<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait NCmp
{

  public function ncmp(
    string $string,
    int $length,
    int &$return = null
  ): static|IsStr|int
  {

    $return = strncmp($this->string, $string, $length);

    return 3 === func_num_args() ? $this : $return;

  }

}