<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Values
{

  public function values(): static|IsArr
  {

    $this->array = array_values($this->array);

    return $this;

  }

}