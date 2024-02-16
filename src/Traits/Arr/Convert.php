<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Str;

trait Convert
{

  protected function convert(mixed $value): mixed
  {

    switch (true)
    {

      case is_array($value):
        return new static(array: $value);

      case is_string($value):
        return new Str(string: $value);

      default:
        return $value;

    }

  }

}