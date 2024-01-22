<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Str;

class StrExtend extends Str
{

  protected static string $arr = ArrExtend::class;

  public function camelCase(): static
  {

    $this->ucwords()
    ->replace(' ', '')
    ->lcfirst();

    return $this;

  }

}