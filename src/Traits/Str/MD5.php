<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MD5
{

  public function md5(bool $binary = false): static|IsStr
  {

    $this->string = md5($this->string, $binary);

    return $this;

  }

}