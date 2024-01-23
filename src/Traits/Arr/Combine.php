<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Combine
{

  public function combine(array $values): static|IsArr
  {

    $this->array = array_combine($this->array, $values);

    return $this;

  }

}