<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>/news.css"/>
	
	<!-- start 列表部分 -->
	<dl class="dl-list clearfix">
		<dt><span>新闻资讯</span><em>NEWS</em></dt>
                
                
                
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aa23203f76bf5340c8657f6bdbfbf62b&action=newslist&catid=9&num=15&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'newslist')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'9','limit'=>$offset.",".$pagesize,'action'=>'newslist',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->newslist(array('catid'=>'9','limit'=>$offset.",".$pagesize,'action'=>'newslist',));}?> 
                    <?php if($data) { ?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <dd>
                            <a href="###" class="st">【公司动态】</a>
                            <a href="<?php echo $r['url'];?>" class="at"><?php echo $r['title'];?></a>
                            <span class="time"><?php echo date('Y-m-d',$r['inputtime']);?></span>
                        </dd>
                        <?php $n++;}unset($n); ?>
                    <?php } ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                
                
                
	</dl>
         
	<script type="text/javascript">
		$('.dl-list dd').each(function(i,e){if((i+1)%5===0){$(e).addClass('br');}});
	</script>
	<!-- end 列表部分 -->
	<div class="page">
            
<?php $pages = pages_new($content_total, $page, $pagesize, "?m=content&c=news&page={\$page}"); echo $pages;?>

<!--
		<a href="###" class="on">1</a>
		<a href="###">2</a>
		<a href="###">3</a>
		<a href="###">4</a>
		<a href="###">5</a>
		<a href="###">6</a>
		<a href="###">7</a>
		<a href="###">8</a>
		<a href="###">9</a>
		<a href="###">10</a>
		<a href="###">下一页</a>
-->
	</div>


</div>
<!-- end 外框 -->
<?php include template("content","footer"); ?>
