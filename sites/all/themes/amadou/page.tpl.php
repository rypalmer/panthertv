<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
    <!--[if IE 6]>
          <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/ie-fixes/ie6.css";</style>
    <![endif]-->
    <!--[if lt IE 7.]>
      <script defer type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/ie-fixes/pngfix.js"></script>
    <![endif]-->

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
        <?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links) ?>
        <?php endif; ?>
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
      <div id="sidebarsContentL" style="width: <?php print amadou_get_sideBars_width($sidebar_left, $sidebar_right) ?>px;">
        <?php if ($sidebar_left) { ?><div id="sidebarLeft"><?php print $sidebar_left ?></div><?php } ?>
      </div>

        <div id="mainColumn">
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
  </div><!-- end content --></div>

  <!-- footer -->
  <div id="footer">
    <?php print $footer_message ?>
    <?php print $footer; ?>
  </div><!-- end footer -->

  <?php print $closure ?>
</body>
</html>
