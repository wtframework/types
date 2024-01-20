<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Str;

class StrExtend extends Str
{

  protected static string $arr = ArrExtend::class;

  public function string(string $string): static
  {

    $this->string = $string;

    return $this;

  }

}