<?php

declare(strict_types=1);

namespace WTFramework\Types;

use Stringable;
use WTFramework\Types\Interfaces\IsStr;
use WTFramework\Types\Traits\Str\AddCSlashes;
use WTFramework\Types\Traits\Str\AddSlashes;
use WTFramework\Types\Traits\Str\Arr;
use WTFramework\Types\Traits\Str\Base64Decode;
use WTFramework\Types\Traits\Str\Base64Encode;
use WTFramework\Types\Traits\Str\BaseConvert;
use WTFramework\Types\Traits\Str\Bin2Hex;
use WTFramework\Types\Traits\Str\CaseCmp;
use WTFramework\Types\Traits\Str\ChunkSplit;
use WTFramework\Types\Traits\Str\Cmp;
use WTFramework\Types\Traits\Str\Coll;
use WTFramework\Types\Traits\Str\Construct;
use WTFramework\Types\Traits\Str\Contains;
use WTFramework\Types\Traits\Str\ConvertUUDecode;
use WTFramework\Types\Traits\Str\ConvertUUEncode;
use WTFramework\Types\Traits\Str\CountChars;
use WTFramework\Types\Traits\Str\CRC32;
use WTFramework\Types\Traits\Str\Crypt;
use WTFramework\Types\Traits\Str\CSpn;
use WTFramework\Types\Traits\Str\EndsWith;
use WTFramework\Types\Traits\Str\Explode;
use WTFramework\Types\Traits\Str\Extract;
use WTFramework\Types\Traits\Str\GetCSV;
use WTFramework\Types\Traits\Str\Hebrev;
use WTFramework\Types\Traits\Str\Hex2Bin;
use WTFramework\Types\Traits\Str\HexDec;
use WTFramework\Types\Traits\Str\HTMLEntities;
use WTFramework\Types\Traits\Str\HTMLEntityDecode;
use WTFramework\Types\Traits\Str\HTMLSpecialChars;
use WTFramework\Types\Traits\Str\HTMLSpecialCharsDecode;
use WTFramework\Types\Traits\Str\HTTPBuildQuery;
use WTFramework\Types\Traits\Str\IPos;
use WTFramework\Types\Traits\Str\IReplace;
use WTFramework\Types\Traits\Str\IStr;
use WTFramework\Types\Traits\Str\JSONDecode;
use WTFramework\Types\Traits\Str\LCFirst;
use WTFramework\Types\Traits\Str\Len;
use WTFramework\Types\Traits\Str\Levenshtein;
use WTFramework\Types\Traits\Str\LTrim;
use WTFramework\Types\Traits\Str\MagicGet;
use WTFramework\Types\Traits\Str\MagicInvoke;
use WTFramework\Types\Traits\Str\MagicToString;
use WTFramework\Types\Traits\Str\MBCheckEncoding;
use WTFramework\Types\Traits\Str\MBConvertCase;
use WTFramework\Types\Traits\Str\MBConvertEncoding;
use WTFramework\Types\Traits\Str\MBConvertKana;
use WTFramework\Types\Traits\Str\MBCut;
use WTFramework\Types\Traits\Str\MBDecodeMIMEHeader;
use WTFramework\Types\Traits\Str\MBDecodeNumericEntity;
use WTFramework\Types\Traits\Str\MBDetectEncoding;
use WTFramework\Types\Traits\Str\MBEncodeMIMEHeader;
use WTFramework\Types\Traits\Str\MBEncodeNumericEntity;
use WTFramework\Types\Traits\Str\MBEReg;
use WTFramework\Types\Traits\Str\MBERegI;
use WTFramework\Types\Traits\Str\MBERegIReplace;
use WTFramework\Types\Traits\Str\MBERegMatch;
use WTFramework\Types\Traits\Str\MBERegReplace;
use WTFramework\Types\Traits\Str\MBERegReplaceCallback;
use WTFramework\Types\Traits\Str\MBIPos;
use WTFramework\Types\Traits\Str\MBIStr;
use WTFramework\Types\Traits\Str\MBLen;
use WTFramework\Types\Traits\Str\MBParse;
use WTFramework\Types\Traits\Str\MBPos;
use WTFramework\Types\Traits\Str\MBRChr;
use WTFramework\Types\Traits\Str\MBRIChr;
use WTFramework\Types\Traits\Str\MBRIPos;
use WTFramework\Types\Traits\Str\MBRPos;
use WTFramework\Types\Traits\Str\MBScrub;
use WTFramework\Types\Traits\Str\MBSplit;
use WTFramework\Types\Traits\Str\MBStr;
use WTFramework\Types\Traits\Str\MBStrimWidth;
use WTFramework\Types\Traits\Str\MBStrSplit;
use WTFramework\Types\Traits\Str\MBSubstr;
use WTFramework\Types\Traits\Str\MBSubstrCount;
use WTFramework\Types\Traits\Str\MBToLower;
use WTFramework\Types\Traits\Str\MBToUpper;
use WTFramework\Types\Traits\Str\MBWidth;
use WTFramework\Types\Traits\Str\MD5;
use WTFramework\Types\Traits\Str\Metaphone;
use WTFramework\Types\Traits\Str\NatCaseCmp;
use WTFramework\Types\Traits\Str\NatCmp;
use WTFramework\Types\Traits\Str\NCaseCmp;
use WTFramework\Types\Traits\Str\NCmp;
use WTFramework\Types\Traits\Str\NL2BR;
use WTFramework\Types\Traits\Str\Pad;
use WTFramework\Types\Traits\Str\Parse;
use WTFramework\Types\Traits\Str\ParseURL;
use WTFramework\Types\Traits\Str\PBrk;
use WTFramework\Types\Traits\Str\Pos;
use WTFramework\Types\Traits\Str\PRegFilter;
use WTFramework\Types\Traits\Str\PRegMatch;
use WTFramework\Types\Traits\Str\PRegMatchAll;
use WTFramework\Types\Traits\Str\PRegQuote;
use WTFramework\Types\Traits\Str\PRegReplace;
use WTFramework\Types\Traits\Str\PRegReplaceCallback;
use WTFramework\Types\Traits\Str\PRegReplaceCallbackArray;
use WTFramework\Types\Traits\Str\PRegSplit;
use WTFramework\Types\Traits\Str\QuoteMeta;
use WTFramework\Types\Traits\Str\QuotesPrintableDecode;
use WTFramework\Types\Traits\Str\QuotesPrintableEncode;
use WTFramework\Types\Traits\Str\RawURLDecode;
use WTFramework\Types\Traits\Str\RawURLEncode;
use WTFramework\Types\Traits\Str\RChr;
use WTFramework\Types\Traits\Str\Repeat;
use WTFramework\Types\Traits\Str\Replace;
use WTFramework\Types\Traits\Str\Rev;
use WTFramework\Types\Traits\Str\RIPos;
use WTFramework\Types\Traits\Str\ROT13;
use WTFramework\Types\Traits\Str\RPos;
use WTFramework\Types\Traits\Str\RTrim;
use WTFramework\Types\Traits\Str\Serialize;
use WTFramework\Types\Traits\Str\SHA1;
use WTFramework\Types\Traits\Str\Shuffle;
use WTFramework\Types\Traits\Str\SimilarText;
use WTFramework\Types\Traits\Str\Soundex;
use WTFramework\Types\Traits\Str\Split;
use WTFramework\Types\Traits\Str\Spn;
use WTFramework\Types\Traits\Str\SPrintF;
use WTFramework\Types\Traits\Str\SScanF;
use WTFramework\Types\Traits\Str\StartsWith;
use WTFramework\Types\Traits\Str\Str as StrStr;
use WTFramework\Types\Traits\Str\StrEcho;
use WTFramework\Types\Traits\Str\StripCSlashes;
use WTFramework\Types\Traits\Str\StripSlashes;
use WTFramework\Types\Traits\Str\StripTags;
use WTFramework\Types\Traits\Str\StrNew;
use WTFramework\Types\Traits\Str\StrReturn;
use WTFramework\Types\Traits\Str\Substr;
use WTFramework\Types\Traits\Str\SubstrCompare;
use WTFramework\Types\Traits\Str\SubstrCount;
use WTFramework\Types\Traits\Str\SubstrReplace;
use WTFramework\Types\Traits\Str\Tok;
use WTFramework\Types\Traits\Str\ToLower;
use WTFramework\Types\Traits\Str\ToUpper;
use WTFramework\Types\Traits\Str\Tr;
use WTFramework\Types\Traits\Str\Trim;
use WTFramework\Types\Traits\Str\UCFirst;
use WTFramework\Types\Traits\Str\UCWords;
use WTFramework\Types\Traits\Str\Unserialize;
use WTFramework\Types\Traits\Str\URLDecode;
use WTFramework\Types\Traits\Str\URLEncode;
use WTFramework\Types\Traits\Str\VSPrintF;
use WTFramework\Types\Traits\Str\WordCount;
use WTFramework\Types\Traits\Str\WordWrap;

