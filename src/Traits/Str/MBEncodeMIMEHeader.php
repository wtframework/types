<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBEncodeMIMEHeader
{

  public function mbencodemimeheader(
    string $charset = "utf-8",
    string $transfer_encoding = "B",
    string $newline = "\r\n",
    int $indent = 0
  ): static|IsStr
  {

    $this->string = mb_encode_mimeheader(
      $this->string,
      $charset,
      $transfer_encoding,
      $newline,
      $indent
    );

    return $this;

  }

}