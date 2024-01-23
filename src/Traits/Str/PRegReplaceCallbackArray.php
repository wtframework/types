<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait PRegReplaceCallbackArray
{

  public function pregreplcatecallbackarray(
    array $pattern,
    int $limit = -1,
    int &$count = null,
    int $flags = 0
  ): static|IsStr
  {

    $this->string = (string) preg_replace_callback_array(
      $pattern,
      $this->string,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

}