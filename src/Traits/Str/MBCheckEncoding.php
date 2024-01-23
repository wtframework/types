<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBCheckEncoding
{

  public function mbcheckencoding(
    string $encoding = null,
    bool &$return = null
  ): static|IsStr|bool
  {

    $return = mb_check_encoding($this->string, $encoding);

    return 2 === func_num_args() ? $this : $return;

  }

}