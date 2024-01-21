<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBERegIReplace
{

  public function mberegireplace(
    string $pattern,
    string $replacement,
    string $options = null
  ): static|IsStr
  {

    $this->string = (string) mb_eregi_replace(
      $pattern,
      $replacement,
      $this->string,
      $options
    );

    return $this;

  }

}