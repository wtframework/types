<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait IntersectKey
{

  public function intersectkey(array ...$arrays): static|IsArr
  {

    $this->array = array_intersect_key($this->array, ...$arrays);

    return $this;

  }

}