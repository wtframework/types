<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait HexDec
{

  public function hexdec(int|float &$return = null): static|IsStr|int|float
  {

    $return = hexdec($this->string);

    return func_num_args() ? $this : $return;

  }

}