<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 18.06.18
 * Time: 19:13
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}