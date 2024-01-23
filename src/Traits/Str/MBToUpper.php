<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBToUpper
{

  public function mbtoupper(string $encoding = null): static|IsStr
  {

    $this->string = mb_strtoupper($this->string, $encoding);

    return $this;

  }

}