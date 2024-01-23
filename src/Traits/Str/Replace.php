<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Replace
{

  public function replace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static|IsStr
  {

    $this->string = str_replace($search, $replace, $this->string, $count);

    return $this;

  }

}