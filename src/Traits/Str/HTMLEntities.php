<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait HTMLEntities
{

  public function htmlentities(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
    string $encoding = null,
    bool $double_encode = true
  ): static|IsStr
  {

    $this->string = htmlentities(
      $this->string,
      $flags,
      $encoding,
      $double_encode
    );

    return $this;

  }

}