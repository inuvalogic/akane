<?php

namespace Apps\Controller;

use Apps\Core\Response;
use Apps\Core\Template;

class PageController {
    
    public function notfoundAction(){
        $data['page_title'] = 'About us';
        $data['page_content'] = 'About us content here';
        
        $content = Response::loadView('404', $data, true);
        
        Template::load('base',$content);
    }

    public function portfolioAction(){
        
        $data['portfolio'] = '';

        $content = Response::loadView('portfolio', $data, true);

        Template::load('base',$content);
    }

}
