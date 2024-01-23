<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait StrReplace
{

  public function strreplace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static|IsArr
  {

    $this->array = str_replace($search, $replace, $this->array, $count);

    return $this;

  }

}