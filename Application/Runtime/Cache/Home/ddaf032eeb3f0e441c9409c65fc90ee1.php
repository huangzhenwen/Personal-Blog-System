<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ACT网站后台管理</title>
<style type="text/css">
<!--
a {
	color: #008EE3
}
a:link {
	text-decoration: none;
	color: #008EE3
}
A:visited {
	text-decoration: none;
	color: #666666
}
A:active {
	text-decoration: underline
}
A:hover {
	text-decoration: underline;
	color: #0066CC
}
A.b:link {
	text-decoration: none;
	font-size: 12px;
	font-family: "Helvetica,微软雅黑,宋体";
	color: #FFFFFF;
}
A.b:visited {
	text-decoration: none;
	font-size: 12px;
	font-family: "Helvetica,微软雅黑,宋体";
	color: #FFFFFF;
}
A.b:active {
	text-decoration: underline;
	color: #FF0000;
}
A.b:hover {
	text-decoration: underline;
	color: #ffffff
}
.table1 {
	border: 1px solid #CCCCCC;
}
.font {
	font-size: 12px;
	text-decoration: none;
	color: #999999;
	line-height: 20px;
}
.input {
	font-size: 12px;
	color: #999999;
	text-decoration: none;
	border: 0px none #999999;
}
td {
	font-size: 12px;
	color: #007AB5;
}
form {
	margin: 1px;
	padding: 1px;
}
input {
	border: 0px;
	height: 26px;
	color: #007AB5;
}
.unnamed1 {
	border: thin none #FFFFFF;
}
select {
	border: 1px solid #cccccc;
	height: 18px;
	color: #666666;
}
body {
	background: #9CDCF9;
	background-position: 0px 0px;
}
.btnSubmit, .btnReset {
	width: 69px;
	height: 24px;
	background: url(/Public/images/login_5.gif) no-repeat;
}
.tablelinenotop {
	border-top: 0px solid #CCCCCC;
	border-right: 1px solid #CCCCCC;
	border-bottom: 0px solid #CCCCCC;
	border-left: 1px solid #CCCCCC;
}
.tablelinenotopdown {
	border-top: 1px solid #eeeeee;
	border-right: 1px solid #eeeeee;
	border-bottom: 1px solid #eeeeee;
	border-left: 1px solid #eeeeee;
}
.style6 {
	FONT-SIZE: 9pt;
	color: #7b8ac3;
}
-->
</style>

<script type="text/javascript" src="/Public/scripts/jquery.js"></script>
<script>
//页面载入
$(function(){
	$('#verify').bind('click',function(){
		//实现更改src属性
		$(this).attr('src','/index.php/Home/Public/verify/_/'+new Date().getTime());
	});
	
});
</script>
</head>
<body>
<table width="681" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:120px">
  <tr>
    <td width="353" height="259" align="center" valign="bottom" background="/Public/images/login_1.gif"><table width="90%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td align="right" valign="bottom" style="color:#05B8E4">Power by <a href="http://www.itcast.cn" target="_blank">www.itcast.cn</a> Copyright 2014</td>
        </tr>
      </table></td>
    <td width="195" background="/Public/images/login_2.gif"><table width="190" height="106" border="0" align="center" cellpadding="2" cellspacing="0">
        <form action='/index.php/Home/Public/checklogin' method="post" onSubmit="return chk(this);" name="NETSJ_Login">
          <tr>
            <td height="50" colspan="2" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td width="60" height="30" align="left">登陆名称</td>
            <td><input name="UserName" type="TEXT" style="background:url(/Public/images/login_6.gif) repeat-x; border:solid 1px #27B3FE; width:125px; height:20px; background-color:#FFFFFF" id="UserName"size="14"></td>
          </tr>
          <tr>
            <td height="30" align="left">登陆密码</td>
            <td><input name="PassWord" TYPE="PASSWORD" style="background:url(/Public/images/login_6.gif) repeat-x; border:solid 1px #27B3FE; width:125px; height:20px; background-color:#FFFFFF" id="PassWord" size="16"></td>
          </tr>
          <tr>
            <td height="30"> 验 证 码 </td>
            <td><input name="Code" type="text" id="Code" size="4" style="background:url(/Public/images/login_6.gif) repeat-x; border:solid 1px #27B3FE; height:20px; background-color:#FFFFFF" maxlength="4">
              <img id='verify' src="/index.php/Home/Public/verify" width="70" height="34" /></td>
          </tr>
          <tr>
            <td height="40" colspan="2" align="center"><img src="/Public/images/tip.gif" width="16" height="16"> 请勿非法登陆！</td>
          <tr>
            <td colspan="2" align="center"><input class="btnSubmit" type="submit" name="submit" value=" 登  陆 ">
              <input class='btnReset' type="reset" name="Submit" value=" 取  消 "></td>
          <tr>
            <td height="5" colspan="2"></td>
        </form>
      </table></td>
    <td width="133" background="/Public/images/login_3.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="161" colspan="3" background="/Public/images/login_4.gif"></td>
  </tr>
</table>
</body>
</html>