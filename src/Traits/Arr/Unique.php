<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Unique
{

  public function unique(int $flags = SORT_STRING): static|IsArr
  {

    $this->array = array_unique($this->array, $flags);

    return $this;

  }

}