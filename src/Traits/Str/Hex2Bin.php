<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Hex2Bin
{

  public function hex2bin(): static|IsStr
  {

    $this->string = (string) hex2bin($this->string);

    return $this;

  }

}