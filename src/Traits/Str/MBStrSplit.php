<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait MBStrSplit
{

  use Arr;

  public function mbstrsplit(
    int $limit = 1,
    string $encoding = null,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = new static::$arr(array: mb_str_split($this->string, $limit, $encoding));

    return 3 === func_num_args() ? $this : $return;

  }

}