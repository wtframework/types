<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait PRegReplaceCallbackArray
{

  public function pregreplacecallbackarray(
    array $pattern,
    int $limit = -1,
    int &$count = null,
    int $flags = 0
  ): static|IsArr
  {

    $this->array = (array) preg_replace_callback_array(
      $pattern,
      $this->array,
      $limit,
      $count,
      $flags
    );

    return $this;

  }

}