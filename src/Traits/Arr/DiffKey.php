<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait DiffKey
{

  public function diffkey(array ...$arrays): static|IsArr
  {

    $this->array = array_diff_key($this->array, ...$arrays);

    return $this;

  }

}