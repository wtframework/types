<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait HTMLSpecialChars
{

  public function htmlspecialchars(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
    string $encoding = null,
    bool $double_encode = true
  ): static|IsStr
  {

    $this->string = htmlspecialchars(
      $this->string,
      $flags,
      $encoding,
      $double_encode
    );

    return $this;

  }

}