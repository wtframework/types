<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait MagicInvoke
{

  public function __invoke(): array
  {
    return $this->array;
  }

}