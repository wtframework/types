<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Current
{

  use Convert;

  public function current(mixed &$return = null): mixed
  {

    $return = $this->convert(current($this->array));

    return func_num_args() ? $this : $return;

  }

}