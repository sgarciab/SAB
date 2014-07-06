<!DOCTYPE utf8>
<html lang="<?php echo I18n::$lang ?>">
    <head>
        <title>Administraci&oacute;n :: ERROR</title>
        <meta charset=utf-8 />
        
        <?php echo HTML::style('media/css/blueprint/screen.css'); ?>
        <!--[if IE]>
		<?php echo HTML::style('media/css/blueprint/ie.css'); ?>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <?php echo HTML::style('media/css/admin.css'); ?>
        <?php echo HTML::style('media/css/jquery-ui-1.8.18.custom.css'); ?>
    
        <?php echo HTML::script('media/js/jquery-1.7.1.min.js'); ?>
        <?php echo HTML::script("media/js/jquery-ui-1.8.18.custom.min.js"); ?>
		<?php echo HTML::script("media/js/jquery-validation.js"); ?>
		<?php echo HTML::script("media/js/system.js"); ?>
		<script type="text/javascript">
			var document_root = <?php echo URL::site(); ?>;
		</script>
    </head>
    <body>
        <div id="content" class="section prepend-2 span-20 append-2 line last">		
			<?php echo $content; ?>
		</div>
		
    </body>
</html>