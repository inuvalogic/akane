<style type="text/css">
.sep-bottom-3x {
padding-bottom: 9.4em;
}
.sep-top-5x {
padding-top: 16em;
}
.error-404 {
background-color: #eee;
}
.error-404:before {
    content: "404";
    color: rgba(0,0,0,.04);
    font-size: 650px;
    font-weight: 700;
    left: -150px;
    position: absolute;
    top: -300px;
    -webkit-transform: rotate(-30deg);
    transform: rotate(-30deg);
    z-index: 0;
}
.upper {
    text-transform: uppercase;
}
</style>
<div class="sep-top-5x sep-bottom-3x error-404">
    <div class="container">
        <div class="sep-bottom-lg">
            <div class="text-center">
                <h3 class="upper"><small>error 404</small></h3>
                <h1 class="upper">Page not found</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-push-3 text-center">
                <p class="lead">The page you were looking for cannot be found.</p><a href="<?php echo __SITEURL__ ?>" class="btn btn-primary btn-block btn-lg"><i class="fa fa-home"></i> go back to home page</a>                
            </div>
        </div>
    </div>
</div>