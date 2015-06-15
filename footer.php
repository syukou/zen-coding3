<footer id="footer" class="footer">
    <div class="footer-inner">

    </div>
</footer>
<p class="btn-pagetotop" id="jsiBtnPagetop">
    <a href="#top" class="btnPagetopIco jscFadeinTrigger">ページトップへ</a>
</p>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function(){
        $('.masonry').masonry();
    });
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/footerFixed.js"></script>

<?php wp_footer(); ?>
</body>
</html>