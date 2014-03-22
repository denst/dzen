<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<div class="page-header">
    <h2>Страницы: <?php echo isset($page['id']) ? "редактирование" : "добавление"; ?></h2>
</div>
<div class="row">
    <div class="span12">

        <form action="/admin/pages/<?=isset($page['id']) ? "edit" : "add"; ?>" class="form-horizontal" method="POST">
            <fieldset>
                <? if(isset($page['id'])):?>
                    <input type="hidden" name="page_id" value="<?=$page['id']?>">
                <? endif?>
                <legend></legend>
                <?=$form->input('name', '',
                            array('class' => 'span4 required'), 'Название', 'admin', 'error')?>
                
                <?=$form->input('title', '',
                            array('class' => 'span4 required'), 'Title', 'admin', 'error')?>
                
                <?=$form->input('url', '',
                            array('class' => 'span2 required'), 'URL', 'url', 'error')?>
                
                <div class="controls">
                    <!--<textarea name="text" rows="10" class="span12" style="height:300px;"></textarea>-->                  
                    <textarea style="height: 300px;" name="text" id="editor1" class="span12">
                        <?=(isset($page['text'])? $page['text']: '')?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
                
                <div>
                    <div class="control-group">
                        <div class="controls">
                            <a href="javascript:void(0)" onclick="$('#seo').show();">Поисковая оптимизация</a>
                        </div>
                    </div>
                    <div id="seo" style="display: none;">
                        <div class="control-group">
                            <label class="control-label" for="keywords">Ключевые слова</label>      
                            <div class="controls">
                                <textarea name="keywords" cols="5" rows="3" class="span6"><?=(isset($page['keywords'])? $page['keywords']: '')?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="description">Описание</label>                  
                            <div class="controls">
                                <textarea name="description" cols="5" rows="3" class="span6"><?=(isset($page['description'])? $page['description']: '')?></textarea> 
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="form-actions">
                        <button type="submit" id="send" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </fieldset>
        </form>

    </div>
</div>
