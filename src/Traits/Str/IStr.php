<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait IStr
{

  public function istr(
    string $needle,
    bool $before_needle = false
  ): static|IsStr
  {

    $this->string = (string) stristr($this->string, $needle, $before_needle);

    return $this;

  }

}