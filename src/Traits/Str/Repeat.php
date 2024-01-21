<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Repeat
{

  public function repeat(int $times): static|IsStr
  {

    $this->string = str_repeat($this->string, $times);

    return $this;

  }

}