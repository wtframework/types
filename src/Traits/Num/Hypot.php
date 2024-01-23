<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Hypot
{

  public function hypot(int|float $y): static|IsNum
  {

    $this->num = hypot($this->num, $y);

    return $this;

  }

}