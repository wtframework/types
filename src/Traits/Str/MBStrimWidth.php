<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBStrimWidth
{

  public function mbstrimwidth(
    int $start,
    int $width,
    string $trim_marker = '',
    string $encoding = null
  ): static|IsStr
  {

    $this->string = mb_strimwidth(
      $this->string,
      $start,
      $width,
      $trim_marker,
      $encoding
    );

    return $this;

  }

}