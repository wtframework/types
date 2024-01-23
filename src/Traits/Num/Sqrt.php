<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Sqrt
{

  public function sqrt(): static|IsNum
  {

    $this->num = sqrt($this->num);

    return $this;

  }

}