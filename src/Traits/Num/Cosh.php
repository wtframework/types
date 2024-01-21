<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Cosh
{

  public function cosh(): static|IsNum
  {

    $this->num = cosh($this->num);

    return $this;

  }

}