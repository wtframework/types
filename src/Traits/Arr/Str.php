<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Str as TypesStr;
use WTFramework\Types\Contracts\IsStr;

trait Str
{

  protected string $str = TypesStr::class;

  protected function str(string $string): TypesStr|IsStr
  {
    return new ($this->str)(string: $string);
  }

}