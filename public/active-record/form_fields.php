<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if (!isset($bird)) {
  redirect_to(url_for('/active-record/index.php'));
}
?>

<dl>
  <dt>Name</dt>
  <dd><input type="text" name="common_name" value="<?php echo h($bird->common_name); ?>"></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="habitat" value="<?php echo h($bird->habitat); ?>"></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="food" value="<?php echo h($bird->food); ?>"></dd>
</dl>

<dl>
  <dt>Conservation</dt>
  <dd><input type="text" name="conservation" value="<?php echo h($bird->conservation); ?>"></dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><input type="text" name="backyard_tips" value="<?php echo h($bird->backyard_tips); ?>"></dd>
</dl>