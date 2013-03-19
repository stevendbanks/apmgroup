<?php
// $Id: template.php,v 1.10 2010/07/19 22:05:33 danprobo Exp $
function phptemplate_body_class($left, $right) {
	if ($left && $right) {
		$class = 'sidebars-2';
		$id = 'sidebar-side-2';	
	}
	else if ($left || $right) {
		$class = 'sidebars-1';
		$id = 'sidebar-side-1';
	}
	
	if(isset($class)) {
		print ' class="'. $class .'"';
	}
		if(isset($id)) {
		print ' id="'. $id .'"';
	}
}

if (drupal_is_front_page()) {
  drupal_add_js(drupal_get_path('theme', 'apmgroup') . '/scripts/jquery.cycle.all.js');
}

/**
* Return a themed breadcrumb trail.
*
* @param $breadcrumb
*   An array containing the breadcrumb links.
* @return a string containing the breadcrumb output.
*/
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
	$title = drupal_get_title();
	if (!empty($title)) {
	  $breadcrumb[] = '<span class="breadcrumb-current">'. $title .'</span>';
	}
	return '<span class="breadcrumb">'. implode(' &rsaquo; ', $breadcrumb) .'</span>';
  }
}

function apmgroup_preprocess_views_exposed_form(&$vars, $hook)
{
	// only alter the required form based on id
	if ($vars['form']['#id'] == 'views-exposed-form-News-block-1') 
	{
          // Change the text on the submit button
          $vars['form']['submit']['#value'] = t('Search');
          // Rebuild the rendered version (submit button, rest remains unchanged)
          unset($vars['form']['submit']['#printed']);
          $vars['button'] = drupal_render($vars['form']['submit']);
     }
}

function phptemplate_upload_attachments($files) {
 $rows = array();
  foreach ($files as $file) {
    $file = (object)$file;
    if ($file->list && empty($file->remove)) {
      $href = file_create_url($file->filepath);
      $text = "Download the PDF";
      $rows[] = array(l($text, $href));
    }
  }
  if (count($rows)) {
    return theme('item_list', $rows, NULL, 'ul', array('id' => 'attachments'));
  }
}

