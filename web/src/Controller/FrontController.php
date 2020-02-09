<?php
/**
 * Created by PhpStorm.
 * User: alexandremoreau
 * Date: 13/10/2018
 * Time: 15:37
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FrontController extends AbstractController
{

    /**
     * @Route("/front/homepage" name="app_index")
     */
    public function homePage() {

        $informations = [
            'title' => 'Bienvenue chez Alexandre',
            'autre' => 'Autre',
            'test'  => [
                'infos' => 'Bonjour'
            ]
        ];

        return $this->render('front/homepage.html.twig', $informations);
    }

    /**
     * @Route("/front/works")
     */
    public function works() {

        return $this->render('front/works.html.twig');
    }
}