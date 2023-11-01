<dl>
  <dt>Conservation</dt>
  <dd>
    <select name="bird[conservation_id]">
      <option value=""></option>
    <?php foreach(Bird::CONSERVATION_OPTIONS as $conservation_id => $conservation_level) { ?>
      <option value="<?php echo $conservation_id; ?>" <?php if($bird->conservation_id == $conservation_id) { echo 'selected'; } ?>><?php echo $conservation_level; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

