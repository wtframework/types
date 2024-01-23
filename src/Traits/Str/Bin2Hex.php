<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Bin2Hex
{

  public function bin2hex(): static|IsStr
  {

    $this->string = bin2hex($this->string);

    return $this;

  }

}