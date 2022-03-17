<?php 

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/clothing/inventory/new.php'));
}

$id = $_GET['id'];
$name = 'name';
$visible = 'visible';
$gender = 'gender';


if(is_post_request()) {
  // Handle form values sent by new.php
  
  $menu_name = $_POST['menu_name'] ?? '';
  $gender = $_POST['gender'] ?? '';
  $visible = $_POST['visible'] ?? '';
  
  echo "Form parameters<br />";
  echo "Menu name: " . $menu_name . "<br />";
  echo "gender: " . $gender . "<br />";
  echo "Visible: " . $visible . "<br />";
  } 
?>

<?php $page_title = 'Edit Item'; ?>
<?php include(SHARED_PATH . '/clothing_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/clothing/inventory/index.php'); ?>">&laquo; Back to List</a>

  <div class="Edit item">
    <h1>Edit Item</h1>

    <form action="<?php echo url_for('/clothing/inventory/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>" /></dd>
      </dl>
      <dl>
        <dt>gender</dt>
        <dd>
          <select name="gender">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Item" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/clothing_footer.php'); ?>

