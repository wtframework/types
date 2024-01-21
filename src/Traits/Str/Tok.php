<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Tok
{

  public function tok(string $token): static|IsStr
  {

    $this->string = strtok($this->string, $token);

    return $this;

  }

}