<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Sin
{

  public function sin(): static|IsNum
  {

    $this->num = sin($this->num);

    return $this;

  }

}