<?php require_once('../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$bird = Bird::find_by_id($id);

?>

<?php $page_title = 'Show Bird: ' . h($bird->name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/active-record/index.php'); ?>">&laquo; Back to List</a>

  <div class="bird show">

    <h1>Bird: <?php echo h($bird->name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Brand</dt>
        <dd><?php echo h($bird->brand); ?></dd>
      </dl>
      <dl>
        <dt>Model</dt>
        <dd><?php echo h($bird->model); ?></dd>
      </dl>
      <dl>
        <dt>Year</dt>
        <dd><?php echo h($bird->year); ?></dd>
      </dl>
      <dl>
        <dt>Category</dt>
        <dd><?php echo h($bird->category); ?></dd>
      </dl>
      <dl>
        <dt>Color</dt>
        <dd><?php echo h($bird->color); ?></dd>
      </dl>
      <dl>
        <dt>Gender</dt>
        <dd><?php echo h($bird->gender); ?></dd>
      </dl>
      <dl>
        <dt>Weight</dt>
        <dd><?php echo h($bird->weight_kg()) . ' / ' . h($bird->weight_lbs()); ?></dd>
      </dl>
      <dl>
        <dt>Condition</dt>
        <dd><?php echo h($bird->condition()); ?></dd>
      </dl>
      <dl>
        <dt>Price</dt>
        <dd><?php echo h(money_format('$%i', $bird->price)); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($bird->description); ?></dd>
      </dl>
    </div>

  </div>

</div>