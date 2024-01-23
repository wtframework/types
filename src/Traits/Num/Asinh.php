<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Asinh
{

  public function asinh(): static|IsNum
  {

    $this->num = asinh($this->num);

    return $this;

  }

}