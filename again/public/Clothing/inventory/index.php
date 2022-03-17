<?php require_once('../../../private/initialize.php'); ?>

<?php
    $inventory_set = find_all_inventory();
?>

<?php $page_title = 'Items'; ?>
<?php include(SHARED_PATH . '/clothing_header.php'); ?>

<div id="content">
  <div class="items listing">
    <h1>Items</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/clothing/inventory/new.php'); ?>">Create New Item</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Visible</th>
  	    <th>Gender</th>
        <th>Type</th>
        <th>Color</th>
        <th>Price</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($item = mysqli_fetch_assoc($inventory_set)) { ?>
        <tr>
          <td><?php echo h($item['id']); ?></td>
          <td><?php echo h($item['name']); ?></td>
          <td><?php echo $item['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?php echo h($item['gender']); ?></td>
    	    <td><?php echo h($item['type']); ?></td>
    	    <td><?php echo h($item['color']); ?></td>
    	    <td><?php echo h($item['price']); ?></td>
          <td><a class="action" href="<?php echo url_for('/clothing/inventory/show.php?id=' . h(u($item['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/clothing/inventory/edit.php?id=' . h(u($item['id']))); ?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <?php
    mysqli_free_result($inventory_set);
    ?>

  </div>

</div>

<?php include(SHARED_PATH . '/clothing_footer.php'); ?>
