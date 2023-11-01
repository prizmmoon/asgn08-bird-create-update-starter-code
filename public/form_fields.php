<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($bird)) {
  redirect_to(url_for('birds.php'));
}
?>

<dl>
  <dt>Common Name</dt>
  <dd><input type="text" name="bird[common_name]" value="<?php echo h($bird->common_name); ?>" /></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="bird[habitat]" value="<?php echo h($bird->habitat); ?>" /></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd>
      <dd><input type="text" name="bird[food]" value="<?php echo h($bird->food); ?>" /></dd>
  </dd>
</dl>

<dl>
  <dt>Conservation Level</dt>
  <dd>
      <dd>TODO: fix this thing.</dd>
      <dd><input type="text" name="bird[conservation_id]" value="<?php echo h($bird->conservation_id); ?>" /></dd>

  </dd>
</dl>


<dl>
  <dt>Backyard Tips</dt>
  <dd>
      <dd><textarea rows="4" cols="100" name="bird[backyard_tips ]">
         <?php echo trim(h($bird->backyard_tips)); ?></textarea>
      </dd>
  </dd>
</dl>



