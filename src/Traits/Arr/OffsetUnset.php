<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait OffsetUnset
{

  public function offsetUnset(mixed $offset): void
  {
    unset($this->array[$offset]);
  }

}