<?php
$z[0]=Array("field","",64,83);
$z[0][4]['name']="title";
$z[1]=Array("global","",84,110);
$z[1][4]['name']="cfg_webname";
$z[2]=Array("field","",151,180);
$z[2][4]['name']="keywords";
$z[3]=Array("field","",220,278);
$z[3][4]['name']="description";
$z[3][4]['function']="html2text(@me)";
$z[4]=Array("include","",747,782);
$z[4][4]['filename']="head.htm";
$z[5]=Array("field","",1002,1060);
$z[5][4]['name']="typeid";
$z[5][4]['function']="GetTopTypename(@me)";
$z[6]=Array("channel","\r\n        <li><a href='[field:typeurl/]'>[field:typename/]</a></li>\r\n        ",1169,1408);
$z[6][4]['type']="son";
$z[6][4]['row']="10";
$z[6][4]['currentstyle']="<li><a href='~typelink~' ~rel~ class='mycur'><span>~typename~</span></a></li>";
$z[7]=Array("list","\r\n      <li>\r\n        <div class=\"pad\">\r\n          <div class=\"pic\"><a href=\"[field:arcurl/]\"><img src=\"[field:picname/]\" alt=\"[field:title/]\"></a></div>\r\n          <div class=\"bor\">\r\n            <div class=\"txt\">\r\n              <div class=\"title\"> <span><em>[field:pubdate function=\"MyDate('m/d',@me)\"/]</em>[field:pubdate function=\"MyDate('Y',@me)\"/]</span>\r\n                <h3><a href=\"[field:arcurl/]\">[field:title/]</a></h3>\r\n              </div>\r\n              <a href=\"[field:arcurl/]\" style=\"color:#666;\">\r\n              <p>[field:description function='cn_substr(@me,140)'/]...</p>\r\n              </a> </div>\r\n            <div class=\"more\"><a href=\"[field:arcurl/]\" class=\"r\">查看更多 ></a></div>\r\n          </div>\r\n        </div>\r\n      </li>\r\n      ",1467,2269);
$z[7][4]['pagesize']="12";
$z[8]=Array("pagelist","",2376,2454);
$z[8][4]['listitem']="info,index,end,pre,next,pageno,option";
$z[8][4]['listsize']="5";
$z[9]=Array("include","",2561,2598);
$z[9][4]['filename']="footer.htm";

?>