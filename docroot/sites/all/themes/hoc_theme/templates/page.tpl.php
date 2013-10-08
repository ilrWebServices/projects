<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<div id="page-wrapper" class="container"><div id="page">

  <header role="banner">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print render($page['header']); ?>

  </header> <!-- / header -->

  <?php if ($main_menu_expanded): ?>
    <nav role="navigation" class="main clearfix">
      <i class="icon-reorder jpanel-trigger"></i>
      <?php print render($variables['main_menu_expanded']); ?>
    </nav> <!-- / nav -->
  <?php endif; ?>

  <div id="banner" class="clearfix">
    <div class="img"><img src="<?php print base_path() . drupal_get_path('theme', 'hoc_theme') . '/images/home.jpg'; ?>"/></div>
    <?php if ($page['banner']): ?>
      <div id="banner-content">
        <?php print render($page['banner']); ?>
      </div> <!-- /#banner-content -->
    <?php endif; ?>
  </div> <!-- / banner -->

  <?php print $messages; ?>

  <div id="main" class="clearfix" role="main">

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="column"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <div id="content" class="column"><div class="section">
      <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div> <!-- /#main -->

</div></div> <!-- /#page, /#page-wrapper -->
<footer role="contentinfo">
  <div class="section">
    <?php if ($secondary_menu): ?>
      <nav role="navigation" class="secondary">
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </nav> <!-- / nav -->
    <?php endif; ?>
    <?php print render($page['footer']); ?>
  </div>  <!-- /.section -->
</footer> <!-- / footer -->
