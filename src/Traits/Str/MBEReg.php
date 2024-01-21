<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBEReg
{

  public function mbereg(
    string $pattern,
    array &$matches = null,
    bool &$return = null
  ): static|IsStr|bool
  {

    $return = mb_ereg($pattern, $this->string, $matches);

    return 3 === func_num_args() ? $this : $return;

  }

}