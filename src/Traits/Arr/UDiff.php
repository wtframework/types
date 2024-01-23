<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait UDiff
{

  public function udiff(
    callable $value_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;

    $this->array = array_udiff($this->array, ...$arrays);

    return $this;

  }

}