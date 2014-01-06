<?php $this->need('header.php'); ?>

    
        <h3 class="archive-title container"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
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
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

       <nav class="pagination">
			<div class="container">
				<?php $this->pageLink('Newer Posts →','prev'); ?>
				<?php $this->pageLink('← Older Posts','next'); ?>
			</div>
		</nav>
    
	
	<?php $this->need('footer.php'); ?>
