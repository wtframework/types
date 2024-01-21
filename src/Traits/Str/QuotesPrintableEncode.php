<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait QuotesPrintableEncode
{

  public function quotedprintableencode(): static|IsStr
  {

    $this->string = quoted_printable_encode($this->string);

    return $this;

  }

}