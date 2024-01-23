<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Search
{

  public function search(
    mixed $needle,
    bool $strict = false,
    int|string|false &$return = null
  ): static|IsArr|int|string|false
  {

    $return = array_search($needle, $this->array, $strict);

    return 3 === func_num_args() ? $this : $return;

  }

}