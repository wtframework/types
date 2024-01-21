<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Count
{

  public function count(int $mode = COUNT_NORMAL): int
  {
    return count($this->array, $mode);
  }

}