<?php

namespace Apps\Core;

class Template {

    public static function load($theme, $body){
        $data['web_title'] = 'Wisnu-Hafid.net | Jasa Pembuatan Website | Website Developer | Website Programmer | Bandung';

        $data['menu'] = Response::loadView('section/menu', false, true);
        $data['content'] = $body;
        
        Response::loadView($theme, $data);
    }
}