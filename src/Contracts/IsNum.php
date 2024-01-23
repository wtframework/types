<?php

declare(strict_types=1);

namespace WTFramework\Types\Contracts;

use Stringable;
use WTFramework\Types\Traits\Num\Construct;
use WTFramework\Types\Traits\Num\MagicToString;

abstract class IsNum implements Stringable
{
  use Construct;
  use MagicToString;
}