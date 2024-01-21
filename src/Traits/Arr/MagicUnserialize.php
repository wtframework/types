<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait MagicUnserialize
{

  public function __unserialize(array $data): void
  {
    $this->array = $data;
  }

}