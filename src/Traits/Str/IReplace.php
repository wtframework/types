<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait IReplace
{

  public function ireplace(
    array|string $search,
    array|string $replace,
    int &$count = null
  ): static|IsStr
  {

    $this->string = str_ireplace($search, $replace, $this->string, $count);

    return $this;

  }

}