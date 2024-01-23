<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait UASort
{

  public function uasort(callable $callback): static|IsArr
  {

    uasort($this->array, $callback);

    return $this;

  }

}