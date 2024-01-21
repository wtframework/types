<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Pad
{

  public function pad(
    int $length,
    mixed $value
  ): static|IsArr
  {

    $this->array = array_pad($this->array, $length, $value);

    return $this;

  }

}