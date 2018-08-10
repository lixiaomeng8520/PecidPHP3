<?php 
namespace PecidPHP\Controller;

class HomeController extends BaseController {

    public function index() {
        // $db = $this->container->get('db');
        // $res = $db->fetchAll('select * from users');
        // var_dump($res);die;

        // $segment = $this->container->get('segment');
        // $segment->set('foo', 'bar');

        // var_dump($_SESSION);
        // echo 1;
        // $logger = $this->container->get('logger');
        // $logger->addInfo('nihao');
        // echo 2;
        
        $validator = $this->container->get('validator');

        $userValidator = V::attribute('name', v::stringType()->length(1,32))
                  ->attribute('birthdate', v::date()->age(18));

        var_dump($validator['number']()->validate('2.2'));
    }

}
