<?php
$link = '';
$currentpage = Apps\Core\Router::$current;
if (!empty($currentpage)){
    $link = __SITEURL__;
}
?>
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="<?php echo __SITEURL__ ?>"><span class="sitelogo"></span></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
                        <li><a class="page-scroll" href="<?php echo $link; ?>#about">About</a></li>
                        <li><a class="page-scroll" href="<?php echo $link; ?>#contact">Contact</a></li>
                        <li><a href="<?php echo __SITEURL__ ?>portfolio">Portfolio</a></li>
                    </ul>
                    <ul class="nav navbar-nav small pull-right">
                        <li><a href="<?php echo __SITEURL__ ?>"><span class="flag-icon flag-icon-en"></span> English</a></li>
                        <li><a href="<?php echo __SITEURL__ ?>"><span class="flag-icon flag-icon-id"></span> Indonesia</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>