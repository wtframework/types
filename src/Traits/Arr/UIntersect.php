<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait UIntersect
{

  public function uintersect(
    callable $value_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;

    $this->array = array_uintersect($this->array, ...$arrays);

    return $this;

  }

}