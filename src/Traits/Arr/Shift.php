<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Shift
{

  public function shift(mixed &$return = null): mixed
  {

    $return = array_shift($this->array);

    return func_num_args() ? $this : $return;

  }

}