<?php
/**
 * @copyright   Copyright (C) 2005 - 2015 Happy Dog Web Productions. All rights reserved.
 */

defined('_JEXEC') or die;
include_once JPATH_THEMES . '/' . $this->template . '/logic.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <jdoc:include type="head" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <jdoc:include type="modules" name="menu" style="none" />
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <?php if ($this->countModules('header')) : ?>
        <header>
            <jdoc:include type="modules" name="header" style="none" />
        </header>
    <?php endif; ?>
    <jdoc:include type="modules" name="content-top" style="html5" />

    <section class="<?php echo $pageClass; ?>" id="<?php echo $view; ?>">
        <div class="container">
           <jdoc:include type="message" />
           <jdoc:include type="component" /> 
        </div>
    </section>

    <jdoc:include type="modules" name="content-bottom" style="html5" />

    <!-- Plugin JavaScript -->
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.fittext.js"></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/creative.js"></script>

</body>

</html>