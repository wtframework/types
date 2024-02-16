<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait PRegSplit
{

  public function pregsplit(
    string $pattern,
    int $limit = -1,
    int $flags = 0,
    Arr|IsArr &$return = null
  ): static|IsStr|Arr|IsArr
  {

    $return = new Arr(array: preg_split(
      $pattern,
      $this->string,
      $limit,
      $flags
    ) ?: []);

    return 4 === func_num_args() ? $this : $return;

  }

}