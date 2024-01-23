<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait KRSort
{

  public function krsort(int $flags = SORT_REGULAR): static|IsArr
  {

    krsort($this->array, $flags);

    return $this;

  }

}