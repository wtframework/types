<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Atan2
{

  public function atan2(int|float $x): static|IsNum
  {

    $this->num = atan2($this->num, $x);

    return $this;

  }

}