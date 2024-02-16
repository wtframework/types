<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait WordCount
{

  public function wordcount(
    int $format = 0,
    string $characters = null,
    Arr|IsArr|int &$return = null
  ): static|IsStr|Arr|IsArr|int
  {

    $result = str_word_count($this->string, $format, $characters);

    $return = is_array($result) ? new Arr(array: $result) : $result;

    return 3 === func_num_args() ? $this : $return;

  }

}