<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait Ceil
{

  public function ceil(): static|IsNum
  {

    $this->num = ceil($this->num);

    return $this;

  }

}