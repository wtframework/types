<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Replace
{

  public function replace(array ...$replacements): static|IsArr
  {

    $this->array = array_replace($this->array, ...$replacements);

    return $this;

  }

}