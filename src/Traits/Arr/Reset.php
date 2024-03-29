<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Reset
{

  public function reset(): static|IsArr
  {

    reset($this->array);

    return $this;

  }

}