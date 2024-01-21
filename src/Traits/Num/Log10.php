<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Log10
{

  public function log10(): static|IsNum
  {

    $this->num = log10($this->num);

    return $this;

  }

}