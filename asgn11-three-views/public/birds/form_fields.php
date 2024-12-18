<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object

/*
  public $id;
  public $common_name;
  public $habitat;
  public $food;
  public $conservation_id;
  public $backyard_tips;
*/

if (!isset($bird)) {
  redirect_to(url_for('/index.php'));
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
  <dd><input type="text" name="bird[food]" value="<?php echo h($bird->food); ?>" /></dd>
</dl>

<dl>
  <dt>Conservation Level</dt>
  <dd>
    <select name="bird[conservation_id]">
      <option value=""></option>
      <?php foreach (Bird::CONSERVATION_OPTIONS as $conservation_id) { ?>
        <option value="<?php echo $conservation_id; ?>" <?php if ($bird->conservation_id == $conservation_id) {
                                                          echo 'selected';
                                                        } ?>><?php echo $conservation_id; ?></option>
      <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><input type="text" name="bird[backyard_tips]" value="<?php echo h($bird->backyard_tips); ?>" /></dd>
</dl>