<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Floor
{

  public function floor(): static|IsNum
  {

    $this->num = floor($this->num);

    return $this;

  }

}