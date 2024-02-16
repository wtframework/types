<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait ParseURL
{

  public function parseurl(
    int $component = -1,
    Arr|IsArr|int|null|false &$return = null
  ): static|IsStr|Arr|IsArr|int|null|false
  {

    if (!is_string($result = parse_url($this->string, $component)))
    {

      $return = is_array($result) ? new Arr(array: $result) : $result;

      return 2 === func_num_args() ? $this : $return;

    }

    $this->string = $result;

    return $this;

  }

}