<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBERegMatch
{

  public function mberegmatch(
    string $pattern,
    string $options = null,
    bool &$return = null
  ): static|IsStr|bool
  {

    $return = mb_ereg_match($pattern, $this->string, $options);

    return 3 === func_num_args() ? $this : $return;

  }

}