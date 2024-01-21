<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait PRegReplaceCallback
{

  public function pregreplacecallback(
    string|array $pattern,
    callable $callback,
    int $limit = -1,
    int &$count = null,
    int $flags = 0
  ): static|IsStr
  {

    $this->string = (string) preg_replace_callback(
      $pattern,
      $callback,
      $this->string,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

}