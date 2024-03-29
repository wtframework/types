<?php

declare(strict_types=1);

namespace WTFramework\Types;

use WTFramework\Types\Contracts\IsNum;
use WTFramework\Types\Traits\Macroable;
use WTFramework\Types\Traits\Num\Abs;
use WTFramework\Types\Traits\Num\Acos;
use WTFramework\Types\Traits\Num\Acosh;
use WTFramework\Types\Traits\Num\Asin;
use WTFramework\Types\Traits\Num\Asinh;
use WTFramework\Types\Traits\Num\Atan;
use WTFramework\Types\Traits\Num\Atan2;
use WTFramework\Types\Traits\Num\BaseConvert;
use WTFramework\Types\Traits\Num\BinDec;
use WTFramework\Types\Traits\Num\Ceil;
use WTFramework\Types\Traits\Num\Cos;
use WTFramework\Types\Traits\Num\Cosh;
use WTFramework\Types\Traits\Num\DecBin;
use WTFramework\Types\Traits\Num\DecHex;
use WTFramework\Types\Traits\Num\DecOct;
use WTFramework\Types\Traits\Num\Deg2Rad;
use WTFramework\Types\Traits\Num\Exp;
use WTFramework\Types\Traits\Num\ExpM1;
use WTFramework\Types\Traits\Num\Extract;
use WTFramework\Types\Traits\Num\FDiv;
use WTFramework\Types\Traits\Num\Floor;
use WTFramework\Types\Traits\Num\FMod;
use WTFramework\Types\Traits\Num\Hypot;
use WTFramework\Types\Traits\Num\IntDiv;
use WTFramework\Types\Traits\Num\IsFinite;
use WTFramework\Types\Traits\Num\IsInfinite;
use WTFramework\Types\Traits\Num\IsNaN;
use WTFramework\Types\Traits\Num\Log;
use WTFramework\Types\Traits\Num\Log10;
use WTFramework\Types\Traits\Num\Log1P;
use WTFramework\Types\Traits\Num\MagicGet;
use WTFramework\Types\Traits\Num\MagicInvoke;
use WTFramework\Types\Traits\Num\Max;
use WTFramework\Types\Traits\Num\Min;
use WTFramework\Types\Traits\Num\NumEcho;
use WTFramework\Types\Traits\Num\NumNew;
use WTFramework\Types\Traits\Num\NumReturn;
use WTFramework\Types\Traits\Num\OctDec;
use WTFramework\Types\Traits\Num\Pi;
use WTFramework\Types\Traits\Num\Pow;
use WTFramework\Types\Traits\Num\Rad2Deg;
use WTFramework\Types\Traits\Num\Round;
use WTFramework\Types\Traits\Num\Sin;
use WTFramework\Types\Traits\Num\Sinh;
use WTFramework\Types\Traits\Num\Sqrt;
use WTFramework\Types\Traits\Num\Tan;
use WTFramework\Types\Traits\Num\Tanh;

class Num extends IsNum
{
  use Abs;
  use Acos;
  use Acosh;
  use Asin;
  use Asinh;
  use Atan;
  use Atan2;
  use BaseConvert;
  use BinDec;
  use Ceil;
  use Cos;
  use Cosh;
  use DecBin;
  use DecHex;
  use DecOct;
  use Deg2Rad;
  use Exp;
  use ExpM1;
  use Extract;
  use FDiv;
  use Floor;
  use FMod;
  use Hypot;
  use IntDiv;
  use IsFinite;
  use IsInfinite;
  use IsNaN;
  use Log;
  use Log10;
  use Log1P;
  use Macroable;
  use MagicGet;
  use MagicInvoke;
  use Max;
  use Min;
  use NumEcho;
  use NumNew;
  use NumReturn;
  use OctDec;
  use Pi;
  use Pow;
  use Rad2Deg;
  use Round;
  use Sin;
  use Sinh;
  use Sqrt;
  use Tan;
  use Tanh;
}