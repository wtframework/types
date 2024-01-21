<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait MagicGet
{

  public function __get(string $name): mixed
  {
    return $this->$name();
  }

}