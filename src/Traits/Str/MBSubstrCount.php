<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBSubstrCount
{

  public function mbsubstrcount(
    string $needle,
    string $encoding = null,
    int &$return = null
  ): static|IsStr|int
  {

    $return = mb_substr_count($this->string, $needle, $encoding);

    return 3 === func_num_args() ? $this : $return;

  }

}