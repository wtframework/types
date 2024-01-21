<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

trait MagicInvoke
{

  public function __invoke(): string
  {
    return $this->string;
  }

}