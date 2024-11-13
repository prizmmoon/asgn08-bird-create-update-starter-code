<?php

require_once('../../private/initialize.php');

if (!isset($_GET['id'])) {
  redirect_to(url_for('/active-record/index.php'));
}
$id = $_GET['id'];

if (is_post_request()) {

  // Save record using post parameters
  $args = [];
  $args['common_name'] = $_POST['common_name'] ?? NULL;
  $args['habitat'] = $_POST['habitat'] ?? NULL;
  $args['food'] = $_POST['food'] ?? NULL;
  $args['conservation'] = $_POST['conservation'] ?? NULL;
  $args['backyard_tips'] = $_POST['backyard_tips'] ?? NULL;

  $bird = [];

  $result = false;
  if ($result === true) {
    $_SESSION['message'] = 'The bird was updated successfully.';
    redirect_to(url_for('/staff/bird/show.php?id=' . $id));
  } else {
    // show errors
  }
} else {

  // display the form
  $bird = Bird::find_by_id($id);
  if ($bicycle == false) {
    redirect_to(url_for('/active-record/index.php'));
  }
}

?>

<?php $page_title = 'Edit Bird'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/active-record/index.php'); ?>">&laquo; Back to List</a>

  <div class="bird edit">
    <h1>Edit Bird</h1>

    <?php // echo display_errors($errors); 
    ?>

    <form action="<?php echo url_for('/active-record/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Bird" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>