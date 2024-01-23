<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait VarDump
{

  public function vardump(): static|IsArr
  {

    var_dump($this->array);

    return $this;

  }

}