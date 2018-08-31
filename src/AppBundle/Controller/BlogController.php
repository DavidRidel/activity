<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\BrowserKit\Response;

/**
 *
 * @Route (name="blog_")
 *
 */

class BlogController extends Controller
{
    /**
     * @Route("/blog/{page}", name="list", requirements={"page"="\d+"})
     */
    public function listAction($page = 1)
    {
        // ...
    }

    /**
     * @Route("/blog/{slug}", name="show")
     */
    public function showAction($slug)
    {
        // ...
    }


}
