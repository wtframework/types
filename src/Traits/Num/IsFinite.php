<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait IsFinite
{

  public function isfinite(bool &$return = null): static|IsNum|bool
  {

    $return = is_finite($this->num);

    return func_num_args() ? $this : $return;

  }

}