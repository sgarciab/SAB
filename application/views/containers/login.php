<!doctype html>
 <!--[if lt IE 9]>
	<div id="back_ie">
		<div id=info_ie>
			<center><h2>Problema de Incompatibilidad con el Navegador</h2><br/></center>
			Esta p&aacute;gina no se puede visualizar correctamente porque el navegador no soporta algunas de las caracter&iacute;sticas que contiene.<br/>
			Por favor descargue la &uacute;ltima versi&oacute;n o utilice uno de estos navegadores.<br/><br/>
			<center>
				<table border="0">
					<tr>
						<td><a href="http://www.google.com/chrome" title="Descargar Google Chrome" target="_blank"><img src="<?php echo Url::site();?>media/images/browser_chrome.gif" /></a></td>
						<td><a href="http://www.mozilla.com/firefox/" title="Descargar Mozilla Firefox" target="_blank"><img src="<?php echo Url::site();?>media/images/browser_firefox.gif" /></a></td>
						<td><a href="http://www.microsoft.com/windows/Internet-explorer/default.aspx" title="Descargar Internet Explorer" target="_blank"><img src="<?php echo Url::site();?>media/images/browser_ie.gif" /></a></td>
						<td><a href="http://www.opera.com/download/" title="Descargar Opera" target="_blank"><img src="<?php echo Url::site();?>media/images/browser_opera.gif" /></a></td>
						<td><a href="http://www.apple.com/safari/download/" title="Descargar Safari" target="_blank"><img src="<?php echo Url::site();?>media/images/browser_safari.gif" /></a><br/></td>
					</tr>
					<tr>
						<td>Chrome 2.0+</td>
						<td>Firefox 3+</td>
						<td>Internet Explorer 9+</td>
						<td>Opera 9.5+</td>
						<td>Safari 3+</td>
					</tr>
				</table>
			</center>
		</div>
	</div>
<![endif]--> 


<html lang="<?php echo I18n::$lang ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
<!--		<link rel="icon" type="image/png" href='<!--?php echo URL::site('/favicon.png')?>' />-->
        <link rel='shortcut icon' href='<?php echo URL::site('media/images/favicon.ico')?>' type='image/x-icon'/>
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="<?php echo URL::site(); ?>/media/css/controllers/all-ie-only.css" />
		<![endif]-->
        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
        <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
    </head>
    <body class="">
               
		<div class="container"><br><br>
                <div class="span-24 last line main_banner_login">

                </div>
                    <section id="content" class="span-24 last line">
                        <div class="prepend-2 span-20 append-2 last line">
                            <?php FlashMessenger::factory()->get_messages(); ?>
                        </div>
                       <div class="span-24 content_container "><br><br>
				<div class="span-24 content ">
					<?php echo $content ?>
				</div>
			</div>
                    </section>
                    <br><br>
			
		</div>
    </body>
</html>