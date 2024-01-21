<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait MagicSerialize
{

  public function __serialize(): array
  {
    return $this->array;
  }

}