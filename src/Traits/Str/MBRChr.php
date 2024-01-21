<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBRChr
{

  public function mbrchr(
    string $needle,
    bool $before_needle = false,
    string $encoding = null
  ): static|IsStr
  {

    $this->string = (string) mb_strrchr(
      $this->string,
      $needle,
      $before_needle,
      $encoding
    );

    return $this;

  }

}