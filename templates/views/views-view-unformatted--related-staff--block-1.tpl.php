<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div style="text-align:left;border-top:1px solid #ffffff;padding-top:10px;">

<span style="font-weight:bold;">
<? 
	$nd = node_load(arg(1));
	$srv_type = $nd->title;
?><br />
<?
	print $srv_type;
?></span><br />
</div>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php print $classes[$id]; ?>" style="padding-top:15px;padding-bottom:20px;text-align:left;">
  XXXXXXXXXXX
    <?php print $row; ?>
	YYYYYYYYYY
  </div>
<?php endforeach; ?>