<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait ToLower
{

  public function tolower(): static|IsStr
  {

    $this->string = strtolower($this->string);

    return $this;

  }

}