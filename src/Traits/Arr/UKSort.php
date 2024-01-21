<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait UKSort
{

  public function uksort(callable $callback): static|IsArr
  {

    uksort($this->array, $callback);

    return $this;

  }

}