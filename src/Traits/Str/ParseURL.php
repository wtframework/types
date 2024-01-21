<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait ParseURL
{

  use Arr;

  public function parseurl(
    int $component = -1,
    TypesArr|IsArr|int|null|false &$return = null
  ): static|IsStr|TypesArr|IsArr|int|null|false
  {

    if (!is_string($result = parse_url($this->string, $component)))
    {

      $return = is_array($result) ? new static::$arr(array: $result) : $result;

      return 2 === func_num_args() ? $this : $return;

    }

    $this->string = $result;

    return $this;

  }

}