<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Pop
{

  public function pop(mixed &$return = null): mixed
  {

    $return = $this->convert(array_pop($this->array));

    return func_num_args() ? $this : $return;

  }

}