<!-- begin document -->
<div id='page-wrapper'>
    <?php print render($page['page_top']); ?>

    <!-- dashboard/toolbar/navbar -->
      <div class="dashboard">
        <?php print render($page['dashboard']); ?>
      </div>

      <!--  header -->
      <header>
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
        <div class="header-wrap">
          <?php print render($page['header']); ?>
        </div>
      </header>

      <!-- navigation tabs -->
      <div class="navigation-wrap">
        <?php print render($page['highlighted']); ?>
      </div>

      <!-- container -->
    <div class="container">
    <!-- Main Wrap -->
    <div class="main-wrap">
    <!-- sidebar -->
    <div class="sidebar-wrap">
      <!-- social feed icons -->
      <!-- error messages -->
      <?php print $messages; ?>
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


    <!-- content of the page -->
    </div>
    <div class="content-wrap">
      <?php print render($page['content']); ?>
    </div>

</div>  <!-- end of container -->
<!-- footer -->
<div class="footer-wrap">
  <hr>
  <?php print render($page['footer']); ?>
</div>
<hr>
<?php print render($page['page_bottom']); ?>
</div>
<!-- end of document  -->
