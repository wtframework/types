<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait SubstrReplace
{

  public function substrreplace(
    string $replace,
    int $offset,
    int $length = null
  ): static|IsStr
  {

    $this->string = substr_replace($this->string, $replace, $offset, $length);

    return $this;

  }

}