<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>/news.css"/>

<div class="del-t clearfix"><a href="/?m=content&c=news">&lt; 返回新闻列表</a></div>
	<!-- start 列表部分 -->
	<h1 class="deltit"><?php echo $title;?></h1>
	<div class="author">Posted on 2014 年 11 月 19 日 by <?php echo $username;?></div>
	<p class="article">
                <?php echo $content;?>
        </p>
	<!-- end 列表部分 -->
</div>

<?php include template("content","footer"); ?>