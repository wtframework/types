<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait WalkRecursive
{

  public function walkrecursive(
    callable $callback,
    mixed $arg = null
  ): static|IsArr
  {

    array_walk_recursive($this->array, $callback, $arg);

    return $this;

  }

}