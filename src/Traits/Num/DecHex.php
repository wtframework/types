<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait DecHex
{

  public function dechex(string &$return = null): static|IsNum|string
  {

    $return = dechex((int) $this->num);

    return func_num_args() ? $this : $return;

  }

}