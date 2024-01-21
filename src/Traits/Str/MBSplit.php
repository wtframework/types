<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait MBSplit
{

  use Arr;

  public function mbsplit(
    string $pattern,
    int $limit = -1,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = new static::$arr(array: (array) mb_split($pattern, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

}