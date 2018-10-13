<?php
/**
 * Created by PhpStorm.
 * User: alexandremoreau
 * Date: 13/10/2018
 * Time: 15:37
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class EngineController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}