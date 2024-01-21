<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Map
{

  public function map(
    callable $callback = null,
    array ...$arrays
  ): static|IsArr
  {

    $this->array = array_map($callback, $this->array, ...$arrays);

    return $this;

  }

}