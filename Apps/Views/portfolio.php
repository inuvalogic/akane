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
            <div class="panel panel-default outline-outward">
                <div class="panel-image">
                    <img src="/images/coding.jpg" style="width:100%;" />
                </div>
                <div class="panel-body">
                    <h4><?php echo $porto-></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
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
