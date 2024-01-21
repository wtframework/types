<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

trait MagicToString
{

  public function __toString(): string
  {
    return (string) $this->num;
  }

}