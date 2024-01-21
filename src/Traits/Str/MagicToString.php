<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

trait MagicToString
{

  public function __toString(): string
  {
    return $this->string;
  }

}