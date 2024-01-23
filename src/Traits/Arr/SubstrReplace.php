<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait SubstrReplace
{

  public function substrreplace(
    array|string $replace,
    array|int $offset,
    array|int $length = null
  ): static|IsArr
  {

    $this->array = substr_replace($this->array, $replace, $offset, $length);

    return $this;

  }

}