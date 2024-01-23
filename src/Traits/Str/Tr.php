<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Tr
{

  public function tr(
    string|array $from,
    ?string $to
  ): static|IsStr
  {

    $this->string = strtr($this->string, ...func_get_args());

    return $this;

  }

}