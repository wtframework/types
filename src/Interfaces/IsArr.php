<?php

declare(strict_types=1);

namespace WTFramework\Types\Interfaces;

interface IsArr
{
  public function __construct(array $array = []);
}