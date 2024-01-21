<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Round
{

  public function round(
    int $precision = 0,
    int $mode = PHP_ROUND_HALF_UP
  ): static|IsNum
  {

    $this->num = round($this->num, $precision, $mode);

    return $this;

  }

}