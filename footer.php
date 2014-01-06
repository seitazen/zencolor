      

 <footer class="footer">
        <div class="container">

   <p class="footer-copyright"> &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.<br/><span style="color:#ccc;">♥</span> Theme ZenColor designed by <a href="http://seita.me" target="_blank">Seita</a>.</p>
   <p class="footer-credit"><!--你可以更改下面这一段-->
   <a href="http://seita.me/go/digitalocean" target="_blank"><img src="http://seita.u.qiniudn.com/static/img/do.png" width="90" alt="digitalocean"></a>
   <!--end here-->
   </p> 
</div>
</footer><!-- end #footer -->
<div style="display:none"><?php $this->options->analytics() ?></div><!--统计代码可以后台设置-->
<?php $this->footer(); ?>

</body>
</html>