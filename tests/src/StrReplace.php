<?php

declare(strict_types=1);

namespace Test;

use WTFramework\Types\Interfaces\IsStr;

class StrReplace implements IsStr
{

  public function __construct(protected string $string = '') {}

  public function toArray(): ArrReplace
  {
    return new ArrReplace(array: explode('-', $this->string));
  }

  public function __invoke(): string
  {
    return $this->string;
  }

}