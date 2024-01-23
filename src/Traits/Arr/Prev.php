<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Prev
{

  public function prev(): static|IsArr
  {

    prev($this->array);

    return $this;

  }

}