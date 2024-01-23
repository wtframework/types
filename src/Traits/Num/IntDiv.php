<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait IntDiv
{

  public function intdiv(int $num): static|IsNum
  {

    $this->num = intdiv((int) $this->num, $num);

    return $this;

  }

}