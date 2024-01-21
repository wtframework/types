<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Filter
{

  public function filter(
    callable $callback = null,
    int $mode = 0
  ): static|IsArr
  {

    $this->array = array_filter($this->array, $callback, $mode);

    return $this;

  }

}