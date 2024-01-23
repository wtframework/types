<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait StartsWith
{

  public function startswith(
    string $needle,
    bool &$return = null
  ): static|IsStr|bool
  {

    $return = str_starts_with($this->string, $needle);

    return 2 === func_num_args() ? $this : $return;

  }

}