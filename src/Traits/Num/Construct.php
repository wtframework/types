<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

trait Construct
{
  public function __construct(protected int|float $num = 0.0) {}
}