<div class="container" style="margin-top:50px;">

    <div class="row">
        <div class="col-xs-12">
            <h3 class="pull-left">Our Portfolio</h3>
            <div class="dropdown pull-right">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    Filter by Category
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Website</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Desktop Apps</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mobile Apps</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
<?php
if (is_array($portfolio) && count($portfolio) > 0){
    
    foreach ($portfolio as $porto) {
        ?>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-image">
                    <img src="<?php echo __SITEURL__ ?>images/<?php echo $porto['picture']; ?>" style="width:100%;height:250px;" />
                </div>
                <div class="panel-body">
                    <h4><?php echo $porto['name']; ?> (<?php echo $porto['projectyear']; ?>)</h4>
                    <p><?php echo Apps\Model\Portfolio::getCategoryName($porto['category']); ?></p>
                    <?php
                    if ($porto['type']=='web' && !empty($porto['url'])){
                        ?><em class="pull-right"><span class="fa fa-globe"></span> <?php echo $porto['url']; ?></em><?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <div class="col-xs-12">
        <div class="alert alert-info"><span class="fa fa-info-circle"></span> No portfolio available at the moment.</div>
    </div>
    <?php
}
?>
  </div>
    
</div>
