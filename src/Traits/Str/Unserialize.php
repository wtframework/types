<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

trait Unserialize
{

  use Arr;

  public static function unserialize(
    string $data,
    array $options = []
  ): mixed
  {

    if (!is_string($result = unserialize($data, $options)))
    {
      return is_array($result) ? new static::$arr(array: $result) : $result;
    }

    return new static(string: $result);

  }

}