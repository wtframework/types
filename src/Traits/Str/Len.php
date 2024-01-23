<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Len
{

  public function len(int &$return = null): static|IsStr|int
  {

    $return = strlen($this->string);

    return func_num_args() ? $this : $return;

  }

}