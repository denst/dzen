<form class="form-horizontal" action="/signup" method="post">
    <input type="hidden" name="signup">
    <fieldset>
        
    <!-- Form Name -->
    <?=$form->input('name', '',
                array('class' => 'required', 'placeholder' => 'Имя'))?>
    
    <?=$form->input('email', '',
                array('class' => 'required', 'placeholder' => 'email'))?>
    
    <?=$form->input('skype', '',
                array('class' => 'required', 'placeholder' => 'Skype'))?>
    
    <?=$form->input('phone', '',
                array('id' => 'phone', 'class' => 'required', 'placeholder' => 'Телефон'))?>
    
    <?=$form->input('sponsor', '',
                array('class' => 'required', 'placeholder' => 'Имя спонсора'))?>

    <div class="control-group">
        <div class="controls">
            <button type="submit" id="send" class="btn btn-warning">Продолжить</button>
        </div>
    </div>

    </fieldset>
</form>