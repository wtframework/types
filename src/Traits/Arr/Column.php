<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Column
{

  public function column(
    int|string|null $column_key,
    int|string|null $index_key = null
  ): static|IsArr
  {

    $this->array = array_column($this->array, $column_key, $index_key);

    return $this;

  }

}