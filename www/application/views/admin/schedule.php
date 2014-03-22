<div class="page-header">
    <h2>Расписание</h2>
</div>
<div class="well">
    <form action="/admin/schedule/add" method="post">
            <div id="datetimepicker1" class="datetimepicker input-append date">
                <input class="required" data-format="dd.MM.yyyy / hh:mm" type="text" 
                       name="datetime" value="<?=date('d.m.Y / h:m')?>">
              <span class="add-on">
                <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                </i>
              </span>
              <button id="send" class="btn btn-primary">Добавить</button>
              <span class="help-inline error-message"></span>
            </div>
    </form>
</div>
<div>
    <table class="table">
        <thead>
        <tr>
            <th>Дата</th>
            <th>Время</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($dates as $date):?>
            <tr>
                <td><?=$date->date?></td>
                <td><?=$date->time?></td>
                <td><a data-toggle="modal" id="<?php echo $date->id?>" class="btn btn-danger btn-delete-date" 
                       href="#deleteDate">Удалить</a></td>
            </tr>
        <? endforeach;?>
        <tr>
        </tbody>
    </table>
</div>
<!--<div><button class="btn-small btn-warning">&#8743;</button></div>
                <div><button class="btn-small btn-warning">&#8744;</button></div>-->
<!--<table>
<tr>
<td id="1"> Первая строка</td>
</tr>
<tr>
<td id="2"> Вторая строка</td>
</tr>
<tr>
<td id="3"> Третья строка</td>
</tr>
<tr>
<td id="4"> Четвертая строка</td>
</tr>
</table>
<button onclick="$('#4').parent().after($('#3').parent())"> 4&gt;3 </button>
<button onclick="$('#4').parent().before($('#3').parent())"> 3&gt;4 </button>
-->

<div class="modal hide" id="deleteDate">
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">✕</button>
      <h3>Вы уверены, что хотите удалить дату?</h3>
  </div>
  <div class="modal-body" style="text-align:center;">
      <div class="row-fluid">
          <div class="span10 offset1">
              <div id="modalTab">
                  <div class="tab-content">
                      <div class="tab-pane active" id="login">
                          <form method="post" action="/admin/schedule/delete" name="completed-form">
                              <p>
                                  <input type="hidden" name="delete_date_id" value="">
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