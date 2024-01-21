<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Advance
{

  public function advance(): static|IsArr
  {

    next($this->array);

    return $this;

  }

}