<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Pow
{

  public function pow(int|float $exponent): static|IsNum
  {

    $this->num = pow($this->num, $exponent);

    return $this;

  }

}