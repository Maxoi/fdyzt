<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
 <section>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79d92623a8337007f1f3bcdd35d5f304&action=position&posid=2&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?>
           <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <h4 class="blue"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
                <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p>
                <div class="bk20 hr"><hr /></div>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
        <div class="left" >
            <div class="container">
            <div class="row" style="margin: 10px;">
              <div class="col-md-6   col-sm-6 col-xs-6 ">
                  <div style="float: left;margin-right: 5px;"> </div>
                  <!--<p><a href="#"><img style="border-radius: 30px;" width="220" height="170" src="./images/cyx.jpg" /></a></p>-->
                 <h2>辅导员誓词</h2>
                <p>我志愿成为一名高校辅导员，</p>
                <p>拥护党的领导，献身教育事业，</p>
                <p>恪守职业规范，提升专业素养，</p>
                <p>情系学生成长，做好良师益友， </p>
                <p>为培养社会主义合格建设者和可靠接班人而努力奋斗！</p>
              </div>
              <div class="col-md-6  col-sm-6 col-xs-6" style="background: none;border:none;box-shadow:none;x">
                <div id="demo" style="width:350px;height:150px;margin-top:15px;"> 
                  <div id="indemo"> 
                  <div id="demo1"> 
                    <a href="#"><img src="<?php echo IMG_PATH;?>1.png" border="0" /></a> 
                    <a href="#"><img src="<?php echo IMG_PATH;?>1.png" border="0" /></a> 
                    <a href="#"><img src="<?php echo IMG_PATH;?>1.png" border="0" /></a> 
                    <a href="#"><img src="<?php echo IMG_PATH;?>1.png" border="0" /></a> 
                  
                  </div> 
                  <div id="demo2"></div> 
                  </div> 
                </div> 
                

              </div>
            </div>
            <div class="row" style="margin: 10px;">

              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=495a0d745d8b538ce6f35fc84e725caf&action=lists&num=4&catid=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','limit'=>'4',));}?>
              <div class="col-md-6 col-xs-5 " style="margin-top: 10px;" ><h2>两学一做 </h2>
                <ul>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><em>2010-02-01</em></li>
                  <?php $n++;}unset($n); ?>
                </ul>
              </div>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b7616612edcef12973fba8ff9d90b0a3&action=lists&num=4&catid=11\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','limit'=>'4',));}?>
              <div class="col-md-offset-0 col-xs-offset-2 col-xs-5 col-md-6 " style="margin-top: 10px;"><h2>职业能力</h2>
                <ul>
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><em>2010-02-01</em></li>
                  <?php $n++;}unset($n); ?>
                </ul>
              </div>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="row" style="margin: 10px;">
            <div class="col-md-4" style="border-right: 1px solid #ccc;" >
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7efd19cd7d1c685600ce4a80e6ba4ca5&action=lists&num=4&catid=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','limit'=>'4',));}?>
                <div class="studyGroup">
                  <h2>学习小组</h2>
                  <ul>
                      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                      <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><em>2010-02-01</em></li>
                      <?php $n++;}unset($n); ?>
                  </ul>
                </div>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
              </div>
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f8e8dae0e6541c3da3396b777a2e09ec&action=lists&num=4&catid=13\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'13','limit'=>'4',));}?>
                  <div class="col-md-4" style="border-right: 1px solid #ccc;"><h2>工作案例 </h2>
                    <ul>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><em>2010-02-01</em></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                  </div>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c2629b5a9fb14f5cd14c71bb5b3b4c9f&action=lists&num=4&catid=14\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','limit'=>'4',));}?>
                  <div class="col-md-4 "><h2>他山之石</h2>
                    <ul>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><em>2010-02-01</em></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                  </div>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="row" style="margin: 10px;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e939e2082fb4e93f51567cc49cd4bc56&action=lists&num=4&catid=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','limit'=>'4',));}?>
              <div class="col-xs-6 " style="border-right: 1px solid #ccc;"><h2>优秀人物 </h2>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><em>2010-02-01</em></li>
                    <?php $n++;}unset($n); ?>
                </ul>
              </div>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c90c78e3fb0051677e1bc6412d71a37&action=lists&num=4&catid=16\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','limit'=>'4',));}?>
              <div class="col-xs-6  md-hidden sm-hidden"><h2>精品项目 </h2>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><em>2010-02-01</em></li>
                    <?php $n++;}unset($n); ?>
                </ul>
              </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

              <div class="link">
                <select>

               <option value="0">+++友情链接+++</option>
               <option value="1">+++友情链接+++</option>
               <option value="2">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>

              </select>

               <select>

               <option value="0">+++友情链接+++</option>
               <option value="1">+++友情链接+++</option>
               <option value="2">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>

              </select>

              <select>

               <option value="0">+++友情链接+++</option>
               <option value="1">+++友情链接+++</option>
               <option value="2">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>

              </select>

              <select>

               <option value="0">+++友情链接+++</option>
               <option value="1">+++友情链接+++</option>
               <option value="2">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>
               <option value="3">+++友情链接+++</option>

              </select>
              </div>


            </div>
          </div>
        </div>
        <div class="right" >
          <div style="margin-left: 45px;">辅导员微博</div> 
          <DIV align=center>
          <IFRAME  src="wb.php" frameBorder=0 marginwidth=0 marginheight=0 scrolling=yes style="width168:px;height:500px;" width=168 height=500 scrolling=yes ALLOWTRANSPARENCY="true">
           
          </IFRAME>
          </DIV>
         
          <!--<div>

          <iframe width="100%" height="100" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=100&fansRow=1&ptype=1&speed=0&skin=3&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1774094422&verifier=253c5023&dpc=1"></iframe>
          <iframe width="100%" height="100" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=100&fansRow=1&ptype=1&speed=0&skin=3&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1774094422&verifier=253c5023&dpc=1"></iframe>
          <iframe width="100%" height="100" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=100&fansRow=1&ptype=1&speed=0&skin=3&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1774094422&verifier=253c5023&dpc=1"></iframe>
          
          </div>-->



        </div>

        <div class="right" style="margin-top: 30px;" >

            
          <div style="text-align: center;border-bottom: 1px solid #ccc;">学习剪报</div>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ea5d824dc85735086c11f919aec831f&action=lists&num=4&catid=19\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','limit'=>'4',));}?>
          <div class="study">
                  <ul>
                      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                      <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                      <?php $n++;}unset($n); ?>
                  </ul>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
        
        </div>
      </section>

<?php include template("content","footer"); ?>
