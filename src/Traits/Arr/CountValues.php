<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait CountValues
{

  public function countvalues(): static|IsArr
  {

    $this->array = array_count_values($this->array);

    return $this;

  }

}