<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait URLDecode
{

  public function urldecode(): static|IsStr
  {

    $this->string = urldecode($this->string);

    return $this;

  }

}