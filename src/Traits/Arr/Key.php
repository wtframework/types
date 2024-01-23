<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Key
{

  public function key(int|string|null &$return = null): static|IsArr|int|string|null
  {

    $return = key($this->array);

    return func_num_args() ? $this : $return;

  }

}