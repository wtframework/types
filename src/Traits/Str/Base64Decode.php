<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Base64Decode
{

  public function base64decode(bool $strict = false): static|IsStr
  {

    $this->string = (string) base64_decode($this->string, $strict);

    return $this;

  }

}