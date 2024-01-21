<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Flip
{

  public function flip(): static|IsArr
  {

    $this->array = array_flip($this->array);

    return $this;

  }

}