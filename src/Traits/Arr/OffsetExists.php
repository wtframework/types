<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait OffsetExists
{

  public function offsetExists(mixed $offset): bool
  {
    return isset($this->array[$offset]);
  }

}