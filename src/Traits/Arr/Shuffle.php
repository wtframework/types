<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Interfaces\IsArr;

trait Shuffle
{

  public function shuffle(): static|IsArr
  {

    shuffle($this->array);

    return $this;

  }

}