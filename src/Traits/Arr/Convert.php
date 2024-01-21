<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Convert
{

  use Str;

  protected function convert(mixed $value): mixed
  {

    switch (true)
    {

      case is_array($value):
        return new static(array: $value);

      case is_string($value):
        return new static::$str(string: $value);

      default:
        return $value;

    }

  }

}