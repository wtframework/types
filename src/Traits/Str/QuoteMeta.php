<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait QuoteMeta
{

  public function quotemeta(): static|IsStr
  {

    $this->string = quotemeta($this->string);

    return $this;

  }

}