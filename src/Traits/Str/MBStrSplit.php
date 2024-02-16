<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait MBStrSplit
{

  public function mbstrsplit(
    int $limit = 1,
    string $encoding = null,
    Arr|IsArr &$return = null
  ): static|IsStr|Arr|IsArr
  {

    $return = new Arr(array: mb_str_split($this->string, $limit, $encoding));

    return 3 === func_num_args() ? $this : $return;

  }

}