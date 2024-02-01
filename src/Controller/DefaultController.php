<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
    */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/api/items", name="items")
    */
    public function getItems()
    {
        $items = [
            [
                'id' => 1,
                'name' => 'Fraise',
                'price' => '3€/Kg'
            ],
            [
                'id' => 2,
                'name' => 'Banane',
                'price' => '4€/Kg'
            ],
            [
                'id' => 3,
                'name' => 'Orange',
                'price' => '5€/Kg'
            ],
            [
                'id' => 4,
                'name' => 'Raisin',
                'price' => '6€/Kg'
            ]
        ];
    
        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($items));
        
        return $this->render('index.html.twig');
    }
}
