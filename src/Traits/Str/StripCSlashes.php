<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait StripCSlashes
{

  public function stripcslashes(): static|IsStr
  {

    $this->string = stripcslashes($this->string);

    return $this;

  }

}