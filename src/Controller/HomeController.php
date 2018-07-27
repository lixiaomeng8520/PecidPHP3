<?php 
namespace PecidPHP\Controller;

class HomeController extends BaseController {

    public function index() {
        echo date('Y-m-d H:i:s', time());
        $session = $this->container->get('session');
        var_dump($session->get('userid'));
        // $session->set('userid', 1);
    }

}
