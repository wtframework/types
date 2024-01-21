<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait MBParse
{

  public function mbparse(?array &$result): static|IsStr
  {

    mb_parse_str($this->string, $result);

    return $this;

  }

}