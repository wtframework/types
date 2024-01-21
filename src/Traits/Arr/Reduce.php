<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Reduce
{

  use Convert;

  public function reduce(
    callable $callback,
    mixed $initial = null,
    mixed &$return = null
  ): mixed
  {

    $return = $this->convert(array_reduce($this->array, $callback, $initial));

    return 3 === func_num_args() ? $this : $return;

  }

}