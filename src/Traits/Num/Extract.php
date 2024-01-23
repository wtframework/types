<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Extract
{

  public function extract(?self &$var): static|IsNum
  {

    $var = clone $this;

    return $this;

  }

}