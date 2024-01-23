<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBSubstr
{

  public function mbsubstr(
    int $start,
    int $length = null,
    string $encoding = null
  ): static|IsStr
  {

    $this->string = mb_substr($this->string, $start, $length, $encoding);

    return $this;

  }

}