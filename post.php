<?php $this->need('header.php'); ?>

 <article class="post no-1">
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
    			<?php $this->content(); ?>
            </div>
        </div>
        </article>
   

    <?php $this->need('comments.php'); ?>



<?php $this->need('footer.php'); ?>
