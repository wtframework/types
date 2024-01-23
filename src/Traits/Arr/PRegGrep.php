<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait PRegGrep
{

  public function preggrep(
    string $pattern,
    int $flags = 0
  ): static|IsArr
  {

    $this->array = (array) preg_grep($pattern, $this->array, $flags);

    return $this;

  }

}