<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait HTMLSpecialCharsDecode
{

  public function htmlspecialcharsdecode(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401
  ): static|IsStr
  {

    $this->string = htmlspecialchars_decode($this->string, $flags);

    return $this;

  }

}