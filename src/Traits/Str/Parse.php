<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait Parse
{

  public function parse(?array &$result): static|IsStr
  {

    parse_str($this->string, $result);

    return $this;

  }

}