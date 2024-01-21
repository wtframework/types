<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait ASort
{

  public function asort(int $flags = SORT_REGULAR): static|IsArr
  {

    asort($this->array, $flags);

    return $this;

  }

}