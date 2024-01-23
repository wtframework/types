<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Keys
{

  public function keys(
    mixed $filter_value = null,
    bool $strict = false
  ): static|IsArr
  {

    $this->array = array_keys($this->array, ...func_get_args());

    return $this;

  }

}