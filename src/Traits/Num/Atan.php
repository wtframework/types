<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Atan
{

  public function atan(): static|IsNum
  {

    $this->num = atan($this->num);

    return $this;

  }

}