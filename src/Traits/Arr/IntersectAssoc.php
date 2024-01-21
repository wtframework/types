<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait IntersectAssoc
{

  public function intersectassoc(array ...$arrays): static|IsArr
  {

    $this->array = array_intersect_assoc($this->array, ...$arrays);

    return $this;

  }

}