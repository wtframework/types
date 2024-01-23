<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait CRC32
{

  public function crc32(int &$return = null): static|IsStr|int
  {

    $return = crc32($this->string);

    return func_num_args() ? $this : $return;

  }

}