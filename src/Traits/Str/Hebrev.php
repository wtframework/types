<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Hebrev
{

  public function hebrev(int $max_chars_per_line = 0): static|IsStr
  {

    $this->string = hebrev($this->string, $max_chars_per_line);

    return $this;

  }

}