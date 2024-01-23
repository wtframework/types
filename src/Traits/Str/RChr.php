<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait RChr
{

  public function rchr(string $needle): static|IsStr
  {

    $this->string = (string) strrchr($this->string, $needle);

    return $this;

  }

}