<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait PRegReplaceCallback
{

  public function pregreplacecallback(
    string|array $pattern,
    callable $callback,
    int $limit = -1,
    int &$count = null,
    int $flags = 0
  ): static|IsArr
  {

    $this->array = (array) preg_replace_callback(
      $pattern,
      $callback,
      $this->array,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

}