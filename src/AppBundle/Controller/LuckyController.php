<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\BrowserKit\Response;

/**
 *
 * @Route (name="lucky_")
 *
 */

class LuckyController extends Controller
{

    /**
     * @Route("/lucky", name="index")
     */
    public function indexAction()
    {

        return new Response(
            'hey'
        );
    }

    /**
     * @Route("/lucky/number/{max}", name="number")
     */
    public function numberAction($max)
    {

        if($max > 50)
            $this->createNotFoundException('La valeur du max est trop élevée');
        else
            $number = random_int(0, $max);



        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

}
