<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Shuffle
{

  public function shuffle(): static|IsArr
  {

    shuffle($this->array);

    return $this;

  }

}