<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait ReplaceRecursive
{

  public function replacerecursive(array ...$replacements): static|IsArr
  {

    $this->array = array_replace_recursive($this->array, ...$replacements);

    return $this;

  }

}