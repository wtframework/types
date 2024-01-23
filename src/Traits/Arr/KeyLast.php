<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait KeyLast
{

  public function keylast(int|string|null &$return = null): static|IsArr|int|string|null
  {

    $return = array_key_last($this->array);

    return func_num_args() ? $this : $return;

  }

}