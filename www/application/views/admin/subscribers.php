<div class="page-header">
    <h2>Подписчики</h2>
</div>
<div class="row">
    <div class="span12">   
        <table class="table table-striped" id="list">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Skype</th>
                <th>Телефон</th>
                <th>Спонсор</th>
                <th>Удобное время</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            <? foreach($subscribers as $subscriber): ?>
            <tr>
                <td><?=$subscriber->name; ?></td>
                <td><?=$subscriber->email; ?></td>
                <td><?=$subscriber->skype; ?></td>
                <td><?=$subscriber->phone; ?></td>
                <td><?=$subscriber->sponsor; ?></td>
                <td>
                    <? if(Valid::not_empty($subscriber->schedule)):?>
                        <?=$subscriber->schedule?>
                    <? else:?>
                        -
                    <? endif?>
                </td>
                <td><a data-toggle="modal" id="<?=$subscriber->id?>" class="btn btn-danger btn-delete-subscriber" 
                       href="#deleteSubscriber">Удалить</a></td>
            </tr>
            <? endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal hide" id="deleteSubscriber">
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">✕</button>
      <h3>Вы уверены, что хотите удалить подписчика?</h3>
  </div>
  <div class="modal-body" style="text-align:center;">
      <div class="row-fluid">
          <div class="span10 offset1">
              <div id="modalTab">
                  <div class="tab-content">
                      <div class="tab-pane active" id="login">
                          <form method="post" action="/admin/subscribers/delete" name="completed-form">
                              <p>
                                  <input type="hidden" name="delete_subscriber_id" value="">
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