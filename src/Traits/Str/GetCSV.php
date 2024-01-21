<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Arr as TypesArr;
use WTFramework\Types\Interfaces\IsArr;
use WTFramework\Types\Interfaces\IsStr;

trait GetCSV
{

  use Arr;

  public function getcsv(
    string $separator = ',',
    string $enclosure = '"',
    string $escape = '\\',
    TypesArr|IsArr &$return = null
  ): static|IsStr|TypesArr|IsArr
  {

    $return = new static::$arr(array: str_getcsv(
      $this->string,
      $separator,
      $enclosure,
      $escape
    ));

    return 4 === func_num_args() ? $this : $return;

  }

}