<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBDecodeNumericEntity
{

  public function mbdecodenumericentity(
    array $map,
    string $encoding = null
  ): static|IsStr
  {

    $this->string = mb_decode_numericentity($this->string, $map, $encoding);

    return $this;

  }

}