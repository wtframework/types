<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr;
use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;

trait GetCSV
{

  public function getcsv(
    string $separator = ',',
    string $enclosure = '"',
    string $escape = '\\',
    Arr|IsArr &$return = null
  ): static|IsStr|Arr|IsArr
  {

    $return = new Arr(array: str_getcsv(
      $this->string,
      $separator,
      $enclosure,
      $escape
    ));

    return 4 === func_num_args() ? $this : $return;

  }

}