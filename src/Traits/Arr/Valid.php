<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Valid
{

  public function valid(): bool
  {
    return null !== key($this->array);
  }

}