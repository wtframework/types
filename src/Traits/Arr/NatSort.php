<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait NatSort
{

  public function natsort(): static|IsArr
  {

    natsort($this->array);

    return $this;

  }

}