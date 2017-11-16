<?php

namespace Nod4\RpsAdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="admin_homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => 'andrey');
    }


}
