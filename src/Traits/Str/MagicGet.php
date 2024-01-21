<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

trait MagicGet
{

  public function __get(string $name): mixed
  {
    return $this->$name();
  }

}