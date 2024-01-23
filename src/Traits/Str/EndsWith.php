<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait EndsWith
{

  public function endswith(
    string $needle,
    bool &$return = null
  ): static|IsStr|bool
  {

    $return = str_ends_with($this->string, $needle);

    return 2 === func_num_args() ? $this : $return;

  }

}