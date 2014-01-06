<?php
/**
 * zencolor is a theme for typecho
 * 
 * @package zencolor
 * @author Seita
 * @version 0.1
 * @link http://seita.me
 */
 
 $this->need('header.php');
 ?>
<article class="post intro"> <!-- 这一段不是 copy, 是 clone,不需要请删除-->

                   <span style="font-size:40px;width: auto;
max-width: 90%;

margin: auto;
position: absolute;

left: 0;

right: 0;"><a href="http://wehoton.com" target="_blank" style="color:#fff;border-bottom:1px #ccc dotted">
<span style="font-family:'FontAwesome';margin:0;font-size:40px;">&#xf0ac;</span>
万花筒.</a></span>
                    <span>...</span>
                    <h2>一个属于学生，有关分享与探索的社区</h2>
</article> <!-- clone end here -->

	<?php while($this->next()): ?>
        <article class="post no-<?php $this->sequence() ?>">
        <div class="container clearfix">
                 <header class="post-header">
			<h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                
			<div class="post-meta">
				<span><?php _e('By '); ?><?php $this->author(); ?></span>
				<span><?php _e('Published '); ?><?php $this->date('F j, Y'); ?></span>
				<span><?php _e('Category in '); ?><?php $this->category(','); ?></span>
				
			</div>
                </header>
            <div class="post-content">
    			<?php $this->content('Continue Reading'); ?>
            </div>
        </div>
        </article>
	<?php endwhile; ?>

    <nav class="pagination">
			<div class="container">
				<?php $this->pageLink('Newer Posts →','prev'); ?>
				<?php $this->pageLink('← Older Posts','next'); ?>
			</div>
		</nav>

<a href="https://me.alipay.com/chricy" target="_blank" class="badge"><img src="http://seita.u.qiniudn.com/static/img/donate.png" width="66px" alt="Donate to support my work!" class="donate"></a>

<?php $this->need('footer.php'); ?>