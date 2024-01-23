<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Sinh
{

  public function sinh(): static|IsNum
  {

    $this->num = sinh($this->num);

    return $this;

  }

}