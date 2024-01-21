<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Str;

use WTFramework\Types\Interfaces\IsStr;

trait VSPrintF
{

  public function vsprintf(array $values): static|IsStr
  {

    $this->string = vsprintf($this->string, $values);

    return $this;

  }

}