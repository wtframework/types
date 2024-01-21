<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Substr
{

  public function substr(
    array|int $offset,
    array|int $length = null
  ): static|IsStr
  {

    $this->string = substr($this->string, $offset, $length);

    return $this;

  }

}