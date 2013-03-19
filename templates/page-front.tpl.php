<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">	   
<head>
	<title><?php print $head_title ?></title>
	<meta name="description" content="APM Construction Services Inc. has earned an enviable reputation for being one of the premier builders in Canada.  In over 30 years, we have established ourselves as a reliable, timely, and experienced company with our clients’ interests in mind.  Our focus on service, trust, and value is a key part of why we’re building… across Canada." />
	<meta name="keywords" content="APM construction services, project management, Prince Edward Island, PEI construction, Canada construction, construction management, engineering, project management, design builders, design build, engineers, construction services, Canada builders, Canadian construction company, Canadian construction company, Charlottetown, Halifax, Toronto, Calgary, building across Canada, contractor, subcontractor, constructor, carpenters, retail construction, commercial construction, industrial construction, office construction, institutional construction, residential building, build, renovations, remodeling, estimating, concrete construction, construction contract, general contractor, house construction, home construction, commercial buildings, office buildings, university buildings, industrial facilities, education construction, health care construction, hospital construction, senior care construction, industrial construction, school construction, new construction, developer, big box stores, property development, small projects, design scheme, building, projects, engineers, engineering, design builder, site identification, working plan, site acquisition, zoning, millwork, small jobs, APM guarantee, safety, zero injury, community sponsorships" />
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
		
		<div class="slider-wrapper grid_24  theme-default" >
           	<div id="slider" class="nivoSlider" >
       	         <a href="/"><img visibility="visible" src="<?php print $base_path . $directory; ?>/images/slideshows/Who-We-Are.png" alt="Who We Are" data-transition="fade" width="960" height="330" /></a>
	             <a href="content/what-we-do"><img visibility="hidden" src="<?php print $base_path . $directory; ?>/images/slideshows/What-We-Do.png" alt="What We Do" data-transition="fade" width="960" height="330"  /></a>
                 <a href="content/services"><img visibility="hidden" src="<?php print $base_path . $directory; ?>/images/slideshows/Services.png" alt="APM Services" data-transition="fade" width="960" height="330"  /></a>
                 <a href="content/portfolio"><img visibility="hidden" src="<?php print $base_path . $directory; ?>/images/slideshows/Portfolio.png" alt="Our Portfolio" data-transition="fade" width="960" height="330"  /></a>
                 <a href="media"><img visibility="hidden" src="<?php print $base_path . $directory; ?>/images/slideshows/Media.png" alt="Media Center" data-transition="fade" width="960" height="330"  /></a>
                 <a href="contact-us"><img visibility="hidden" src="<?php print $base_path . $directory; ?>/images/slideshows/Contact-Us.png" alt="Contact Us" data-transition="fade" width="960" height="330"  /></a>

			</div>
		    <div id="apm_full_name">APM Construction Services</div>
    	</div>

				
	    <div class="clear"></div>
		<div id="apm_featured" class="grid_24" style="margin-left:0px;padding-bottom:15px;">
			<?php print $feature_block; ?>
			
		</div>
		<div class="clear"></div>
		

		
		<div id="front_apm_content" class="grid_24" style="margin-left:0px;">
			<div id="apm_text" class="grid_16">
				<div>
				<?php if ($title): ?><h1 id="apm_title"><a href="/content/apm-guarantee"><?php print $title; ?></a></h1><?php endif; ?>
		 
		        <?php if ($tabs): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
		        <?php print $help; ?>
		        <?php if ($show_messages && $messages): ?><?php print $messages; ?><?php endif; ?>
				<?php print $content; ?> 
				</div>
			</div>
			<div id="sidebar_right_wrapper" class="grid_8"> 
	  			<div id="sidebar_right" style="">
	  				<div style="text-align: left;font-weight:bold;padding-top:5px;">
	  					<img src="<?php print $base_path . $directory; ?>/images/APMlogo120x53.png" width="70"/> APM Construction Services
	  				</div>
	  				<div style="height: 0px;"></div>
	  				<?php print $sidebar_right; ?>
	  			</div>
	  		</div>
	  		<div class="clear"></div>
	  		<div class="grid_24" id="h_line_row">
	  			<div>
	  				<hr />
	  			</div>
	  		</div>
	  		<div class="clear"></div>
	  		<div class="grid_24" id="apm_secondary_content">
	  			<div>
	  				<? print $secondary_content; ?>
	  			</div>
	  		</div>
	  		<div class="clear"></div>
		</div>
		<div class="clear"></div>
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
	<!--  Scripts required by the Nivo Slider....  These conflict with GalleryFormatter so do not inlcude them with it.  -->
    <script type="text/javascript" src="/sites/all/themes/apmgroup/scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/sites/all/themes/apmgroup/scripts/jquery.nivo.slider.js"></script>	
	    <script type="text/javascript">
	    $(window).load(function() {
		        $('#slider').nivoSlider();
	    });
	    </script>
	 
</body>
</html>

