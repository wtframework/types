<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Trim
{

  public function trim(string $characters = " \n\r\t\v\x00"): static|IsStr
  {

    $this->string = trim($this->string, $characters);

    return $this;

  }

}