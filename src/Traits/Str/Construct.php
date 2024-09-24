<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

trait Construct
{
  public function __construct(protected string $string = "") {}
}