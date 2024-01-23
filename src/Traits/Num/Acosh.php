<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Acosh
{

  public function acosh(): static|IsNum
  {

    $this->num = acosh($this->num);

    return $this;

  }

}