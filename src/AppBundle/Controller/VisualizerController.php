<?php
/**
 * Created by PhpStorm.
 * User: hacker
 * Date: 1/27/18
 * Time: 7:05 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use AppBundle\Models\MemcachedService;

class VisualizerController extends Controller
{
    /**
     * @Route("/admin/index", name="admin_index")
     */
    public function indexAction()
    {
        $data = [];

        $config = __DIR__.'/../../../app/config/memcached.yml';
        $file = file_get_contents($config,true);
        $parsed_yaml = Yaml::parse($file);

        $MemcachedService = new MemcachedService($parsed_yaml);
        print_r($MemcachedService->getMetrics());

        return $this->render('site/index.html.twig',$data);

    }

    public function addAction()
    {

    }

    public function deleteAllKeys()
    {

    }
}