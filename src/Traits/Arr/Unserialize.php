<?php

declare(strict_types=1);

namespace WTFramework\Types\Traits\Arr;

use WTFramework\Types\Contracts\IsArr;

trait Unserialize
{

  public function unserialize(string $data): static|IsArr
  {

    $this->array = (array) unserialize($data);

    return $this;

  }

}