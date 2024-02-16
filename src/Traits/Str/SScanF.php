<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;

trait SScanF
{

  public function sscanf(
    string $format,
    mixed &...$vars
  ): Arr|IsArr|int|null
  {

    if (is_array($result = sscanf($this->string, $format, ...$vars)))
    {
      return new Arr(array: $result);
    }

    return $result;

  }

}