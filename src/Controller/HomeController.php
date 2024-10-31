<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController {

    // I define my route / and nammed it home
    #[Route("/", name: "home")]


    //Request Foundation to get request from our page ex : name
    function index (Request $request): Response{
        
        // dd($request);
        return new Response('Bonjour ' . $request->query->get('name'));
    }



}