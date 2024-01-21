<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Extract
{

  public function extract(?self &$var): static|IsNum
  {

    $var = clone $this;

    return $this;

  }

}