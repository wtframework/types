<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Contracts\IsStr;

trait MBScrub
{

  public function mbscrub(string $encoding = null): static|IsStr
  {

    $this->string = mb_scrub($this->string, $encoding);

    return $this;

  }

}