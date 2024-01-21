<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Product
{

  public function product(int|float &$return = null): static|IsArr|int|float
  {

    $return = array_product($this->array);

    return func_num_args() ? $this : $return;
  }

}