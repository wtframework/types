<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Asin
{

  public function asin(): static|IsNum
  {

    $this->num = asin($this->num);

    return $this;

  }

}