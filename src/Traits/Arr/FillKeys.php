<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait FillKeys
{

  public function fillkeys(mixed $value): static|IsArr
  {

    $this->array = array_fill_keys($this->array, $value);

    return $this;

  }

}