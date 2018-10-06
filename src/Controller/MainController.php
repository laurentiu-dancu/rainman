<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package App\Controller
 */
class MainController extends Controller
{
    public function index()
    {
        return $this->render('frontpage.html.twig');
    }
}
