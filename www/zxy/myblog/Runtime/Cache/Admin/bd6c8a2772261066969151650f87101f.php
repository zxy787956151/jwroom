<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>博文列表</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/myblog/Public/Admin/Css/globle_v1.css" type=text/css rel=stylesheet>
<LINK href="/myblog/Public/Admin/Css/inbox.css" type=text/css rel=stylesheet>
<link href="/myblog/Public/Admin/Css/skin_blue.css" rel="stylesheet" type="text/css" id="lnkSkin">

<META content="MSHTML 6.00.6000.16809" name=GENERATOR></HEAD>
<BODY class="All_C_Page Inbox">
<DIV class=ContentWp>
<DIV class=ContentThemeWp>

<DIV class=Ibx_Main_Wp>
<TABLE class="Ibx_gTable F2Img Ibx_gTable_TT" id=oTableHead>
  <TBODY>
  <br></br>
  <TR>
    <TH class=Ibx_Th_F>ID</TH>
    <TH class=Ibx_Th_From>名称</TH>
    <TH class=Ibx_Th_Date>级别</TH>
    <TH class=Ibx_Th_Subject>排序</TH>
    <TH class=Ibx_Th_Size>操作</TH>
  </TR>
  <TBODY></TBODY></TABLE>
<DIV class="Ibx_Lst_dWp dWpOpen">
<form action="<?php echo U('Category/sort');?>" method="post">
<TABLE class="Ibx_gTable Ibx_gTable_Con" id=oTableCOUNT0 action="list">
  <TBODY>
  <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><TR class="I_Mark0 I_UnRd">
    <TD class=Ibx_Td_F><?php echo ($v["id"]); ?></TD>
    <TD class=Ibx_Td_From 
    title='"Offsetsweden@sharmafields.com" <offsetsweden@sharmafields.com>'><A 
      href="#"><?php echo ($v["name"]); ?></A></TD>
    <TD class=Ibx_Td_Date title="">1</TD>
    <TD class=Ibx_Td_Subject 
    title=""><input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>"/></TD>
    <TD class=Ibx_Td_Size><SPAN title="19,887 字节"><a href="">添加子分类</a>&nbsp;&nbsp;</SPAN><SPAN title="19,887 字节"><a href="">修改</a>&nbsp;&nbsp;</SPAN><SPAN title="19,887 字节"><a href="<?php echo U('Category/delete',array('id'=>$v['id']));?>">删除</a></SPAN></TD>
  </TR><?php endforeach; endif; ?>
  <tr><td colspan='5' align="center"><input type="submit" value="排序"/></td></tr>
  <TBODY></TBODY></TABLE></form></DIV>

<H4 class=Ibx_Lst_bExtra id=oH4Check>选择：<A href="#" 
type=all>全部</A>&nbsp;-&nbsp;<A href="#" 
type=unread>未读</A>&nbsp;-&nbsp;<A href="#" 
type=read>已读</A>&nbsp;-&nbsp;<A href="#" 
type=reverse>反选</A>&nbsp;-&nbsp;<A href="#" 
type=no>不选</A></H4></DIV>
<DIV class="gToolbar gTbrBtm">

<INPUT class="Btn BtnNml" hideFocus type=button value="删 除" outClass="Btn BtnNml ImpBtn" overClass="Btn BtnHv ImpBtn" action="move">
<INPUT class="Btn BtnNml" hideFocus type=button value=举报垃圾邮件 outClass="Btn BtnNml" overClass="Btn BtnHv" action="reportYes">
<SELECT class=Sel action="mark">
	<OPTION value=none selected>标记为...</OPTION>
	<OPTION value=read:true>&nbsp;&nbsp;已读邮件</OPTION>
	<OPTION value=read:false>&nbsp;&nbsp;未读邮件</OPTION>
</SELECT>
  
<SELECT class=Sel action="move">
  	<OPTION value=none selected>移动到...</OPTION>
	<OPTION value=2>&nbsp;&nbsp;草稿箱</OPTION>
	<OPTION value=3>&nbsp;&nbsp;已发送</OPTION>
</SELECT>

<SELECT class=Sel action="view" url="#">
	<OPTION value=none selected>查看...</OPTION>
	<OPTION value=null>&nbsp;&nbsp;全部邮件</OPTION>
	<OPTION class=SelOptLine value=none>-------------</OPTION>
	<OPTION value=read:false>&nbsp;&nbsp;未读邮件</OPTION>
	<OPTION value=read:true>&nbsp;&nbsp;已读邮件</OPTION>
</SELECT>
<DIV class=Extra><SPAN class=Txt><SPAN class=Unable>首页</SPAN>&nbsp;&nbsp;<SPAN 
class=Unable>上页</SPAN>&nbsp;&nbsp;<A 
href="#">下页</A>&nbsp;&nbsp;<A 
href="#">末页</A></SPAN><SELECT 
class=SelA style="MARGIN-RIGHT: 0px" action="page" 
url="list.jsp?sid=tBwkXRlgpHiyOGUAWsggoLGzpKgcUEYi&amp;fid=1"><OPTION value=1 
  selected>&nbsp;&nbsp;1/2</OPTION></SELECT></DIV></DIV></DIV></DIV><!-- Surj 2008.08.08 list.js -->
</BODY></HTML>