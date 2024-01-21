<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Exp
{

  public function exp(): static|IsNum
  {

    $this->num = exp($this->num);

    return $this;

  }

}