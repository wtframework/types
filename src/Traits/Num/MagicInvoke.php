<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

trait MagicInvoke
{

  public function __invoke(): int|float
  {
    return $this->num;
  }

}