<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait UDiffUAssoc
{

  public function udiffuassoc(
    callable $value_compare_func,
    callable $key_compare_func,
    array ...$arrays
  ): static|IsArr
  {

    $arrays[] = $value_compare_func;
    $arrays[] = $key_compare_func;

    $this->array = array_udiff_uassoc($this->array, ...$arrays);

    return $this;

  }

}