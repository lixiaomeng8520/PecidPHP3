<?php 
namespace PecidPHP\Controller;

class HomeController extends BaseController {

    public function index() {
        $db = $this->container->get('db');
        $res = $db->fetchAll('select * from users');
        var_dump($res);die;
    }

}
