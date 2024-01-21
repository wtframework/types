<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBERegReplaceCallback
{

  public function mberegreplacecallback(
    string $pattern,
    callable $callback,
    string $options = null
  ): static|IsStr
  {

    $this->string = (string) mb_ereg_replace_callback(
      $pattern,
      $callback,
      $this->string,
      $options
    );

    return $this;

  }

}