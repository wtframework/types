<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait NumEcho
{

  public function echo(
    string $prefix = '',
    string $suffix = ''
  ): static|IsNum
  {

    echo "$prefix$this->num$suffix";

    return $this;

  }

}