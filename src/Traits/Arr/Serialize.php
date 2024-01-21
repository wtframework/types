<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Serialize
{

  public function serialize(string &$return = null): static|IsArr|string
  {

    $return = serialize($this->array);

    return func_num_args() ? $this : $return;

  }

}