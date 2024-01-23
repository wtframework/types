<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Push
{

  public function push(mixed ...$values): static|IsArr
  {

    array_push($this->array, ...$values);

    return $this;

  }

}