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
<body data-target=".bs-docs-sidebar" data-spy="scroll" data-twttr-rendered="true">
       <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?php echo HTML::anchor(URL::site('admin'), "Dzen", array("class" => "brand")); ?>
                <div class="nav-collapse">
                    <ul class="nav">
                        <?php foreach ($_controllers as $title => $url): ?>
                            <?php if (is_array($url)): // submenu ?>
                            <li class="dropdown<?php if (in_array($_controller, $url)): ?> sub-active<?php endif; ?>">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $title ?><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($url as $subTitle => $subUrl): ?>
                                        <li<?php if ($subUrl == $_controller): ?> class="active"<?php endif; ?>>
                                            <?php echo HTML::anchor(URL::site('admin/' . $subUrl), $subTitle); ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                            <?php else: ?>
                            <?php if ($url != "index"): ?>
                            <li <?php if ($url == $_controller): ?>class="active"<?php endif; ?>>
                                <?php echo HTML::anchor(URL::site('admin/' . $url), $title); ?>
                            </li>
                            <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <ul class="nav pull-right">
                        <li class="divider-vertical"></li>
                        <li><?php echo HTML::anchor(URL::base(), 'Открыть сайт', array('target' => '_blank')); ?></li>
                        <li><?php echo HTML::anchor(URL::site('admin/logout'), 'Выход'); ?></li>
                        <li class="divider-vertical"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
            if(Helper_Message::count() > 0) {
                echo Helper_Message::output();
            }
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