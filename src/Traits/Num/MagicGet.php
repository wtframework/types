<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

trait MagicGet
{

  public function __get(string $name): mixed
  {
    return $this->$name();
  }

}