<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait DecOct
{

  public function decoct(): static|IsNum
  {

    $this->num = (int) decoct((int) $this->num);

    return $this;

  }

}