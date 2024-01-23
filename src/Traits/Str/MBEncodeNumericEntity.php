<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBEncodeNumericEntity
{

  public function mbencodenumericentity(
    array $map,
    string $encoding = null,
    bool $hex = false
  ): static|IsStr
  {

    $this->string = mb_encode_numericentity(
      $this->string,
      $map,
      $encoding,
      $hex
    );

    return $this;

  }

}