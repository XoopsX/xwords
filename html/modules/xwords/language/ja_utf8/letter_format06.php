<?php
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// XOOPS2 - Xwords 0.42
// WEBMASTER @ KANPYO.NET, 2005.

$MYDIRNAME = strtoupper(basename(dirname(dirname(dirname(__FILE__)))));
if (!defined("_MD_{$MYDIRNAME}_ALL_INIT"))
	{
	define("_MD_{$MYDIRNAME}_ALL_LINKTEXT", "すべて");
	define("_MD_{$MYDIRNAME}_ALL_ID", "");
	define("_MD_{$MYDIRNAME}_ALL_INIT", "^.*");
	}

// **************************************************************************
// アルファベット、五十音など、頭文字によるインデックスを作成するためのデータ
// $mb_init = 検索用、$mb_id = POST用、$mb_linktext = 表示用
// $mb_separator = インデックス間の区切り文字。
// 変更するときは、４つの配列の数を合わせること。（「,」を同数にする）
// **************************************************************************


$mb_init = array(
	"^[^\x21-\x7e]{1,3}(Ａ|ａ|[Aa])",
	"^[^\x21-\x7e]{1,3}(Ｂ|ｂ|[Bb])",
	"^[^\x21-\x7e]{1,3}(Ｃ|ｃ|[Cc])",
	"^[^\x21-\x7e]{1,3}(Ｄ|ｄ|[Dd])",
	"^[^\x21-\x7e]{1,3}(Ｅ|ｅ|[Ee])",
	"^[^\x21-\x7e]{1,3}(Ｆ|ｆ|[Ff])",
	"^[^\x21-\x7e]{1,3}(Ｇ|ｇ|[Gg])",
	"^[^\x21-\x7e]{1,3}(Ｈ|ｈ|[Hh])",
	"^[^\x21-\x7e]{1,3}(Ｉ|ｉ|[Ii])",
	"^[^\x21-\x7e]{1,3}(Ｊ|ｊ|[Jj])",
	"^[^\x21-\x7e]{1,3}(Ｋ|ｋ|[Kk])",
	"^[^\x21-\x7e]{1,3}(Ｌ|ｌ|[Ll])",
	"^[^\x21-\x7e]{1,3}(Ｍ|ｍ|[Mm])",
	"^[^\x21-\x7e]{1,3}(Ｎ|ｎ|[Nn])",
	"^[^\x21-\x7e]{1,3}(Ｏ|ｏ|[Oo])",
	"^[^\x21-\x7e]{1,3}(Ｐ|ｐ|[Pp])",
	"^[^\x21-\x7e]{1,3}(Ｑ|ｑ|[Qq])",
	"^[^\x21-\x7e]{1,3}(Ｒ|ｒ|[Rr])",
	"^[^\x21-\x7e]{1,3}(Ｓ|ｓ|[Ss])",
	"^[^\x21-\x7e]{1,3}(Ｔ|ｔ|[Tt])",
	"^[^\x21-\x7e]{1,3}(Ｕ|ｕ|[Uu])",
	"^[^\x21-\x7e]{1,3}(Ｖ|ｖ|[Vv])",
	"^[^\x21-\x7e]{1,3}(Ｗ|ｗ|[Ww])",
	"^[^\x21-\x7e]{1,3}(Ｘ|ｘ|[Xx])",
	"^[^\x21-\x7e]{1,3}(Ｙ|ｙ|[Yy])",
	"^[^\x21-\x7e]{1,3}(Ｚ|ｚ|[Zz])",
	"^(あ|ア|ぁ|ァ|い|イ|ぃ|ィ|う|ウ|ぅ|ゥ|え|エ|ぇ|ェ|お|オ|ぉ|ォ).*",
	"^(か|カ|ヵ|が|ガ|き|キ|ぎ|ギ|く|ク|ぐ|グ|け|ケ|ヶ|げ|ゲ|こ|コ|ご|ゴ).*",
	"^(さ|サ|ざ|ザ|し|シ|じ|ジ|す|ス|ず|ズ|せ|セ|ぜ|ゼ|そ|ソ|ぞ|ゾ).*",
	"^(た|タ|だ|ダ|ち|チ|ぢ|ヂ|つ|ツ|っ|ッ|づ|ヅ|て|テ|で|デ|と|ト|ど|ド).*",
	"^(な|ナ|に|ニ|ぬ|ヌ|ね|ネ|の|ノ).*",
	"^(は|ハ|ば|バ|ぱ|パ|ひ|ヒ|び|ビ|ぴ|ピ|ふ|フ|ぶ|ブ|ぷ|へ|ヘ|べ|ベ|ぺ|ペ|ほ|ホ|ぼ|ボ|ぽ|ポ|ヴ).*",
	"^(ま|マ|み|ミ|む|ム|め|メ|も|モ).*",
	"^(や|ヤ|ゃ|ャ|ゆ|ユ|ゅ|ュ|よ|ヨ|ょ|ョ).*",
	"^(ら|ラ|り|リ|る|ル|れ|レ|ろ|ロ).*",
	"^(わ|ワ|ヮ|を|ヲ|ん|ン).*",
	"^[^\x21-\x7e]{1,3}(\xA4[\xA1-\xF3])",
	"^[^\x21-\x7e]{1,3}(\xA5[\xA1-\xF6]|ｱ|ｧ|ｲ|ｨ|ｳ|ｩ|ｴ|ｪ|ｵ|ｦ|ｫ|ｶ|ｷ|ｸ|ｹ|ｺ|ｻ|ｼ|ｽ|ｾ|ｿ|ﾀ|ﾁ|ﾂ|ｯ|ﾃ|ﾄ|ﾅ|ﾆ|ﾇ|ﾈ|ﾉ|ﾊ|ﾋ|ﾌ|ﾍ|ﾎ|ﾏ|ﾐ|ﾑ|ﾒ|ﾓ|ﾔ|ｬ|ﾕ|ｭ|ﾖ|ｮ|ﾗ|ﾘ|ﾙ|ﾚ|ﾛ|ﾜ|ﾝ|ｰ)",
	"^[^\x21-\x7e]{1,3}([A-Za-z]|\xA3[\xC1-\xFA])",
	"^[^\x21-\x7e]{1,3}([0-9]|\xA3[\xB0-\xB9])",
	"^[^\x21-\x7e]{1,3}([\xA1-\xA2][\xA1-\xFE]|[\x21-\x2F]|[\x3A-\x40]|[\x5B-\x60]|[\x7B-\x7E]|｡|｢|｣|､|･|ﾞ|ﾟ|[\xA6-\xA8][\xA1-\xFE]|\xAD[\xA1-\xFE])",
	"^[^\x21-\x7e]{1,3}([\xB0-\xF4][\xA1-\xFF])",
	constant("_MD_{$MYDIRNAME}_ALL_INIT"),
);

$mb_id = array(
	"A","B","C","D","E","F","G","H","I","J","K","L","M",
	"N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
	"01","02","03","04","05","06","07","08","09","10",
	"11","12","13","14","15","16",constant("_MD_{$MYDIRNAME}_ALL_ID"),
);

$mb_linktext = array(
	"A","B","C","D","E","F","G","H","I","J","K","L","M",
	"N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
	"あ行","か行","さ行","た行","な行","は行","ま行","や行","ら行","わ・ん",
	"ひらがな","カタカナ","アルファベット","数字","記号","漢字",
	constant("_MD_{$MYDIRNAME}_ALL_LINKTEXT"),
);

$mb_separator = array(
	"","　","　","　","　","　","　","　","　","　","　","　","　",
	"　","　","　","　","　","　","　","　","　","　","　","　","　","<br />",
	"　","　","　","　","　","　","　","　","　","<br />",
	"　","　","　","　","　","　",
);

?>