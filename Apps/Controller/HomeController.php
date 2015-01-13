<?php

namespace Apps\Controller;

use Apps\Core\Response;
use Apps\Core\Template;

class HomeController {

    public function indexAction(){
        $content = Response::loadView('home', false, true);
        Template::load('base',$content);
    }
}
