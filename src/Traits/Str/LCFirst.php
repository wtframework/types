<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait LCFirst
{

  public function lcfirst(): static|IsStr
  {

    $this->string = lcfirst($this->string);

    return $this;

  }

}