<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait OctDec
{

  public function octdec(): static|IsNum
  {

    $this->num = (int) octdec((string) (int) $this->num);

    return $this;

  }

}