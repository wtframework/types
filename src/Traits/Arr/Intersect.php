<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Intersect
{

  public function intersect(array ...$arrays): static|IsArr
  {

    $this->array = array_intersect($this->array, ...$arrays);

    return $this;

  }

}