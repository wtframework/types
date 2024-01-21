<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait KeyExists
{

  public function keyexists(
    string|int $key,
    bool &$return = null
  ): static|IsArr|bool
  {

    $return = array_key_exists($key, $this->array);

    return 2 === func_num_args() ? $this : $return;

  }

}