<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait CountChars
{

  use Arr;

  public function countchars(
    int $mode = 0,
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    if (is_array($result = count_chars($this->string, $mode)))
    {

      $return = new static::$arr(array: $result);

      return 2 === func_num_args() ? $this : $return;

    }

    $this->string = $result;

    return $this;

  }

}