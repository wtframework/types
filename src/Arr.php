<?php

declare(strict_types=1);

namespace WTFramework\Types;

use WTFramework\Types\Contracts\IsArr;
use WTFramework\Types\Traits\Arr\Advance;
use WTFramework\Types\Traits\Arr\ArrNew;
use WTFramework\Types\Traits\Arr\ArrReturn;
use WTFramework\Types\Traits\Arr\ARSort;
use WTFramework\Types\Traits\Arr\ASort;
use WTFramework\Types\Traits\Arr\ChangeKeyCase;
use WTFramework\Types\Traits\Arr\Chunk;
use WTFramework\Types\Traits\Arr\Column;
use WTFramework\Types\Traits\Arr\Combine;
use WTFramework\Types\Traits\Arr\Contains;
use WTFramework\Types\Traits\Arr\CountValues;
use WTFramework\Types\Traits\Arr\Diff;
use WTFramework\Types\Traits\Arr\DiffAssoc;
use WTFramework\Types\Traits\Arr\DiffKey;
use WTFramework\Types\Traits\Arr\DiffUAssoc;
use WTFramework\Types\Traits\Arr\DiffUKey;
use WTFramework\Types\Traits\Arr\End;
use WTFramework\Types\Traits\Arr\Extract;
use WTFramework\Types\Traits\Arr\Fill;
use WTFramework\Types\Traits\Arr\FillKeys;
use WTFramework\Types\Traits\Arr\Filter;
use WTFramework\Types\Traits\Arr\Flip;
use WTFramework\Types\Traits\Arr\Implode;
use WTFramework\Types\Traits\Arr\Intersect;
use WTFramework\Types\Traits\Arr\IntersectAssoc;
use WTFramework\Types\Traits\Arr\IntersectKey;
use WTFramework\Types\Traits\Arr\IntersectUAssoc;
use WTFramework\Types\Traits\Arr\IntersectUKey;
use WTFramework\Types\Traits\Arr\IsList;
use WTFramework\Types\Traits\Arr\JSONEncode;
use WTFramework\Types\Traits\Arr\KeyExists;
use WTFramework\Types\Traits\Arr\KeyFirst;
use WTFramework\Types\Traits\Arr\KeyLast;
use WTFramework\Types\Traits\Arr\Keys;
use WTFramework\Types\Traits\Arr\KRSort;
use WTFramework\Types\Traits\Arr\KSort;
use WTFramework\Types\Traits\Arr\MagicGet;
use WTFramework\Types\Traits\Arr\MagicInvoke;
use WTFramework\Types\Traits\Arr\Map;
use WTFramework\Types\Traits\Arr\Max;
use WTFramework\Types\Traits\Arr\Merge;
use WTFramework\Types\Traits\Arr\MergeRecursive;
use WTFramework\Types\Traits\Arr\Min;
use WTFramework\Types\Traits\Arr\MultiSort;
use WTFramework\Types\Traits\Arr\NatCaseSort;
use WTFramework\Types\Traits\Arr\NatSort;
use WTFramework\Types\Traits\Arr\Pad;
use WTFramework\Types\Traits\Arr\Pop;
use WTFramework\Types\Traits\Arr\PRegFilter;
use WTFramework\Types\Traits\Arr\PRegGrep;
use WTFramework\Types\Traits\Arr\PRegReplace;
use WTFramework\Types\Traits\Arr\PRegReplaceCallback;
use WTFramework\Types\Traits\Arr\PRegReplaceCallbackArray;
use WTFramework\Types\Traits\Arr\Prev;
use WTFramework\Types\Traits\Arr\PrintR;
use WTFramework\Types\Traits\Arr\Product;
use WTFramework\Types\Traits\Arr\Push;
use WTFramework\Types\Traits\Arr\Rand;
use WTFramework\Types\Traits\Arr\Range;
use WTFramework\Types\Traits\Arr\Reduce;
use WTFramework\Types\Traits\Arr\Replace;
use WTFramework\Types\Traits\Arr\ReplaceRecursive;
use WTFramework\Types\Traits\Arr\Reset;
use WTFramework\Types\Traits\Arr\Reverse;
use WTFramework\Types\Traits\Arr\RSort;
use WTFramework\Types\Traits\Arr\Search;
use WTFramework\Types\Traits\Arr\Shift;
use WTFramework\Types\Traits\Arr\Shuffle;
use WTFramework\Types\Traits\Arr\Slice;
use WTFramework\Types\Traits\Arr\Sort;
use WTFramework\Types\Traits\Arr\Splice;
use WTFramework\Types\Traits\Arr\StrIReplace;
use WTFramework\Types\Traits\Arr\StrReplace;
use WTFramework\Types\Traits\Arr\SubstrReplace;
use WTFramework\Types\Traits\Arr\Sum;
use WTFramework\Types\Traits\Arr\UASort;
use WTFramework\Types\Traits\Arr\UDiff;
use WTFramework\Types\Traits\Arr\UDiffAssoc;
use WTFramework\Types\Traits\Arr\UDiffUAssoc;
use WTFramework\Types\Traits\Arr\UIntersect;
use WTFramework\Types\Traits\Arr\UIntersectAssoc;
use WTFramework\Types\Traits\Arr\UIntersectUAssoc;
use WTFramework\Types\Traits\Arr\UKSort;
use WTFramework\Types\Traits\Arr\Unique;
use WTFramework\Types\Traits\Arr\Unshift;
use WTFramework\Types\Traits\Arr\USort;
use WTFramework\Types\Traits\Arr\Values;
use WTFramework\Types\Traits\Arr\VarDump;
use WTFramework\Types\Traits\Arr\Walk;
use WTFramework\Types\Traits\Arr\WalkRecursive;
use WTFramework\Types\Traits\Macroable;

