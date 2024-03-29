<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait PRegMatchAll
{

  public function pregmatchall(
    string $pattern,
    array &$matches = null,
    int $flags = 0,
    int $offset = 0,
    int|false &$return = null
  ): static|IsStr|int|false
  {

    $return = preg_match_all(
      $pattern,
      $this->string,
      $matches,
      $flags,
      $offset
    );

    return 5 === func_num_args() ? $this : $return;

  }

}