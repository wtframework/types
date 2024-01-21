<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

trait Construct
{
  public function __construct(protected array $array = []) {}
}