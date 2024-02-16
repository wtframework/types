<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait MBSplit
{

  public function mbsplit(
    string $pattern,
    int $limit = -1,
    Arr|IsArr &$return = null
  ): static|IsStr|Arr|IsArr
  {

    $return = new Arr(array: (array) mb_split($pattern, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

}