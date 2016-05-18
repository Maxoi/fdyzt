<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/> -->
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>辅导员::..::闽南师范大学</title>
     
    <!-- Bootstrap -->
    <link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>main.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
    <link href="<?php echo CSS_PATH;?>nav.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>index.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo JS_PATH;?>html5shiv.min.js"></script>
      <script src="<?php echo JS_PATH;?>respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
    body{padding:0;margin:0;}
    .box{position:relative;}
    .cont{height:180px;overflow:hidden;}
    .item{background:rgba(0,0,0,0.5);color:#fff;font-size:50px;position:absolute;left:0;bottom:0;width:100%;text-align:right;line-height:20px;height:20px;display: none}
    .item a{cursor:pointer;text-shadow:0 0 3px rgba(0,0,0,0.8);}
    a.seld{color:#06C;}
    a.hide{display:none;}

   /*跑马灯*/
    <!-- 
    #demo { 
    background: #eee; 
    overflow:hidden; 
    border: 1px dashed #CCC; 
    width: 490px; 
    } 
    #demo img { 
    height:180px;
    padding:20px;
    } 
    #indemo { 
    float: left; 
    width: 800%; 
    } 
    #demo1 { 
    float: left; 
    } 
    #demo2 { 
    float: left; 
    } 
    --> 

</style>



  </head>

  <body>
    <div class="main">
      <header><img height="200" width="1024" src="<?php echo IMG_PATH;?>header3.gif" /></header>
    <nav style="margin-top: 30px;">
        <div id="nav_main">
  <div class="inner1">
    <div class="inner2">
      <div id="nav_main_bar">
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8248b6e14f55ae7ab7445fed168915d&action=category&catid=0&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
        <ul>

          <li class="current">
            <div class="bm">
              <div class="inner">
                <div class="inner3">
                  <div class="inner4"><a href="./index.php">首页</a></div>
                </div>
              </div>
            </div>
          </li>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li>
            <div class="bm">
              <div class="inner">
                <div class="inner3">
                  <div class="inner4"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></div>
                </div>
              </div>
            </div>
            <div class="lm">
              <div class="inner5">
                <div class="inner6">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c5796102fc450f9052b61ce2eb23536&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                  <?php if(!empty($data)) { ?>
                  <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $rr) { ?>
                      
                        <li><a href="<?php echo $rr['url'];?>"><?php echo $rr['catname'];?></a></li>
                      
                    <?php $n++;}unset($n); ?>
                    <li class="clear"></li>
                  </ul>
                  <?php } ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
              </div>
            </div>
          </li>
          <?php $n++;}unset($n); ?>
        </ul>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         <?php echo runhook('glogal_menu')?>
      </div>
    </div>
  </div>
</div>
</nav>

