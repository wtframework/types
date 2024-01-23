<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Tanh
{

  public function tanh(): static|IsNum
  {

    $this->num = tanh($this->num);

    return $this;

  }

}