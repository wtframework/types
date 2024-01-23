<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

trait JSONDecode
{

  use Arr;

  public function jsondecode(
    bool $associative = null,
    int $depth = 512,
    int $flags = 0,
    mixed &$return = null
  ): mixed
  {

    $result = json_decode($this->string, $associative, $depth, $flags);

    $return = is_array($result) ? $this->arr(array: $result) : $result;

    return 4 === func_num_args() ? $this : $return;

  }

}