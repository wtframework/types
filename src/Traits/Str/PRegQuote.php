<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait PRegQuote
{

  public function pregquote(string $delimeter = null): static|IsStr
  {

    $this->string = preg_quote($this->string, $delimeter);

    return $this;

  }

}