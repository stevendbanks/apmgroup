<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">	   
<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php print $head; ?>
	<?php print $styles ?>
	<?php print $scripts ?>

	<!--[if lte IE 6]> <style type="text/css" media="all">@import "<?php print $directory?>/css/ie6.css";</style><![endif]-->
	<!--[if !IE 7]>	<style type="text/css">	#body_wrapper {display:table;height:100%}	</style><![endif]-->
	
</head>
<body>
	<div id="contact_menu_block" style="height: 53px;">
		<div id="contact_menu" class="container_24">
			<div class="grid_24" style="height: 48px;">
				<?php print $contact_menu; ?>
				<div id="apm_login">
					
				</div>
			</div>
			
		</div>
		<div class="clear"></div>
	</div>

	<?
		//var_dump($node->content["field_image"]["field"]["items"][0]["#node"]->field_image[0]);	
		$apm_bg_img = "sites/all/themes/apmgroup/images/slideshows/projects-bg.jpg";
		if(isset($node->content["field_bg_image"]["field"]["items"][0]["#node"]->field_bg_image[0]["filepath"]))
		{
			$apm_bg_img = $node->content["field_bg_image"]["field"]["items"][0]["#node"]->field_bg_image[0]["filepath"];
		}
		else
		{
			$apm_bg_img = "";
			// handle other instances differently
			if(arg(0) == "node")
			{	 $nd = node_load(arg(1));
			}
			if(arg(0) == "media" || $nd->type == "news")
			{
				$apm_bg_img = "sites/all/themes/apmgroup/images/slideshows/media-bg.jpg";
			}
			if(arg(1) == "projects" || $nd->type == "project")
			{
				$apm_bg_img = "sites/all/themes/apmgroup/images/slideshows/projects-bg.jpg";
			}
		}
		
	?>
	
	<div id="site_wrapper">
		<div id="body_wrapper" class="container_24">
			<div id="apm_header" class="grid_24">
				<div id="apm_header_logo">
					<a href="<?php print $base_path; ?>"><img src="<?php print $base_path . $directory; ?>/images/Logo.png" width="407" height="61" alt="APM Construction Services Inc." /></a>
				</div>
                <div id="apm_login">
				  <?php if ($search_box): ?>
					<div id="search-box"<?php print $toggle_label ?>><?php print $search_box; ?></div>
				  <?php endif; ?>	
			    </div>
			    <div class="clear clearfix"></div>
			</div>
			<div class="clear"></div>
			<div id="slideshow-menu">
				<div id="superfish">
				    <?php print $superfish_menu; ?>
				</div>
			</div>
			<div class="clear"></div>
			
			<div class="grid_24 slider-wrapper theme-default">
				<?	if($apm_bg_img != "")
					{	?>
						<img src="<?php print $base_path . $apm_bg_img; ?>" width="960" height="344" id="feature_bg_img" />
				<?	}	?>
	    	</div>
	    	
			<div id="apm_content" class="grid_24">
				<div id="apm_breadcrumb" class="grid_24"><?php print $breadcrumb; ?></div>
				<div class="clear"></div>
				<div id="apm_text" class="grid_24">
					<?php if ($title): ?><h1 id="apm_title" style="font-family: 'Francois One', sans-serif;"><?php print $title; ?></h1><?php endif; ?>
			 
			        <?php if ($tabs): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
			        <?php print $help; ?>
			        <?php if ($show_messages && $messages): ?><?php print $messages; ?><?php endif; ?>
					<?php print $content; ?> 
				</div>
			</div>
		</div>
		<div id="apm_push"></div>
	</div>	
	<div id="apm_footer_container">
		<div id="apm_footer_wrapper">
			<div class="footer_block footer_first"><? print $footer_block_1; ?></div>
			<div class="footer_block"><? print $footer_block_2; ?></div>
			<div class="footer_block"><? print $footer_block_3; ?></div>
			<div class="footer_block footer_last"><? print $footer_block_4; ?></div>
			<div style="clear:both;padding-top:20px;"></div>
			
		</div>
	</div>	
	
	<?php print $page_closure; ?>
	
	<?php print $closure; ?>
	 
</body>
</html>

