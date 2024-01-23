<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Extract
{

  public function extract(?self &$var): static|IsStr
  {

    $var = clone $this;

    return $this;

  }

}