<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait FDiv
{

  public function fdiv(int|float $num): static|IsNum
  {

    $this->num = fdiv($this->num, $num);

    return $this;

  }

}