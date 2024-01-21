<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait KSort
{

  public function ksort(int $flags = SORT_REGULAR): static|IsArr
  {

    ksort($this->array, $flags);

    return $this;

  }

}