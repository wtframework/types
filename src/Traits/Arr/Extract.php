<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Extract
{

  public function extract(?self &$var): static|IsArr
  {

    $var = clone $this;

    return $this;

  }

}