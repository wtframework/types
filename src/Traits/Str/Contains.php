<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Contains
{

  public function contains(
    string $needle,
    bool &$return = null
  ): static|IsStr|bool
  {

    $return = str_contains($this->string, $needle);

    return 2 === func_num_args() ? $this : $return;

  }

}