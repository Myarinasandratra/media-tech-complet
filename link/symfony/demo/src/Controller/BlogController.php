<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
      public function index(): Response
    {
         return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
         ]);
    }
    #[Route('/myarinasandratra', name: 'liaison')]
    public function liaison (){
      return $this->render ('blog/liaison.html.twig'

      );

    }
    #[Route('/cv', name: 'moncv')]
    public function profil (){
      return $this->render ('blog/cv.html.twig'

      );

    }


                                             
  }

