<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait StripSlashes
{

  public function stripslashes(): static|IsStr
  {

    $this->string = stripslashes($this->string);

    return $this;

  }

}