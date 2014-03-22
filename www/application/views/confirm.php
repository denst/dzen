<p>
    На адрес вашей электронной почты будет выслана ссылка         с кодом доступа для вашего участия на презентации                   в системе e-conference
</p>
<form class="form-horizontal" action="/thanks" method="post">
    <input type="hidden" name="subscriber_id" value="<?=$subscriber_id?>">
    <fieldset>

        <!-- Form Name -->
      <legend>Пожалуйста, выберите удобное для вас время</legend>

      <!-- Multiple Radios -->
      <div class="control-group">
        <div class="controls">

            <? foreach ($dates as $date):?>
                <label><input type="radio" name="date" id="radios-0" value="<?=$date->date?> / <?=$date->time?>">
                    <?=$date->date?> / <?=$date->time?> МСК
                </label>
                <br>
            <? endforeach;?>
                
        </div>
      </div>

      <!-- Button  -->
      <div class="control-group">
        <div class="controls">
          <button id="submit" name="submit" class="btn btn-warning">Подтвердить</button>
        </div>
      </div>
    </fieldset>
</form>