<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait IsList
{

  public function islist(bool &$return = null): static|IsArr|bool
  {

    $return = array_is_list($this->array);

    return func_num_args() ? $this : $return;

  }

}