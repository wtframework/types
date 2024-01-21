<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait StrIReplace
{

  public function strireplace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static|IsArr
  {

    $this->array = str_ireplace($search, $replace, $this->array, $count);

    return $this;

  }

}