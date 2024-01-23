<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBToLower
{

  public function mbtolower(string $encoding = null): static|IsStr
  {

    $this->string = mb_strtolower($this->string, $encoding);

    return $this;

  }

}