<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<style>
    
    .content_left{
      width:73%;
      float: left;
	  background:#fff;
      margin-right: 10px;
      border:1px solid #ccc;
    }
	.content_left p{
		text-align:center;
	}
	.content_left .content p{
		padding:10px;
		text-indent: 2em;
		margin-top:10px;
		line-height:30px;
		font-size:15px;
		text-align:left;
	}
	.tag{
		border:1px solid #ccc;
		padding:5px;
		width:95%;
		margin:0 auto;
		margin-bottom:10px;
	}
	.page{
		padding:5px;
		width:95%;
		margin:0 auto;
	}
	.page a:hover{
		text-decoration:none;
		color:#00CC00;
	} 
	.page .page_left{
		float:left;
	}
	.page .page_right{
		float:right;
	}
    .content_right{
      width:25%;
      float:right;
	}

    .hot{
      padding:2px;
	  border:1px solid #ccc;
	  margin-bottom:15px;
      background: #fff;
    }
	.hot ul li{
	  padding: 2px 10px;
	  color:#CC9900;
	}
	.hot ul li a{
		color:#111;
	}
	.hot ul li a:hover{
		text-decoration:none;
		color:#00CC00;
	}
    h3{
      background: red;
      color:#fff;
      padding: 0;
      margin: 0;
      padding-left:20px;
      margin-top: 10px;
      font-weight: bold;
      height: 30px;
      line-height: 20px;
      font-size:14px;
      background: url(<?php echo IMG_PATH;?>title.png) left top no-repeat;
      /* border-radius: 10px 0px 0px 10px; */
    }
	h4{
		text-align:center;
		font-family:微软雅黑;
		font-weight:bold;
		margin-top:30px;
		font-size:20px;
	}
	 .right_list{
      float:left;
      border:1px solid #ccc;
      background:#fff;
      margin-bottom: 20px;
    }
    .right_list h3{
      background: url(<?php echo IMG_PATH;?>title3.png) left top no-repeat;
    }
    .more{
        float: right;
        color:#339900;
    }
    .right_list ul li{
      padding:8px;
      border-bottom:1px dashed #ccc;
      color:#CC9900;
    }
    .right_list ul li a:hover{
        text-decoration:none;
        color:#00CC00;
    }
    .right_list ul li em{
      font-style:normal;
      float:right;
      color:#000;
    }


  </style>
 <section>
        <div class="content_left">
			<h4><?php echo $title;?></h4>
			<p><?php echo $inputtime;?> 录入者：<?php echo $username;?> 来源:<?php echo $copyfrom;?> 浏览:<span id="hits"></span>次</p>
			<div class="content">
			<p >
				<?php echo $content;?>
				</p>
			</div>
		<!--简报列表-->
		<?php if($catid==22) { ?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a2d462397efec42df4b85f763ab912fb&action=lists&catid=22&num=5&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'id DESC','limit'=>'5',));}?>
	        <div class="right_list">
	            <div class="list">
	                <ul>
	                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a2d462397efec42df4b85f763ab912fb&action=lists&catid=22&num=5&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'id DESC','limit'=>'5',));}?>
	                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
	                            <li>● <a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo $v['title'];?></a></li>
	                        <?php $n++;}unset($n); ?>
	                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	                </ul>
	            </div>
	        </div>
	     
	       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       <?php } ?>



			<!--简报列表-->

			<div class="tag">Tags:<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&a=lists&tag=<?php echo urlencode($keyword);?>" class="blue"><?php echo $keyword;?></a> 	<?php $n++;}unset($n); ?></div>
			<div class="page"><div class="page_left">上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></div><div class="page_right">下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
</div></div>
		</div>
		<div class="content_right">
			<div class="hot">
				<h3>最热点击</h3>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aeb1694834791dcb279c3383ccded579&action=hits&catid=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'10','limit'=>'20',));}?>
                <ul>
                	<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>● <a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                	<?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
		  <div class="hot">
				<h3>工作案例</h3>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=09c2d1c3b63a70fc2b2636bdf8313a5d&action=hits&catid=13\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'13','limit'=>'20',));}?>
                <ul>
                	<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>● <a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                	<?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
		  <div class="hot">
				<h3>优秀人物</h3>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=272262aa38858562a8547f009eca2c8c&action=hits&catid=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'15','limit'=>'20',));}?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>● <a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                	<?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
		</div>
      </section>




<script type="text/javascript">
$(function(){
  $('.content img').LoadImage(true, 660, 660,'<?php echo IMG_PATH;?>s_nopic.gif');    
})
</script>
<?php include template("content","footer"); ?>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>