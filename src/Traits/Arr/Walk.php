<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Walk
{

  public function walk(
    callable $callback,
    mixed $arg = null
  ): static|IsArr
  {

    array_walk($this->array, $callback, $arg);

    return $this;

  }

}