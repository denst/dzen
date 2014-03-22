<!-- Prepended text-->
<div class="control-group <?=$error_class?>">
  <div class="controls">
        <?=Kohana_Form::input($name, $value, $attributes)?>
        <div class="help-inline error-message"><?=$error_message?></div>
  </div>
</div>