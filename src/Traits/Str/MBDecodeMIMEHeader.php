<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBDecodeMIMEHeader
{

  public function mbdecodemimeheader(): static|IsStr
  {

    $this->string = mb_decode_mimeheader($this->string);

    return $this;

  }

}