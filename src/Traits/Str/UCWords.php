<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait UCWords
{

  public function ucwords(): static|IsStr
  {

    $this->string = ucwords($this->string);

    return $this;

  }

}