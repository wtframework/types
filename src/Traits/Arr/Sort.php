<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Sort
{

  public function sort(): static|IsArr
  {

    sort($this->array);

    return $this;

  }

}