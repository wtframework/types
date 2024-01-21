<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Crypt
{

  public function crypt(string $salt): static|IsStr
  {

    $this->string = crypt($this->string, $salt);

    return $this;

  }

}