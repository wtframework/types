<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait NatCaseSort
{

  public function natcasesort(): static|IsArr
  {

    natcasesort($this->array);

    return $this;

  }

}