<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Soundex
{

  public function soundex(): static|IsStr
  {

    $this->string = soundex($this->string);

    return $this;

  }

}