<?php
/**
 * Created by PhpStorm.
 * User: alexandremoreau
 * Date: 13/10/2018
 * Time: 15:37
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EngineController extends AbstractController
{

    /**
     * @Route("/engine/number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('engine/number.html.twig', [
            'number' => $number,
        ]);
    }
}