<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait RTrim
{

  public function rtrim(string $characters = " \n\r\t\v\x00"): static|IsStr
  {

    $this->string = rtrim($this->string, $characters);

    return $this;

  }

}