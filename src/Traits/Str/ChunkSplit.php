<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait ChunkSplit
{

  public function chunksplit(
    int $length = 76,
    string $separator = "\r\n"
  ): static|IsStr
  {

    $this->string = chunk_split($this->string, $length, $separator);

    return $this;

  }

}