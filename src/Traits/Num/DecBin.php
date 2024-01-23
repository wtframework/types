<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait DecBin
{

  public function decbin(): static|IsNum
  {

    $this->num = (int) decbin((int) $this->num);

    return $this;

  }

}