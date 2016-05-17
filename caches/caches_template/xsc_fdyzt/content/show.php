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
	
  </style>
 <section>
        <div class="content_left">
			<h4><?php echo $title;?></h4>
			<p><?php echo $inputtime;?> 录入者：<?php echo $username;?> 来源:<?php echo $copyfrom;?> 浏览:<span id="hits"></span>次</p>

			<div class="content">
			<p>
			
	为贯彻落实校党委林晓峰书记在学校党建工作会议上的工作要求，进一步加强辅导员队伍职业化建设，促进党员干部学习和创新，近日，学生处处长林致远带领我校20多名辅导
	到福州考察学习。
3月30日、31日，第五届全省高校辅导员职业能力比赛复赛、决赛在福建师范大学举行，我校辅导员来到比赛现场观摩学习，全程跟踪赛况，并为代表我校参赛的外国语学院辅导员罗	立满老师加油助威。
4月1日上午，一行人来到福建师范大学团委，参观了工作长廊、新媒体人才流动站、舆情监控中心等。在交流座谈会上，福建师大团委书记陈志勇详细介绍了新媒体转型的具体做法、经验分享、实现路径、工作思考和网络空间五个内容，系统介绍了该校网络媒体工作的典型经验。随后，大家来到福建师大学生处，就学生工作队伍建设、辅导员协会建设、思想政治教育、学生资助、心理健康教育、学风建设等工作，与该校学生处领导、辅导员进行了深入的交流。
下午，一行人来到福州外语外贸学院考察学习。老师们参观了教师发展中心、图书馆、学生发展中心和学生服务中心，并进行座谈交流，了解该校特色育人工作体系。作为我省发展潜力排名居首位的民办本科高校，该校的很多创新做法和工作特色都给老师们带来触动和启发。
本次学习活动是推进我校学习型政工干部队伍建设的第一阶段活动，接下来，学生处将结合我校学生工作发展的实际需要，分批次、分层次陆续开展各类主题学习活动，促进广大政工干部不断创新工作思路，努力提升学生工作科学化水平。
	</p>
			
			</div>
			<div class="tag">Tags:</div>
			<div class="page"><div class="page_left"><a href="#">上一篇：学生处召开辅导员考察学习总结交..</a></div><div class="page_right"><a href="#">下一篇：学生处、保卫处组织安全稳定工作..</a>
</div></div>
		</div>
		<div class="content_right">
			<div class="hot">
				<h3>最热文章</h3>
                <ul>
                    <li>● <a href="#">这是条很条很好新闻.....</a></li>
                    <li>● <a href="#">这是条很条一条很条很新闻.....</a></li>
                    <li>● <a href="#">这是一条很很好条很的新闻.....</a></li>
                    <li>● <a href="#">这是一条很条好条很的新闻.....</a></li>
                    <li>● <a href="#">这是条很条很条很新闻.....</a></li>
                </ul>
          </div>
		  <div class="hot">
				<h3>最热文章</h3>
                <ul>
                    <li>● <a href="#">这是条很条很好新闻.....</a></li>
                    <li>● <a href="#">这是条很条一条很条很新闻.....</a></li>
                    <li>● <a href="#">这是一条很很好条很的新闻.....</a></li>
                    <li>● <a href="#">这是一条很条好条很的新闻.....</a></li>
                    <li>● <a href="#">这是条很条很条很新闻.....</a></li>
                </ul>
          </div>
		  <div class="hot">
				<h3>最热文章</h3>
                <ul>
                    <li>● <a href="#">这是条很条很好新闻.....</a></li>
                    <li>● <a href="#">这是条很条一条很条很新闻.....</a></li>
                    <li>● <a href="#">这是一条很很好条很的新闻.....</a></li>
                    <li>● <a href="#">这是一条很条好条很的新闻.....</a></li>
                    <li>● <a href="#">这是条很条很条很新闻.....</a></li>
                </ul>
          </div>
		</div>
      </section>

<?php include template("content","footer"); ?>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>