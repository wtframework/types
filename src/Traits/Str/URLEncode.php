<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait URLEncode
{

  public function urlencode(): static|IsStr
  {

    $this->string = urlencode($this->string);

    return $this;

  }

}