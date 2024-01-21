<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait DiffUKey
{

  public function diffukey(
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $key_compare_func;

    $this->array = array_diff_ukey($this->array, ...$arrays);

    return $this;

  }

}