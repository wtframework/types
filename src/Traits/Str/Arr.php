<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;

trait Arr
{

  protected static string $arr = TypesArr::class;

  public static function arr(string $arr): void
  {
    static::$arr = $arr;
  }

}