<?php require_once('../../private/initialize.php'); ?>

<?php

// Find all bicycles;
$birds = Bird::find_all();

?>
<?php $page_title = 'Birds'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="birds listing">
    <h1>Birds</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/active-record/new.php'); ?>">Add Bird</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Price</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach ($birds as $bird) { ?>
        <tr>
          <td><?php echo h($bird->id); ?></td>
          <td><?php echo h($bird->brand); ?></td>
          <td><?php echo h($bird->model); ?></td>
          <td><?php echo h($bird->year); ?></td>
          <td><?php echo h($bird->category); ?></td>
          <td><?php echo h($bird->gender); ?></td>
          <td><?php echo h($bird->color); ?></td>
          <td><?php echo h($bird->price); ?></td>
          <td><a class="action" href="<?php echo url_for('/active-record/show.php?id=' . h(u($bird->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/active-record/edit.php?id=' . h(u($bird->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/active-record/delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
        </tr>
      <?php } ?>
    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>