<?php

declare(strict_types=1);

namespace WTFramework\Types\Contracts;

use Stringable;
use WTFramework\Types\Traits\Str\Construct;
use WTFramework\Types\Traits\Str\MagicToString;

abstract class IsStr implements Stringable
{
  use Construct;
  use MagicToString;
}