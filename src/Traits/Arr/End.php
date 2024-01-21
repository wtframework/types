<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait End
{

  use Convert;

  public function end(mixed &$return = null): mixed
  {

    $return = $this->convert(end($this->array));

    return func_num_args() ? $this : $return;

  }

}