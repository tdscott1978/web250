<?php 

require_once('../../../private/initialize.php');


?>

<?php $page_title = 'Create Item'; ?>
<?php include(SHARED_PATH . '/clothing_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/clothing/inventory/index.php'); ?>">&laquo; Back to List</a>

  <div class="new item">
    <h1>Create Item</h1>

    <form action="<?php echo url_for('/clothing/inventory/create.php'); ?>" method="post">
    <dl>
        <dt>id</dt>
        <dd><input type="text" name="id" value="" /></dd>
      </dl>
      <dl>
    <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value="" /></dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <dl>
        <dt>Gender</dt>
        <dd><input type="text" name="gender" value="" />
        </dd>
      </dl>
      <dl>
        <dt>type</dt>
        <dd><input type="text" name="type" value="" />
        </dd>
      </dl>
      <dl>
        <dt>Color</dt>
        <dd><input type="text" name="color" value="" />
        </dd>
      </dl>
      <dl>
        <dt>Price</dt>
        <dd><input type="decimal" name="price" value="" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Item" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/clothing_footer.php'); ?>

