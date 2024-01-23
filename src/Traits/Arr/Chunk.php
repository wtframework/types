<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Chunk
{

  public function chunk(
    int $length,
    bool $preserve_keys = false
  ): static|IsArr
  {

    $this->array = array_chunk($this->array, $length, $preserve_keys);

    return $this;

  }

}