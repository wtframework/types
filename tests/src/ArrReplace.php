<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;
use WTFramework\Types\Traits\Arr\MagicInvoke;

class ArrReplace extends IsArr
{

  use MagicInvoke;

  protected string $str = StrReplace::class;

  public function toString(): StrReplace|IsStr
  {
    return $this->str(string: implode('-', $this->array));
  }

}