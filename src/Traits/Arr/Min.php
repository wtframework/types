<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Min
{

  use Convert;

  public function min(mixed &$return = null): mixed
  {

    $return = $this->convert(min($this->array));

    return func_num_args() ? $this : $return;

  }

}