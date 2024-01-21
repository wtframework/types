<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Interfaces\IsNum;

trait IsInfinite
{

  public function isinfinite(bool &$return = null): static|IsNum|bool
  {

    $return = is_infinite($this->num);

    return func_num_args() ? $this : $return;

  }

}