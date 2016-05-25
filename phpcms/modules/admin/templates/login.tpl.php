<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('phpcms_logon')?></title>
<style type="text/css">






	//自定义样式
	body{ margin:0px; padding:0px; font-family:"微软雅黑"; /*background:url(images/bg.jpg) no-repeat;*/}
a{ cursor:pointer;}
a:active, a:hover {
text-decoration:none;
}
ul{ margin:0px; padding:0px;}
li{ list-style:none;}
.clear{ clear:both;}
.hidden{ display:none;}
.fl{ float:left;}
.fr{ float:right;}
/******************************************登录**************************************/
.denglu{background:url(<?php echo IMG_PATH;?>bg01.jpg) center top; margin:0 auto; width:100%; min-heigth:min-height:100%; height:auto !important; height:100%;  }
.denglu .dl{width:50%; height:60%; position:absolute; top:20%; left:25%; vertical-align:central;}
.denglu .dl .bt{ width:100%; height:50px; margin:0 auto; text-align:center;}
.denglu .dl .dlk{ width:100%; margin:0 auto; clear:both; margin-top:50px;}
.denglu .dl .dlk .deng{ width:50%; margin:0 auto; margin-top:110px; float:left; margin-left:80px;}
.xuzhi{ width:37%;float:right; font-size:14px; color:#fff; margin-top:110px;}


.denglu02{background:url(<?php echo IMG_PATH;?>bg02.jpg) center top;; margin:0 auto; width:100%; min-heigth:min-height:100%; height:auto !important; height:100%;  }
.denglu02 .biaoti{ margin:0 auto; text-align:center; width:100%; margin-top:100px;}
.denglu02 .log{ margin:0 auto; width:900px; margin-top:20px; background:#666;}
.deng02{ width:50%; margin:0 auto;float:left; margin-left:40px; margin-top:110px;}
.xuzhi02{ width:40%;float:left; font-size:14px; line-height:25px; color:#999; margin-top:120px;margin-left:50px;}
.xuzhi02 .xz{  font-size:25px; color:#0272bc; font-weight:bold; line-height:35px; margin-bottom:10px;}
.btn-login02 {background: none repeat scroll 0 0 rgb(2, 114, 188);border: medium none; cursor: pointer; height: 40px;margin:25px 0 0 15px;;width: 120px;color: #fff;font-family: "微软雅黑";font-size: 18px;border-radius:5px;}


.i-text { background: none repeat scroll 0 0 #fff; border: 1px solid #999;box-shadow: 1px 1px 1px #dfe4e8 inset;color:#CCC;font-family: "微软雅黑"; font-size: 14px; height: 37px;letter-spacing: 1px;
line-height: 37px;text-indent: 12px;width: 300px;margin:15px 0 0 15px;}
.btn-login {background: none repeat scroll 0 0 rgb(2, 114, 188);border: medium none; cursor: pointer; height: 40px;margin:15px 0 0 168px;;width: 150px;color: #fff;font-family: "微软雅黑";font-size: 16px;border-radius:5px;}
</style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body class="denglu02" onload="javascript:document.myform.username.focus();">
	<div class="dl">
		<div class="biaoti"><img src="<?php echo IMG_PATH;?>ico02.png" /></div>
		<div class="log">
			<ul class="xuzhi02">
				 <li class="xz">学生处</li>
				 <li>1.请保护好自己的隐私账号和密码</li>
				 <li>2.请按照图片的验证码进行登录</li>
			</ul>
			<form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
			  <ul class="deng02">
			  	
				<li style=" width:100%; height:60px;">
					<p style="float:left;font-size:18px; color:#666;line-height:30px; ">用户名:</p> 
			
					<input name="username" type="text" class="i-text" value="" />
				</li>
				<div style="clear:both;"></div>
		
				<li style=" width:100%; height:60px;"> 
					<p style="float:left;font-size:18px; color:#666;line-height:30px; ">密&nbsp;&nbsp;码:</p> 
					<input name="password" type="password" class="i-text" value="" />
				</li>
				<div style="clear:both;"></div>
				<li style=" width:100%; height:60px;">
					<!--<p style="float:left;font-size:18px; color:#666;line-height:30px; ">验证码:</p> 
					<input name="code" type="text" class="i-text" onfocus="document.getElementById('yzm').style.display='block'" />
					<div id="yzm" class="yzm"><?php echo form::checkcode('code_img')?><br /><a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);"><?php echo L('click_change_validate')?></a></div>-->
     				
				</li>
				<li style=" width:100%; height:60px;">
					<input name="dosubmit" value="登录" type="submit" id="logonbtn" class="btn-login02" />

				</li>
			</ul>
			</form>
			
		</div>
	</div>
</body>

</html>

