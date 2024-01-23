<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Reverse
{

  public function reverse(bool $preserve_keys = false): static|IsArr
  {

    $this->array = array_reverse($this->array, $preserve_keys);

    return $this;

  }

}