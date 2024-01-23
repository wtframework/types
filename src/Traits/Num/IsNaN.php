<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait IsNaN
{

  public function isnan(bool &$return = null): static|IsNum|bool
  {

    $return = is_nan($this->num);

    return func_num_args() ? $this : $return;

  }

}