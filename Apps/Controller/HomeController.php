<?php

namespace Apps\Controller;

use Apps\Core\Input as Input;

class HomeController {

    public function indexAction(){
        echo '<h2>Welcome to the jungle!!</h2>';
        $input = new Input;
        $input->test();
    }
}