class Arr extends IsArr
{
  use Advance;
  use ArrNew;
  use ArrReturn;
  use ARSort;
  use ASort;
  use ChangeKeyCase;
  use Chunk;
  use Column;
  use Combine;
  use Contains;
  use CountValues;
  use Diff;
  use DiffAssoc;
  use DiffKey;
  use DiffUAssoc;
  use DiffUKey;
  use End;
  use Extract;
  use Fill;
  use FillKeys;
  use Filter;
  use Flip;
  use Implode;
  use Intersect;
  use IntersectAssoc;
  use IntersectKey;
  use IntersectUAssoc;
  use IntersectUKey;
  use IsList;
  use JSONEncode;
  use KeyExists;
  use KeyFirst;
  use KeyLast;
  use Keys;
  use KRSort;
  use KSort;
  use MagicGet;
  use MagicInvoke;
  use Macroable;
  use Map;
  use Max;
  use Merge;
  use MergeRecursive;
  use Min;
  use MultiSort;
  use NatCaseSort;
  use NatSort;
  use Pad;
  use Pop;
  use PRegFilter;
  use PRegGrep;
  use PRegReplace;
  use PRegReplaceCallback;
  use PRegReplaceCallbackArray;
  use Prev;
  use PrintR;
  use Product;
  use Push;
  use Rand;
  use Range;
  use Reduce;
  use Replace;
  use ReplaceRecursive;
  use Reset;
  use Reverse;
  use RSort;
  use Search;
  use Shift;
  use Shuffle;
  use Slice;
  use Sort;
  use Splice;
  use StrIReplace;
  use StrReplace;
  use SubstrReplace;
  use Sum;
  use UASort;
  use UDiff;
  use UDiffAssoc;
  use UDiffUAssoc;
  use UIntersect;
  use UIntersectAssoc;
  use UIntersectUAssoc;
  use UKSort;
  use Unique;
  use Unshift;
  use USort;
  use Values;
  use VarDump;
  use Walk;
  use WalkRecursive;
}