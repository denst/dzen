<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=(isset($description))? $description: ''?>">
    <meta name="keywords" content="<?=(isset($keywords))? $keywords: ''?>">
    <meta name="author" content="">

    <title>Dzen.Co | Технологии успеха</title>

    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  </head>

  <body>
    <?php ProfilerToolbar::render(true); ?>

    <div class="container">
        <div class="header">
        <? if(Session::instance()->get('top_menu')):?>
          <ul class="nav nav-pills pull-right">
            <li><a href="#">Информация о спонсоре</a></li>
            <li><a href="#">Расписание мероприятий</a></li>
            <li><a href="#">Люди о проекте</a></li>
          </ul>
        <? endif?>
          <h3 class="text-ed"><a href="/">Технологии успеха</a></h3>
        </div>

      <div class="jumbotron">
        <?php
            if(Helper_Message::count() > 0) {
                echo Helper_Message::output();
            }
            if(isset($content) AND is_object($content)){
                echo $content; 
            }
        ?>
      </div>

      

      <div class="footer">
        <p>&copy; Dzen.Co 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>

<script language="javascript"> 
    $('.jumbotron').hide().fadeIn('slow');
    $("#phone").inputmask("mask", {"mask": "+9 (999) 999-99-99"}); //specifying fn & options
</script>
  </body>
</html>
