<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBConvertKana
{

  public function mbconvertkana(
    string $mode = "KV",
    string $encoding = null
  ): static|IsStr
  {

    $this->string = mb_convert_kana($this->string, $mode, $encoding);

    return $this;

  }

}