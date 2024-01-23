<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait SHA1
{

  public function sha1(bool $binary = false): static|IsStr
  {

    $this->string = sha1($this->string, $binary);

    return $this;

  }

}