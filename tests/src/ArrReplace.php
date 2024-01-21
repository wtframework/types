<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Interfaces\IsArr;

class ArrReplace implements IsArr
{

  public function __construct(protected array $array = []) {}

  public function toString(): StrReplace
  {
    return new StrReplace(string: implode('-', $this->array));
  }

  public function __invoke(): array
  {
    return $this->array;
  }

}