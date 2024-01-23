<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBStr
{

  public function mbstr(
    string $needle,
    bool $before_needle = false,
    string $encoding = null
  ): static|IsStr
  {

    $this->string = (string) mb_strstr(
      $this->string,
      $needle,
      $before_needle,
      $encoding
    );

    return $this;

  }

}