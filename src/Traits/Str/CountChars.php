<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait CountChars
{

  public function countchars(
    int $mode = 0,
    Arr|IsArr &$return = null
  ): static|IsStr|Arr|IsArr
  {

    if (is_array($result = count_chars($this->string, $mode)))
    {

      $return = new Arr(array: $result);

      return 2 === func_num_args() ? $this : $return;

    }

    $this->string = $result;

    return $this;

  }

}