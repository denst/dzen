<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Dzen.Co | Технологии успеха</title>

<!-- Bootstrap core CSS -->
<link href="/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/css/jumbotron-narrow.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>

<body>
<div class="container">
  <div class="header">
    <ul class="nav nav-pills pull-right">
      <li><a href="#">Информация о спонсоре</a></li>
      <li><a href="#">Расписание мероприятий</a></li>
      <li><a href="#">Люди о проекте</a></li>
    </ul>
    <h3 class="text-ed">Технологии успеха</h3>
  </div>
  <div class="jumbotron">
  <p>
На адрес вашей электронной почты будет выслана ссылка         с кодом доступа для вашего участия на презентации                   в системе e-conference
</p>
    <form class="form-horizontal" action="thanks.php">
      <fieldset>
        
        <!-- Form Name -->
        <legend>Пожалуйста, выберите удобное для вас время
</legend>
        
        <!-- Multiple Radios -->
        <div class="control-group">
          <div class="controls">
           
              <label><input type="radio" name="radios" id="radios-0" value="Option one">
              20.08.2013 / 21:00 МСК</label>
            <br>
           
              <label><input type="radio" name="radios" id="radios-1" value="Option two">
              19.08.2013 / 18:00 МСК</label>
            <br>
            <label> <input type="radio" name="radios" id="radios-0" value="Option one">
            20.08.2013 / 21:00 МСК</label>
            
            <br>
          
              <label> <input type="radio" name="radios" id="radios-1" value="Option two">
              19.08.2013 / 18:00 МСК</label>
            <br>
             <label><input type="radio" name="radios" id="radios-0" value="Option one">
            20.08.2013 / 21:00 МСК</label>
          
            <br>
          
              <label><input type="radio" name="radios" id="radios-1" value="Option two">
              19.08.2013 / 18:00 МСК</label>
            <br>
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
  </div>
  <div class="footer">
    <p>&copy; Dzen.Co 2013</p>
  </div>
</div>
<!-- /container --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script language="javascript"> 
$('.jumbotron').hide().fadeIn('slow');

</script>
</body>
</html>
