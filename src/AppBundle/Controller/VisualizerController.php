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
        return $this->render('site/index.html.twig');

    }

    public function addkeyAction()
    {

    }

    public function deleteAllKeys()
    {

    }
}