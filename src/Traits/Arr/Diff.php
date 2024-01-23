<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Diff
{

  public function diff(array ...$arrays): static|IsArr
  {

    $this->array = array_diff($this->array, ...$arrays);

    return $this;

  }

}