<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'New Hundreds | Form'; ?>
<?php include(SHARED_PATH . '/clothing_header.php'); ?>

<div class="main">
    <h1>New Hundreds Clothing</h1>
    <form action="submitClothes.php" method="post">
    Id: <input name="id"type="text"><br/>
    <br/>
    Name: <input name="Name"type="text"><br/>
    <br/>
    Gender: <input Name="Gender"type="text"><br/>
    <br/>
    Type:  <input name="Type"type="text"><br/>
    <br/>
    Color: <input name="Color"type="text"><br/>
    <br/>
    Price: <input name="Sale_Price" type="text"><br/>
    <br/>
    <input name="Submit1" type="submit" value="submit"/><br/>
    </form>
</div>

<?php include(SHARED_PATH . '/clothing_footer.php'); ?>