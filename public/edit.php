<?php

require_once('../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('index.php'));
}
$id = $_GET['id'];
$bird = Bird::find_by_id($id);
if($bird == false) {
  redirect_to(url_for('index.php'));
}

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['bird'];
  $bird->merge_attributes($args);
  $result = $bird->save();

  if($result === true) {
    $_SESSION['message'] = 'The bird was updated successfully.';
    redirect_to(url_for('show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit Bird'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>


  <a href="<?php echo url_for('index.php'); ?>">&laquo; Back to List</a>

    <h1>Edit Bird</h1>

    <?php echo display_errors($bird->errors); ?>

    <form action="<?php echo url_for('edit.php?id=' . h(u($id))); ?>" method="post">
      <?php include('form_fields.php'); ?>
      <input type="submit" value="Edit Bird" />
    </form>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
