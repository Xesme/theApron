<!-- begin document -->
<div id='page-wrapper'>
  <div class="container">
    <?php print render($page['page_top']); ?>

    <!-- dashboard/toolbar/navbar -->
    <header>
      <div class="dashboard">
        <?php print render($page['dashboard']); ?>
        <div id='logo'>
          <?php if ($logo): ?>
            <a href="<?php print $base_path; ?>" title="<?php print t('Click here to return home');?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
          <?php endif; ?>
        </div>
        <nav>
          <div id='main-menu'>
            <?php print theme('links_system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links', 'menu', 'inline', 'clearfix')))); ?>
          </div>
        </nav>
      </div>

      <!--  header -->
      <div class="header-wrap">
        <?php print render($page['header']); ?>
      </div>
    </header>

    <!-- Main Wrap -->
    <div class="main-wrap">
    <!-- sidebar -->
    <div class="sidebar-wrap">
      <!-- social feed icons -->
        <div class="social-wrap">
          <?php print render($page['social']); ?>
        </div>

      <?php print render($page['sidebar']); ?>
    </div>

    <!-- content -->
      <!-- breadcrumb trail  -->
      <?php if ($breadcrumb): ?>
        <?php print $breadcrumb; ?>
      <?php endif; ?>

      <!--  title  -->
      <!-- <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?> -->

    <!-- tabs -->
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>

    <!-- error messages -->
      <?php print $messages; ?>

    <!-- content of the page -->
      <div class="content-wrap">
        <?php print render($page['content']); ?>
      </div>
    </div>

  <!-- footer -->
  <div class="footer-wrap">
    <?php print render($page['footer']); ?>
  </div>

  <?php print render($page['page_bottom']); ?>
</div>  <!-- end of container -->
</div>
<!-- end of document  -->
