<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 * class AdminController
 * @package App\controller\Admin
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/home", name="admin")
     */
    public function admin()
    {
        return $this->render(view:"admin/home.html.twig");
    }
}