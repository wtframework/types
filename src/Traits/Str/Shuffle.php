<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Shuffle
{

  public function shuffle(): static|IsStr
  {

    $this->string = str_shuffle($this->string);

    return $this;

  }

}