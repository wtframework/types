<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait SPrintF
{

  public function sprintf(mixed ...$values): static|IsStr
  {

    $this->string = sprintf($this->string, ...$values);

    return $this;

  }

}