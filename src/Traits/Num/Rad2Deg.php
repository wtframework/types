<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Rad2Deg
{

  public function rad2deg(): static|IsNum
  {

    $this->num = rad2deg($this->num);

    return $this;

  }

}