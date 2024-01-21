<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Next
{

  public function next(): void
  {
    next($this->array);
  }

}