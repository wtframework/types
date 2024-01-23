<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait AddCSlashes
{

  public function addcslashes(string $characters): static|IsStr
  {

    $this->string = addcslashes($this->string, $characters);

    return $this;

  }

}