<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

trait StrReturn
{

  public function return(): string
  {
    return $this->string;
  }

}