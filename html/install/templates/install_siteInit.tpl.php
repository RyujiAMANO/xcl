<div style="width:500px;margin:0 auto; text-align:center;">

<div class="confirmInfo" style="text-align:center"><?php echo _INSTALL_L36?></div>
<br />
<div style="width:250px; float:right;margin-left:10px;text-align:left;">
<?php echo '<img src="'.XOOPS_URL.'/images/xc_legacy.jpg" width="232" height="222" alt="XOOPS Cube Legacy" />';
?>
</div>
<div style="width:230px;float:left;margin:0 0 24px 10px;text-align:left;">
<?php echo _INSTALL_L37?><br />
<input type="text" class="adminame" name="adminname" />
<br /><br />
<?php echo _INSTALL_L38?><br />
<input type="text" class="adminmail" name="adminmail" maxlength="60" />
<br /><br />
<?php echo _INSTALL_L39?><br />
<input type="password" class="adminpass" name="adminpass" />
<br /><br />
<?php echo _INSTALL_L74?><br />
<input type="password" class="adminpass2" name="adminpass2" />
<br /><br />
<?php if (version_compare(phpversion(), '5.3.0', '>='))  : ?>
<?php echo _INSTALL_L77 ?><br />
<select name="timezone">
  <?php $timezones = $this->v('timezones'); ?>
  <?php foreach ($this->v('timediffs') as $timediff => $text) : ?>
    <?php if ($timediff == $this->v('current_timediff')) : ?>
      <option value="<?php echo $timezones[$timediff] ?>" selected="selected"><?php echo $text ?></option>
    <?php else : ?>
      <option value="<?php echo $timezones[$timediff] ?>"><?php echo $text ?></option>
    <?php endif ?>
  <?php endforeach ?>
</select>
<?php endif ?>
</div>

</div>
