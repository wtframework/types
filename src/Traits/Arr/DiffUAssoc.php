<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait DiffUAssoc
{

  public function diffuassoc(
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $key_compare_func;

    $this->array = array_diff_uassoc($this->array, ...$arrays);

    return $this;

  }

}