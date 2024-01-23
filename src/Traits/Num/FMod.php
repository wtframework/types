<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait FMod
{

  public function fmod(int|float $num): static|IsNum
  {

    $this->num = fmod($this->num, $num);

    return $this;

  }

}