<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dzen.Co | Технологии успеха</title>
    <!--begin Css styles-->
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
    <!--end Css styles-->
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Inout Adserver - ad code starts -->
</head>
<body>
    <div class="container">
        <?php
            if(isset($content) AND is_object($content)){
                $content
                        ->set('settings', (isset($settings))?$settings:'');
                echo $content; 
            }
        ?>    
    </div>
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
</body>
</html>