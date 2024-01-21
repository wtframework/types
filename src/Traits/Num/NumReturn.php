<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

trait NumReturn
{

  public function return(): int|float
  {
    return $this->num;
  }

}