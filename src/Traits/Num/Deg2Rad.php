<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Deg2Rad
{

  public function deg2rad(): static|IsNum
  {

    $this->num = deg2rad($this->num);

    return $this;

  }

}