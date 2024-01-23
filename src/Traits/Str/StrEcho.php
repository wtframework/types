<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait StrEcho
{

  public function echo(
    string $prefix = '',
    string $suffix = ''
  ): static|IsStr
  {

    echo "$prefix$this->string$suffix";

    return $this;

  }

}