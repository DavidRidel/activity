<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller
{

    /**
     * @Route("/lucky", name="lucky_index")
     */
    public function indexAction()
    {

        return new Response(
            'hey'
        );
    }

    /**
     * @Route("/lucky/number", name="lucky_number")
     */
    public function numberAction()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

}
