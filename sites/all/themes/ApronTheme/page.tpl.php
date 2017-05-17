<!-- begin document -->
<div id='page-wrapper'>
  <div class="container">
    <?php print render($page['page_top']); ?>
    <header>
      <!-- dashboard/toolbar -->
      <div class="dashboard">
        <?php print render($page['dashboard']); ?>
        <div id='logo'>
          <?php if ($logo): ?>
            <a href="<?php print $base_path: ?>" title="<?php print t('Click here to return home')?>"></a>
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          <?php endif; ?>
        </div>
        <nav>
          <div id='main-menu'>
            <?php print theme('links_system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links', 'menu', 'inline', 'clearfix')))); ?>
          </div>
        </nav>
      </div>
      <!--  header -->
      <div class="header">
        <?php print render($page['header']); ?>
      </div>
    </header>
    <!-- sidebar -->
    <div class="sidebar">
      <?php print render($page['sidebar']); ?>
    </div>
    <!-- content -->
    <div class="content">
      <?php print render($page['content']); ?>
    </div>
    <!-- footer -->
    <div class="footer">
      <?php print render($page['footer']); ?>
    </div>
    <?php print render($page['page_bottom']); ?>
  </div>  <!-- end of container -->
</div>
<!-- end of document  -->
