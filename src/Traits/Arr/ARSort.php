<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait ARSort
{

  public function arsort(int $flags = SORT_REGULAR): static|IsArr
  {

    arsort($this->array, $flags);

    return $this;

  }

}