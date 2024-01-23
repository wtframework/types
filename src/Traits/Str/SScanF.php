<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Contracts\IsArr;

trait SScanF
{

  use Arr;

  public function sscanf(
    string $format,
    mixed &...$vars
  ): TypesArr|IsArr|int|null
  {

    if (is_array($result = sscanf($this->string, $format, ...$vars)))
    {
      return $this->arr(array: $result);
    }

    return $result;

  }

}