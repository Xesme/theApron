<!-- begin document -->
<div id='page-wrapper'>
  <div class="container">
    <?php print render($page['page_top']); ?>
    <header>
      <!-- dashboard/toolbar -->
      <div class="dashboard">
        <?php print render($page['dashboard']); ?>
        <div id='logo'>
        </div>
        <nav> </nav>
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
