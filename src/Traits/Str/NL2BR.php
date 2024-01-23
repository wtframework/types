<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait NL2BR
{

  public function nl2br(bool $use_xhtml = true): static|IsStr
  {

    $this->string = nl2br($this->string, $use_xhtml);

    return $this;

  }

}