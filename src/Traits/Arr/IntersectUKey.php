<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait IntersectUKey
{

  public function intersectukey(
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $key_compare_func;

    $this->array = array_intersect_ukey($this->array, ...$arrays);

    return $this;

  }

}