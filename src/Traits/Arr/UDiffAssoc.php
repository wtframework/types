<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait UDiffAssoc
{

  public function udiffassoc(
    callable $value_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;

    $this->array = array_udiff_assoc($this->array, ...$arrays);

    return $this;

  }

}