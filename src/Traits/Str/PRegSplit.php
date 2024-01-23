<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

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

    $return = $this->arr(array: preg_split(
      $pattern,
      $this->string,
      $limit,
      $flags
    ) ?: []);

    return 4 === func_num_args() ? $this : $return;

  }

}