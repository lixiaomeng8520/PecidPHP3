<?php 
namespace PecidPHP\Controller;

class HomeController extends BaseController {

    public function index($request, $response) {
        // var_dump($request);
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
        
        // $validator = $this->container->get('validator');

        // $userValidator = V::attribute('name', v::stringType()->length(1,32))
        //           ->attribute('birthdate', v::date()->age(18));

        // var_dump($validator['number']()->validate('2.2'));

        // phpinfo();
        // ini_set('mssql.textlimit', '2147483647');
        // ini_set('mssql.textsize', '2147483647');
        // ini_set('mssql.charset', 'UTF-8');
// header('Content-type:text/html;charset=gbk');
        // $sqlserver = $this->container->get('sqlserver');
        // $res = $sqlserver->fetchAll('select docpuburl, docsource from wcmdocument where docid=1635733');
        // $config = $this->container->get('settings')['sqlserver'];
        // $this->pdo = new \PDO('dblib:host='.$config['host'].';dbname=TRSWCM', $config['user'], $config['pass']);

        // var_dump($res);

        // $sourceid = $res[0]['docsource'];
        // $res = $sqlserver->fetchAll('select srcname from wcmsource where sourceid='.$sourceid);
        // var_dump(iconv('gbk', 'utf-8', $res[0]['srcname']));

        // $res = $sqlserver->fetchAll('SELECT  COLLATIONPROPERTY(\'Chinese_PRC_Stroke_CI_AI_KS_WS\', \'CodePage\')');
        // var_dump($res);

        
        
        return $response;
    }

}
