<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait PBrk
{

  public function pbrk(string $characters): static|IsStr
  {

    $this->string = (string) strpbrk($this->string, $characters);

    return $this;

  }

}