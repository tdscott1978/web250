<?php require_once('../../../private/initialize.php'); ?>

<?php
$id = $_GET['id'] ?? '1'; 

$item = find_item_by_id($id);

?>

<?php $page_title = 'Show Inventory'; ?>
<?php include(SHARED_PATH . '/clothing_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/clothing/inventory/index.php'); ?>">&laquo; Back to List</a>

  <div class="inventory show">

    <h1>Inventory Item: <?php echo h($item['name']); ?></h1>
    <div class="attributes">
      <dl>
        <dt>ID</dt>
        <dd><?php echo h($item['id']); ?></dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd><?php echo $item['visible'] == '1' ? 'true' : 'false'; ?></dd>
      </dl>
      <dl>
        <dt>Gender</dt>
        <dd><?php echo h($item['gender']); ?></dd>
      </dl>
      <dl>
        <dt>Type</dt>
        <dd><?php echo h($item['type']); ?></dd>
      </dl>
      <dl>
        <dt>Color</dt>
        <dd><?php echo h($item['color']); ?></dd>
      </dl>
      <dl>
        <dt>Price</dt>
        <dd><?php echo h($item['price']); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/clothing_footer.php'); ?>
