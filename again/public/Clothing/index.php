<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Inventory Menu'; ?>
<?php include(SHARED_PATH . '/clothing_header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/clothing/inventory/index.php'); ?>">Inventory</a></li>
      <li><a href="<?php echo url_for('/clothing/pages/index.php'); ?>">Pages</a></li>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/clothing_footer.php'); ?>
