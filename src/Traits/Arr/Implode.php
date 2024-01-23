<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;
use WTFramework\Types\Str as TypesStr;

trait Implode
{

  use Str;

  public function implode(
    string $delimeter = '',
    TypesStr|IsStr &$return = null
  ): static|IsArr|TypesStr|IsStr
  {

    $return = $this->str(string: implode($delimeter, $this->array));

    return 2 === func_num_args() ? $this : $return;

  }

}