<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait Explode
{

  public function explode(
    string $delimeter,
    int $limit = PHP_INT_MAX,
    Arr|IsArr &$return = null
  ): static|IsStr|Arr|IsArr
  {

    $return = new Arr(array: explode($delimeter, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

}