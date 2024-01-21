<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Log
{

  public function log(int|float $base = M_E): static|IsNum
  {

    $this->num = log($this->num, $base);

    return $this;

  }

}