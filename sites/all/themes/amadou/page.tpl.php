<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>

  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in stooopid MSIE */ ?> </script>

</head>

<body>

  <!-- header -->
  <div id="header">
    <?php if ($logo) { ?>
      <div id="logo"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>

        <!-- site name and slogan -->
        <div id="siteNameSlogan">

	  <!-- site name -->
          <?php if ($site_name) : ?>
            <h1>
	      <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?>
	      </a>
	    </h1>
	  <?php endif; ?><!-- end site name -->

	  <!-- header block region -->
          <?php if ($header) : ?>
	    <div id="headerBlockRegion">
	      <?php print $header; ?>
	    </div>
	  <?php endif; ?><!-- end header block region -->

	  <!-- site slogan -->
          <?php if ($site_slogan) : ?>
	      <h2>
	        <?php print $site_slogan ?>
	      </h2>
	    <?php endif; ?><!-- end site slogan -->
	  </div><!-- end site name and slogan -->

      <!-- primary links -->
      <div id="menu">
        <?php print theme('menu_links', $primary_links) ?> 
      </div><!-- end primary links -->

	<!-- search box -->
	<?php if ($search_box) : ?>
	<div id="searchBox">
	  <div class="wrap">
	    <div class="form-item">
	      <?php print $search_box ?>
	    </div>
	  </div>
	</div>
	<?php endif; ?><!-- end search box -->
  </div><!-- end header -->

  <!-- content -->
  <div id="contentWrapper">
      <div id="primaryContent">

<!--Left sidebar-->
      <div id="sidebarsContentL" style="margin: <?php print amadou_get_sidebarsContent_margin( $search_box) ?>;">
        <?php if ($sidebar_left) { ?><div id="sidebarLeft"><?php print $sidebar_left ?></div><?php } ?>
      </div>

        <div id="mainColumn" style="width: <?php print amadou_get_primaryContent_width( $sidebar_left, $sidebar_right) ?>%;">
<!--wrap it in rounded corners-->
      <div class="mainColumn-t"><div class="mainColumn-b"><div class="mainColumn-l"><div class="mainColumn-r"><div class="mainColumn-tl"><div class="mainColumn-tr"><div class="mainColumn-bl"><div class="mainColumn-br">
    <?php if ($mission) { ?><div class="mission"><?php print $mission ?></div><?php } ?>
          <?php if ($breadcrumb) { ?><div class="breadcrumb"><?php print $breadcrumb ?></div><?php } ?>
          <?php if ($title) { ?><h1 class="pageTitle"><?php print $title ?></h1><?php } ?>
          <?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
          <?php if ($help) { ?><div class="help"><?php print $help ?></div><?php } ?>
          <?php if ($messages) { ?><div class="messages"><?php print $messages ?></div><?php } ?>
	  <?php print $content_top; ?>
          <?php print $content; ?>
	  <?php print $content_bottom; ?>
	  <?php print $feed_icons; ?>
        </div>
      <!--End the main content rounded corners-->
      </div></div></div></div></div></div></div></div>
        <!-- sidebars -->
      <div id="sidebarsContentR" style="margin: <?php print amadou_get_sidebarsContent_margin( $search_box) ?>;">

        <?php if ($sidebar_right) { ?><div id="sidebarRight"><?php print $sidebar_right ?></div><?php } ?>
      </div>
  </div><!-- end content --></div>

  <!-- footer -->
  <div id="footer">
    <?php print $footer_message ?> 
  </div><!-- end footer -->

  <?php print $closure ?>
</body>
</html>
