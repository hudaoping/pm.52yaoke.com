<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewstempvar_2`;");
E_C("CREATE TABLE `phome_enewstempvar_2` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(60) NOT NULL DEFAULT '',
  `varvalue` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewstempvar_2` values('1','header','ecms101-页面头部','      <li class=\\\\\"<?=\$GLOBALS[navclassid]?\\\\\"\\\\\":\\\\\"current-menu-item\\\\\"?>\\\\\"><a rel=\\\\\"nofollow\\\\\" href=\\\\\"/\\\\\"><i class=\\\\\"fa fa-home\\\\\"></i> 首页</a></li>\r\n        <?php\r\n\$sql=\$empire->query(\\\\\"select classid,classname,islast from {\$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc\\\\\");\r\n    while(\$s=\$empire->fetch(\$sql)){\r\n    	\$tclass=\\\\\"\\\\\";\r\n\r\n        \$fr=explode(\\\\''|\\\\'',\$class_r[\$GLOBALS[navclassid]][featherclass]);\r\n        \$topbclassid=\$fr[1]?\$fr[1]:\$GLOBALS[navclassid];\r\n        if(\$topbclassid==\$s[classid]){\r\n        	\$tclass=\\\\''current-menu-item\\\\'';\r\n        }\r\n        \$classurl=sys_ReturnBqClassname(\$s,9);\r\n\r\n        if(\$value!=\\\\''\\\\''){\r\n        \$value=\\\\''\\\\''; \r\n        }\r\n        if(!\$s[islast]){\r\n        \$value2=\\\\''<span class=\\\\\"caret\\\\\"></span>\\\\'';\r\n        }\r\n        echo \\\\''<li class=\\\\\"\\\\''.\$tclass.\\\\''\\\\\"><a href=\\\\\"\\\\''.\$classurl.\\\\''\\\\\">\\\\''.\$value.\\\\''  \\\\''.\$s[classname].\\\\''</a>\\\\'';\r\n        if(!\$s[islast]){\r\n        	\$sql2=\$empire->query(\\\\\"select classid,classname from {\$dbtbpre}enewsclass where bclassid=\$s[classid] and showclass=0 order by myorder,myorder asc\\\\\");\r\n            \$str=\\\\\"\\\\\";\r\n            while(\$s2=\$empire->fetch(\$sql2)){\r\n            	\$classurl2=sys_ReturnBqClassname(\$s2,9); \r\n            	\$str.=\\\\''<li><a href=\\\\\"\\\\''.\$classurl2.\\\\''\\\\\">  \\\\''.\$s2[classname].\\\\''</a></li>\\\\'';\r\n            }\r\n            echo \\\\''<ul class=\\\\\"sub-menu\\\\\">\\\\''.\$str.\\\\''</ul>\\\\'';\r\n        }\r\n        echo \\\\''</li>\\\\'';\r\n    }\r\n?>','0','0','1');");
E_D("replace into `phome_enewstempvar_2` values('2','pl','pl','<link href=\\\\\"/skin/ecmspl/css/pl.css\\\\\" rel=\\\\\"stylesheet\\\\\">\r\n<div class=\\\\\"showpage\\\\\" id=\\\\\"plpost\\\\\">\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\"  style=\\\\\"line-height: 25px; padding: 5px 3px 1px 8px; font-size: 18px;\\\\\">\r\n<tr><td><strong><font color=\\\\\"#333333\\\\\">留言与评论（共有 <span id=\\\\\"infocommentnumarea\\\\\">0</span> 条评论）</font></strong></td></tr>\r\n</table>\r\n<script>\r\n		  function CheckPl(obj)\r\n		  {\r\n		  if(obj.saytext.value==\\\\\"\\\\\")\r\n		  {\r\n		  alert(\\\\\"您没什么话要说吗？\\\\\");\r\n		  obj.saytext.focus();\r\n		  return false;\r\n		  }\r\n		  return true;\r\n		  }\r\n		  </script>\r\n<form action=\\\\\"/e/pl/doaction.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"saypl\\\\\" id=\\\\\"saypl\\\\\" onsubmit=\\\\\"return CheckPl(document.saypl)\\\\\">\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" id=\\\\\"plpost\\\\\">\r\n<tr>\r\n<td>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr>\r\n<td>\r\n<script src=\\\\\"[!--news.url--]e/pl/loginjspl.php\\\\\"></script>\r\n<textarea name=\\\\\"saytext\\\\\" rows=\\\\\"6\\\\\" id=\\\\\"saytext\\\\\" placeholder=\\\\\"请遵守互联网相关规定，不要发布广告和违法内容!\\\\\"></textarea>\r\n<script src=\\\\\"/d/js/js/plface.js\\\\\"></script>&nbsp;&nbsp;&nbsp;\r\n<table width=\\\\''100%\\\\'' align=\\\\''left\\\\'' cellpadding=3 cellspacing=1 bgcolor=\\\\''#FFF\\\\''>\r\n<tr>\r\n<td width=\\\\\"80%\\\\\" height=\\\\\"40\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">验证码：<input name=\\\\\"key\\\\\" type=\\\\\"text\\\\\" class=\\\\\"inputText\\\\\" size=\\\\\"16\\\\\" />\r\n<img src=\\\\\"/e/ShowKey/?v=pl\\\\\" align=\\\\\"absmiddle\\\\\" name=\\\\\"plKeyImg\\\\\" id=\\\\\"plKeyImg\\\\\" onclick=\\\\\"plKeyImg.src=\\\\''/e/ShowKey/?v=pl&t=\\\\''+Math.random()\\\\\" title=\\\\\"看不清楚,点击刷新\\\\\" /> \r\n</td> \r\n<td width=\\\\\"20%\\\\\" height=\\\\\"40\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\"> \r\n<input name=\\\\\"sumbit\\\\\" type=\\\\\"submit\\\\\" value=\\\\\"提交评论\\\\\" tabindex=\\\\\"6\\\\\" style=\\\\\"border-radius: 5px;font-size: 16px;background: #00aeff none repeat scroll 0% 0%;border: 0px none;margin: 0px 16px;padding: 1px 16px;height: 33px;line-height: 30px;color: rgb(255, 255, 255);opacity: 0.95;\\\\\">\r\n<input name=\\\\\"id\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"id\\\\\" value=\\\\\"[!--id--]\\\\\" />\r\n<input name=\\\\\"classid\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"classid\\\\\" value=\\\\\"[!--classid--]\\\\\" />\r\n<input name=\\\\\"enews\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"enews\\\\\" value=\\\\\"AddPl\\\\\" />\r\n<input name=\\\\\"repid\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"repid\\\\\" value=\\\\\"0\\\\\" />\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"ecmsfrom\\\\\" value=\\\\\"[!--titleurl--]\\\\\">\r\n</td>\r\n</tr>  \r\n</table> \r\n</td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr>\r\n</table></form>\r\n	<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"3\\\\\" cellspacing=\\\\\"1\\\\\" bgcolor=\\\\\"#FFFFFF\\\\\">\r\n        <tr>\r\n          <td bgcolor=\\\\\"#FFFFFF\\\\\" id=\\\\\"infocommentarea\\\\\"></td>\r\n        </tr>\r\n        </table>\r\n <script src=\\\\\"[!--news.url--]e/extend/infocomment/commentajax.php?classid=[!--classid--]&id=[!--id--]\\\\\"></script>\r\n</div>	','0','0','0');");

@include("../../inc/footer.php");
?>