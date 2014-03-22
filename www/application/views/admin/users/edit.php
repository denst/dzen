<div class="page-header">
    <h2>Пользователь: <?php echo isset($user) ? "редактирование" : "добавление"; ?></h2>
</div>
<div class="row">
    <div class="span12">
        <form action="/admin/users/<?=isset($user)? 'edit': 'add'?>" class="form-horizontal" method="POST">
            <? if(isset($user)):?>
                <input type="hidden" name="user_id" value="<?=$user->id?>">
            <? endif;?>
            <fieldset>
    
                <?=$form->input('email', '',
                        array('class' => 'required'), null, 'admin', 'error')?>

                <?=$form->input('username', '',
                        array('class' => 'required'), 'Логин', 'admin', 'error')?>


                <?=$form->password('password', '',
                        array('type' => 'password', 'class' => 'required'), 'Пароль')?>

                <?=$form->password('password_confirm', '',
                        array('type' => 'password', 'class' => 'required'), 'Подтвердить пароль')?>

<!--                <div class="form-actions">
                   <button name="submit" type="submit" id="send" class="btn btn-primary">Сохранить</button>                
               </div>-->
                
                <div class="control-group">
                    <div class="form-actions">
                        <button type="submit" id="send" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>