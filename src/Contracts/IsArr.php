<?php

declare(strict_types=1);

namespace WTFramework\Types\Contracts;

use ArrayAccess;
use Countable;
use Iterator;
use Serializable;
use WTFramework\Types\Traits\Arr\Construct;
use WTFramework\Types\Traits\Arr\Count;
use WTFramework\Types\Traits\Arr\Current;
use WTFramework\Types\Traits\Arr\Key;
use WTFramework\Types\Traits\Arr\MagicSerialize;
use WTFramework\Types\Traits\Arr\MagicUnserialize;
use WTFramework\Types\Traits\Arr\Next;
use WTFramework\Types\Traits\Arr\OffsetExists;
use WTFramework\Types\Traits\Arr\OffsetGet;
use WTFramework\Types\Traits\Arr\OffsetSet;
use WTFramework\Types\Traits\Arr\OffsetUnset;
use WTFramework\Types\Traits\Arr\Rewind;
use WTFramework\Types\Traits\Arr\Serialize;
use WTFramework\Types\Traits\Arr\Str;
use WTFramework\Types\Traits\Arr\Unserialize;
use WTFramework\Types\Traits\Arr\Valid;

abstract class IsArr implements ArrayAccess, Countable, Iterator, Serializable
{
  use Construct;
  use Count;
  use Current;
  use Key;
  use MagicSerialize;
  use MagicUnserialize;
  use Next;
  use OffsetExists;
  use OffsetGet;
  use OffsetSet;
  use OffsetUnset;
  use Rewind;
  use Serialize;
  use Str;
  use Unserialize;
  use Valid;
}