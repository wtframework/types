<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Str;

class StrExtend extends Str
{

  protected static string $arr = ArrExtend::class;

  public function camelCase(): static
  {

    return $this->ucwords()
    ->replace(' ', '')
    ->lcfirst();

  }

}