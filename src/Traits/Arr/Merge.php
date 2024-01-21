<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Merge
{

  public function merge(array ...$arrays): static|IsArr
  {

    $this->array = array_merge($this->array, ...$arrays);

    return $this;

  }

}