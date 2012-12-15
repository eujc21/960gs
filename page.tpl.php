<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="headertop" class="container_full clearfix ">
  <div id="site-headertop" class="container-16 clearfix">
		<?php if ($page['logo']): ?>
    		<div id="logo" class="grid-5"><?php print render($page['logo']); ?></div>
		<?php endif; ?>
		<?php if ($page['navigation']): ?>
    		<div id="navigation" class="grid-11"><?php print render($page['navigation']); ?></div>
		<?php endif; ?>
    </div>
</div>

<div id="slider" class="container_full clearfix">
	<div id="site-slider" class="container-16 clearfix"> 
	<?php if ($page['slider']): ?>
    <div id="slider" class="grid-16"><?php print render($page['slider']); ?></div>
	<?php endif; ?>
	<?php if ($page['navigation2']): ?>
    <div id="navigation2" class="grid-16"><?php print render($page['navigation2']); ?></div>
	<?php endif; ?>
	</div> 
</div>

<div id="page" class="container-16 clearfix">

  <div id="site-header" class="clearfix">
    <div id="branding" class="grid-4 clearfix">
    
    <?php if ($linked_site_name): ?>
      <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
    <?php endif; ?>
    </div>

  <?php if ($main_menu_links || $secondary_menu_links): ?>
    <div id="site-menu" class="grid-12">
      <?php print $main_menu_links; ?>
      <?php print $secondary_menu_links; ?>
    </div>
  <?php endif; ?>

  <?php if ($page['search_box']): ?>
    <div id="search_box" class="grid-6 prefix-10"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  </div>

  <div id="site-subheader1" class="clearfix">
  <?php if ($page['half1']): ?>
    <div id="half1" class="<?php print ns('grid-16', $page['half1'], 8); ?>">
      <?php print render($page['half1']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['half2']): ?>
    <div id="half2" class="<?php print ns('grid-16', $page['half2'], 8); ?> clearfix">
      <?php print render($page['half2']); ?>
    </div>
  <?php endif; ?>	
  

  </div>
  
  <div id="divider_padding"></div>
  
    <div id="site-row13c" class="clearfix">
  <?php if ($page['third1']): ?>
    <div id="third1" class="<?php print ns('grid-16', $page['third1'], 12); ?> prefix-1 ">
      <?php print render($page['third1']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['third2']): ?>
    <div id="third2" class="<?php print ns('grid-16', $page['third2'], 12); ?> prefix-1 suffix-1">
      <?php print render($page['third2']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['third3']): ?>
    <div id="third3" class="<?php print ns('grid-16', $page['third3'], 12); ?> 	clearfix">
      <?php print render($page['third3']); ?>
    </div>
  <?php endif; ?>

  </div>
  
  <div id="divider_padding"></div>
  
    <div id="site-row23c" class="clearfix">
  <?php if ($page['third4']): ?>
    <div id="third4" class="<?php print ns('grid-16', $page['third5'], 12); ?> prefix-1">
      <?php print render($page['third5']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['third5']): ?>
    <div id="third5" class="<?php print ns('grid-16', $page['third5'], 12); ?> 	prefix-1 suffix-1">
      <?php print render($page['third5']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['third6']): ?>
    <div id="third6" class="<?php print ns('grid-16', $page['third6'], 12); ?> 	clearfix">
      <?php print render($page['third6']); ?>
    </div>
  <?php endif; ?>

  </div>


  <div id="main" class="column <?php print ns('grid-16', $page['sidebar_first'], 4, $page['sidebar_second'], 3) . ' ' . ns('push-4', !$page['sidebar_first'], 4); ?>">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>

</div>


  <div id="footer" class="container_full clearfix">
    <div id="site-footer" class="container-16 clearfix">
    <div id="site-subfooter" class="clearfix">
  <?php if ($page['bfourth1']): ?>
    <div id="bfourth1" class="<?php print ns('grid-16', $page['bfourth1'], 12); ?>">
      <?php print render($page['bfourth1']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['bfourth2']): ?>
    <div id="bfourth3" class="<?php print ns('grid-16', $page['bfourth2'], 12); ?> 	clearfix">
      <?php print render($page['bfourth2']); ?>
    </div>
  <?php endif; ?>
  
  <?php if ($page['bfourth3']): ?>
    <div id="bfourth3" class="<?php print ns('grid-16', $page['bfourth3'], 12); ?> 	clearfix">
      <?php print render($page['bfourth3']); ?>
    </div>
  <?php endif; ?>

 <?php if ($page['bfourth4']): ?>
    <div id="bfourth4" class="<?php print ns('grid-16', $page['bfourth4'], 12); ?> 	clearfix">
      <?php print render($page['bfourth4']); ?>
    </div>
  <?php endif; ?>
  </div>
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-16 clearfix">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
    </div>

  </div>
