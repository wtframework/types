<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Contains
{

  public function contains(
    mixed $needle,
    bool $strict = false,
    bool &$return = null
  ): static|IsArr|bool
  {

    $return = in_array($needle, $this->array, $strict);

    return 3 === func_num_args() ? $this : $return;

  }

}