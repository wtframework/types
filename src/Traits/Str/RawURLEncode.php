<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait RawURLEncode
{

  public function rawurlencode(): static|IsStr
  {

    $this->string = rawurlencode($this->string);

    return $this;

  }

}