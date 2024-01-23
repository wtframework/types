<?php

declare(strict_types=1);

namespace WTFramework\Types\Contracts;

use Stringable;
use WTFramework\Types\Traits\Str\Arr;
use WTFramework\Types\Traits\Str\Construct;
use WTFramework\Types\Traits\Str\MagicToString;

abstract class IsStr implements Stringable
{
  use Arr;
  use Construct;
  use MagicToString;
}