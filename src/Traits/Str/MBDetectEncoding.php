<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBDetectEncoding
{

  public function mbdetectencoding(
    array|string $encodings = null,
    bool $strict = false,
    string|false &$return = null
  ): static|IsStr|string|false
  {

    $return = mb_detect_encoding($this->string, $encodings, $strict);

    return 3 === func_num_args() ? $this : $return;

  }

}