<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Rewind
{

  public function rewind(): void
  {
    reset($this->array);
  }

}