class Str implements IsStr, Stringable
{
  use AddCSlashes;
  use AddSlashes;
  use Arr;
  use Base64Decode;
  use Base64Encode;
  use BaseConvert;
  use Bin2Hex;
  use CaseCmp;
  use ChunkSplit;
  use Cmp;
  use Coll;
  use Construct;
  use Contains;
  use ConvertUUDecode;
  use ConvertUUEncode;
  use CountChars;
  use CRC32;
  use Crypt;
  use CSpn;
  use EndsWith;
  use Explode;
  use Extract;
  use GetCSV;
  use Hebrev;
  use Hex2Bin;
  use HexDec;
  use HTTPBuildQuery;
  use HTMLEntities;
  use HTMLEntityDecode;
  use HTMLSpecialChars;
  use HTMLSpecialCharsDecode;
  use IPos;
  use IReplace;
  use IStr;
  use JSONDecode;
  use LCFirst;
  use Len;
  use Levenshtein;
  use LTrim;
  use MagicGet;
  use MagicInvoke;
  use MagicToString;
  use MBCheckEncoding;
  use MBConvertCase;
  use MBConvertEncoding;
  use MBConvertKana;
  use MBCut;
  use MBDecodeMIMEHeader;
  use MBDecodeNumericEntity;
  use MBDetectEncoding;
  use MBEncodeMIMEHeader;
  use MBEncodeNumericEntity;
  use MBEReg;
  use MBERegI;
  use MBERegIReplace;
  use MBERegMatch;
  use MBERegReplace;
  use MBERegReplaceCallback;
  use MBIPos;
  use MBIStr;
  use MBLen;
  use MBParse;
  use MBPos;
  use MBRChr;
  use MBRIChr;
  use MBRIPos;
  use MBRPos;
  use MBScrub;
  use MBSplit;
  use MBStr;
  use MBStrimWidth;
  use MBStrSplit;
  use MBSubstr;
  use MBSubstrCount;
  use MBToLower;
  use MBToUpper;
  use MBWidth;
  use MD5;
  use Metaphone;
  use NatCaseCmp;
  use NatCmp;
  use NCaseCmp;
  use NCmp;
  use NL2BR;
  use Pad;
  use Parse;
  use ParseURL;
  use PBrk;
  use Pos;
  use PRegFilter;
  use PRegMatch;
  use PRegMatchAll;
  use PRegQuote;
  use PRegReplace;
  use PRegReplaceCallback;
  use PRegReplaceCallbackArray;
  use PRegSplit;
  use QuoteMeta;
  use QuotesPrintableDecode;
  use QuotesPrintableEncode;
  use RawURLDecode;
  use RawURLEncode;
  use RChr;
  use Repeat;
  use Replace;
  use Rev;
  use RIPos;
  use ROT13;
  use RPos;
  use RTrim;
  use Serialize;
  use SHA1;
  use Shuffle;
  use SimilarText;
  use Soundex;
  use Split;
  use Spn;
  use SPrintF;
  use SScanF;
  use StartsWith;
  use StrStr;
  use StrEcho;
  use StripCSlashes;
  use StripSlashes;
  use StripTags;
  use StrNew;
  use StrReturn;
  use Substr;
  use SubstrCompare;
  use SubstrCount;
  use SubstrReplace;
  use Tok;
  use ToLower;
  use ToUpper;
  use Tr;
  use Trim;
  use UCFirst;
  use UCWords;
  use Unserialize;
  use URLDecode;
  use URLEncode;
  use VSPrintF;
  use WordCount;
  use WordWrap;
}