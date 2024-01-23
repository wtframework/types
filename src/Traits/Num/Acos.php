<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Acos
{

  public function acos(): static|IsNum
  {

    $this->num = acos($this->num);

    return $this;

  }

}