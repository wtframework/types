<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait PRegSplit
{

  use Arr;

  public function pregsplit(
    string $pattern,
    int $limit = -1,
    int $flags = 0,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = new static::$arr(array: preg_split(
      $pattern,
      $this->string,
      $limit,
      $flags
    ) ?: []);

    return 4 === func_num_args() ? $this : $return;

  }

}