<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait AddSlashes
{

  public function addslashes(): static|IsStr
  {

    $this->string = addslashes($this->string);

    return $this;

  }

}