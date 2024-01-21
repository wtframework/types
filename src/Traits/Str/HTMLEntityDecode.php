<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait HTMLEntityDecode
{

  public function htmlentitydecode(
    int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401,
    string $encoding = null
  ): static|IsStr
  {

    $this->string = html_entity_decode($this->string, $flags, $encoding);

    return $this;

  }

}