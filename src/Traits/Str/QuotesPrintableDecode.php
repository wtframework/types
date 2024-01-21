<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait QuotesPrintableDecode
{

  public function quotedprintabledecode(): static|IsStr
  {

    $this->string = quoted_printable_decode($this->string);

    return $this;

  }

}