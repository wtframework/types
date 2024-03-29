<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Abs
{

  public function abs(): static|IsNum
  {

    $this->num = abs($this->num);

    return $this;

  }

}