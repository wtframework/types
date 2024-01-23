<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait ROT13
{

  public function rot13(): static|IsStr
  {

    $this->string = str_rot13($this->string);

    return $this;

  }

}