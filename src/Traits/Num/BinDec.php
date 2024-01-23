<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait BinDec
{

  public function bindec(): static|IsNum
  {

    $this->num = bindec((string) (int) $this->num);

    return $this;

  }

}