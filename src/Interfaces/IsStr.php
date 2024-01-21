<?php

declare(strict_types=1);

namespace WTFramework\Types\Interfaces;

interface IsStr
{
  public function __construct(string $string = '');
}