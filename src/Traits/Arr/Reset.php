<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Reset
{

  public function reset(): static|IsArr
  {

    reset($this->array);

    return $this;

  }

}