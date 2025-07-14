<?php

// src/Controller/PageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/a-propos', name: 'about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route('/shops', name: 'shops')]
    public function shops(): Response
    {
        return $this->render('shops.html.twig');
    }

    #[Route('/actualites', name: 'news')]
    public function news(): Response
    {
        return $this->render('news.html.twig');
    }

    #[Route('/credits', name: 'credits')]
    public function credits(): Response
    {
        return $this->render('credits.html.twig');
    }
  
    #[Route('/shops/books', name: 'shop_books')]
    public function showBooks(): Response
    {
        return $this->render('shops/books.html.twig');
    }

    #[Route('/shops/resources', name: 'shop_resources')]
    public function showResources(): Response
    {
        return $this->render('shops/resources.html.twig');
    }
}


