<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait UIntersectUAssoc
{

  public function uintersectuassoc(
    callable $value_compare_func,
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;
    $arrays[] = $key_compare_func;

    $this->array = array_uintersect_uassoc($this->array, ...$arrays);

    return $this;

  }

}