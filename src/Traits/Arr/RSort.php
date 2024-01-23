<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait RSort
{

  public function rsort(int $flags = SORT_REGULAR): static|IsArr
  {

    rsort($this->array, $flags);

    return $this;

  }

}