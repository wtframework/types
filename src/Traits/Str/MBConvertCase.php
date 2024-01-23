<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBConvertCase
{

  public function mbconvertcase(
    int $mode,
    string $encoding = null
  ): static|IsStr
  {

    $this->string = mb_convert_case($this->string, $mode, $encoding);

    return $this;

  }

}