<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Contracts\IsStr;
use WTFramework\Types\Str;

class StrExtend extends Str
{

  protected string $arr = ArrExtend::class;

  public function camelCase(): static|IsStr
  {

    return $this->ucwords()
    ->replace(' ', '')
    ->lcfirst();

  }

}