<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait OffsetSet
{

  public function offsetSet(
    mixed $offset,
    mixed $value
  ): void
  {
    null === $offset ? $this->array[] = $value : $this->array[$offset] = $value;
  }

}