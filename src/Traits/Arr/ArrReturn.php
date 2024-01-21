<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait ArrReturn
{

  public function return(): array
  {
    return $this->array;
  }

}