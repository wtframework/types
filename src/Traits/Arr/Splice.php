<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Splice
{

  public function splice(
    int $offset,
    int $length = null,
    mixed $replacement = []
  ): static|IsArr
  {

    array_splice(
      $this->array,
      $offset,
      $length,
      $replacement
    );

    return $this;


  }

}