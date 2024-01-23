<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Sum
{

  public function sum(int|float &$return = null): static|IsArr|int|float
  {

    $return = array_sum($this->array);

    return func_num_args() ? $this : $return;

  }

}