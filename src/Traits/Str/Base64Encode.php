<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Base64Encode
{

  public function base64encode(): static|IsStr
  {

    $this->string = base64_encode($this->string);

    return $this;

  }

}