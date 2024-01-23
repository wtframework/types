<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Log1P
{

  public function log1p(): static|IsNum
  {

    $this->num = log1p($this->num);

    return $this;

  }

}