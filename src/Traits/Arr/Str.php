<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Str as TypesStr;

trait Str
{

  protected static string $str = TypesStr::class;

  public static function str(string $str): void
  {
    static::$str = $str;
  }

}