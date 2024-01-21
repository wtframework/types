<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait MultiSort
{

  public function multisort(
    mixed $array1_sort_order = SORT_ASC,
    mixed $array1_sort_flags = SORT_REGULAR,
    mixed ...$rest
  ): static|IsArr
  {

    array_multisort(
      $this->array,
      $array1_sort_order,
      $array1_sort_flags,
      ...$rest
    );

    return $this;

  }

}