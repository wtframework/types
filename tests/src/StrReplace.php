<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Contracts\IsStr;
use WTFramework\Types\Traits\Str\MagicInvoke;

class StrReplace extends IsStr
{

  use MagicInvoke;

  protected string $arr = ArrReplace::class;

  public function toArray(): ArrReplace|IsArr
  {
    return $this->arr(array: explode('-', $this->string));
  }

}