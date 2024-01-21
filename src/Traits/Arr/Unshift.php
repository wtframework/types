<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Unshift
{

  public function unshift(mixed ...$values): static|IsArr
  {

    array_unshift($this->array, ...$values);

    return $this;

  }

}