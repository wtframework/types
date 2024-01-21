<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait LTrim
{

  public function ltrim(string $characters = " \n\r\t\v\x00"): static|IsStr
  {

    $this->string = ltrim($this->string, $characters);

    return $this;

  }

}