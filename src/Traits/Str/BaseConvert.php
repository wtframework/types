<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait BaseConvert
{

  public function baseconvert(
    int $from_base,
    int $to_base
  ): static|IsStr
  {

    $this->string = base_convert($this->string, $from_base, $to_base);

    return $this;

  }

}