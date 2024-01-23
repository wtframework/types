<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait ExpM1
{

  public function expm1(): static|IsNum
  {

    $this->num = expm1($this->num);

    return $this;

  }

}