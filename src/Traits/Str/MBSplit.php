<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait MBSplit
{

  use Arr;

  public function mbsplit(
    string $pattern,
    int $limit = -1,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = $this->arr(array: (array) mb_split($pattern, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

}