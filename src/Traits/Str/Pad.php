<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait Pad
{

  public function pad(
    int $length,
    string $pad_string = ' ',
    int $pad_type = STR_PAD_RIGHT
  ): static|IsStr
  {

    $this->string = str_pad($this->string, $length, $pad_string, $pad_type);

    return $this;

  }

}