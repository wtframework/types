<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait ToUpper
{

  public function toupper(): static|IsStr
  {

    $this->string = strtoupper($this->string);

    return $this;

  }

}