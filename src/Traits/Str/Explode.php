<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait Explode
{

  use Arr;

  public function explode(
    string $delimeter,
    int $limit = PHP_INT_MAX,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = new static::$arr(array: explode($delimeter, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

}