<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository;
use App\Repository\ArticleRepository;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="app_article")
     */
    public function index(): Response
    {
        
        return new Response('Hello Event');
    }
    /**
     * @Route("/article/marque", name="article_marque")
     */
    public function findMarque(ArticleRepository $articleRepository): response
    {
        $marqueSearch =  array();
        $articles=$this->$articleRepository->findAll();
        foreach($articles as $val){
            $marqueSearch = $val;
        }
        $marque=$this->$articleRepository->findByMarque($marqueSearch);
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'marque' => $marque
        ]);
    }
}
