<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait OffsetGet
{

  public function offsetGet(mixed $offset): mixed
  {
    return $this->convert($this->array[$offset] ?? null);
  }

}