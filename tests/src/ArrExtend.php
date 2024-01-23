<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Arr;

class ArrExtend extends Arr
{

  protected string $str = StrExtend::class;

  public function array(array $array): static
  {

    $this->array = $array;

    return $this;

  }

}