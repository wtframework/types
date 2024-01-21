<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait NatSort
{

  public function natsort(): static|IsArr
  {

    natsort($this->array);

    return $this;

  }

}