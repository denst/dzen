<div class="page-header">
    <h2>Настройка</h2>
</div>
<div class="row">
    <div class="span12">
        <form action="/admin/settings" class="form-horizontal" method="POST">
            <fieldset>
    
                <?=$form->input('youtube_video_id', '',
                        array('class' => 'required'), 'Youtube видео', 'admin', 'error')?>
                
                <?=$form->input('admin_email', '',
                        array('class' => 'required'), 'Admin email', 'admin', 'error')?>

                <div class="control-group">
                    <div class="form-actions">
                        <button type="submit" id="send" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>