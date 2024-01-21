<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Cos
{

  public function cos(): static|IsNum
  {

    $this->num = cos($this->num);

    return $this;

  }

}