<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait USort
{

  public function usort(callable $callback): static|IsArr
  {

    usort($this->array, $callback);

    return $this;

  }

}