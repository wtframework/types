<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait MergeRecursive
{

  public function mergerecursive(array ...$arrays): static|IsArr
  {

    $this->array = array_merge_recursive($this->array, ...$arrays);

    return $this;

  }

}