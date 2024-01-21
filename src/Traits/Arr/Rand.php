<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Rand
{

  public function rand(
    int $num = 1,
    int|string|array &$return = null
  ): static|IsArr|int|string|array
  {

    $return = array_rand($this->array, $num);

    return 2 === func_num_args() ? $this : $return;

  }

}