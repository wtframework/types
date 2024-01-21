<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Slice
{

  public function slice(
    int $offset,
    int $length = null,
    bool $preserve_keys = false
  ): static|IsArr
  {

    $this->array = array_slice($this->array, $offset, $length, $preserve_keys);

    return $this;

  }

}