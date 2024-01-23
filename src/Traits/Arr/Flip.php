<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Flip
{

  public function flip(): static|IsArr
  {

    $this->array = array_flip($this->array);

    return $this;

  }

}