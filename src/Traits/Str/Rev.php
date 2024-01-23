<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Rev
{

  public function rev(): static|IsStr
  {

    $this->string = strrev($this->string);

    return $this;

  }

}