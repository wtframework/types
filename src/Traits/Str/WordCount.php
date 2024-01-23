<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait WordCount
{

  use Arr;

  public function wordcount(
    int $format = 0,
    string $characters = null,
    TypesArr|IsArr|int &$return = null
  ): static|IsStr|TypesArr|IsArr|int
  {

    $result = str_word_count($this->string, $format, $characters);

    $return = is_array($result) ? $this->arr(array: $result) : $result;

    return 3 === func_num_args() ? $this : $return;

  }

}