<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Values
{

  public function values(): static|IsArr
  {

    $this->array = array_values($this->array);

    return $this;

  }

}