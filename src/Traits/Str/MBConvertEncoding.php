<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBConvertEncoding
{

  public function mbconvertencoding(
    string $to_encoding,
    string|array $from_encoding = null
  ): static|IsStr
  {

    $this->string = mb_convert_encoding(
      $this->string,
      $to_encoding,
      $from_encoding
    );

    return $this;

  }

}