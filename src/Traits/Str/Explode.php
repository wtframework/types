<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait Explode
{

  use Arr;

  public function explode(
    string $delimeter,
    int $limit = PHP_INT_MAX,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = $this->arr(array: explode($delimeter, $this->string, $limit));

    return 3 === func_num_args() ? $this : $return;

  }

}