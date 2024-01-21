<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Max
{

  use Convert;

  public function max(mixed &$return = null): mixed
  {

    $return = $this->convert(max($this->array));

    return func_num_args() ? $this : $return;

  }

}