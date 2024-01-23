<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Num;

use WTFramework\Types\Contracts\IsNum;

trait Tan
{

  public function tan(): static|IsNum
  {

    $this->num = tan($this->num);

    return $this;

  }

}