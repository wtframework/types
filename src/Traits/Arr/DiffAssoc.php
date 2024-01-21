<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait DiffAssoc
{

  public function diffassoc(array ...$arrays): static|IsArr
  {

    $this->array = array_diff_assoc($this->array, ...$arrays);

    return $this;

  }

}