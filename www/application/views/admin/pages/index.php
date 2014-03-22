<div class="page-header">
    <h2>Страницы</h2>
</div>
<div class="row">
    <div class="span12">   
        <div class="btn-toolbar">
            <?php echo HTML::anchor(URL::site("admin/pages/add"), "Добавить", array("class" => "btn btn-primary")); ?>
        </div>
        <table class="table table-striped" id="list">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>URL</th>
                <th style="width: 250px;">Действия</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($pages as $page): ?>
            <tr>
                <td><b><?php echo $page->id; ?></b></td>
                <td><?php echo $page->title; ?></td>
                <td><?php echo URL::site() . $page->url; ?></td>
                <td>
                    <?php echo HTML::anchor(URL::site("admin/pages/edit/{$page->id}"), "Редактировать", array("class" => "btn btn-warning")); ?>
                    <a data-toggle="modal" id="<?=$page->id?>" class="btn btn-danger btn-delete-page" 
                       href="#deletePage">Удалить</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal hide" id="deletePage">
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">✕</button>
      <h3>Вы уверены, что хотите удалить страницу?</h3>
  </div>
  <div class="modal-body" style="text-align:center;">
      <div class="row-fluid">
          <div class="span10 offset1">
              <div id="modalTab">
                  <div class="tab-content">
                      <div class="tab-pane active" id="login">
                          <form method="post" action="/admin/pages/delete" name="completed-form">
                              <p>
                                  <input type="hidden" name="delete_page_id" value="">
                                  <button type="submit" class="btn btn-primary">Да</button>
                                  <button class="btn btn-primaryclose" data-dismiss="modal">Нет</button>
                              </p>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>