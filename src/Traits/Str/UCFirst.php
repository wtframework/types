<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait UCFirst
{

  public function ucfirst(): static|IsStr
  {

    $this->string = ucfirst($this->string);

    return $this;

  }

}