<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

trait ToString
{

  public function __toString(): string
  {
    return (string) $this->num;
  }

}