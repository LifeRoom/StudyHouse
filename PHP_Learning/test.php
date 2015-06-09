<?php
echo(strlen(mb_convert_encoding("あいうえおかきくけこ", 'SJIS', 'UTF-8')));
echo "</br>";
echo(strlen(mb_convert_encoding("ｱｲｳｴｵｶｷｸｹｺ", 'SJIS', 'UTF-8')));

//$a=strlen(mb_convert_encoding("１1", 'SJIS', 'UTF-8'));
//echo $a;
//echo phpinfo();
