<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait PrintR
{

  public function printr(): static|IsArr
  {

    print_r($this->array);

    return $this;

  }

}