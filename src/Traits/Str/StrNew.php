<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait StrNew
{

  public static function new(string $string = ''): static|IsStr
  {
    return new static(string: $string);
  }

}