<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait RawURLDecode
{

  public function rawurldecode(): static|IsStr
  {

    $this->string = rawurldecode($this->string);

    return $this;

  }

}