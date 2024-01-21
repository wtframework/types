<?php

declare(strict_types=1);

namespace WTFramework\Types\Interfaces;

interface IsNum
{
  public function __construct(int|float $num = 0.0);
}