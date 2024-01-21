<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBERegReplace
{

  public function mberegreplace(
    string $pattern,
    string $replacement,
    string $options = null
  ): static|IsStr
  {

    $this->string = (string) mb_ereg_replace(
      $pattern,
      $replacement,
      $this->string,
      $options
    );

    return $this;

  }

}