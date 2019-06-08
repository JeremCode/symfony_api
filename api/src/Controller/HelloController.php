<?php

// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HelloController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
      return $this->render('general/accueil.html.twig',['environnement' => $_SERVER['APP_ENV']] );
    }

    /**
   * @Route("/article/{id}")
   */
    public function showBlogPost($id = 1)
    {
      $response = new Response();
      $response->setContent(
          '<html>
          <body> Hello coucou '.$id.'
          </body></html>');
      $response->setStatusCode(Response::HTTP_OK);
      $response->headers->set('Content-Type', 'text/html');

// Retourne une réponse HTTP valide
      return $response;
    }

    /**
   * @Route("/identification/")
   */
    public function identification()
    {
      return $this->render('general/accueil2.php.twig',['environnement' => $_SERVER['APP_ENV'] ]);
    }

    /**
   * @Route("/compteur")
   */
    public function compteur()
    {
            $varempl = getcwd();
        return $this->render('general/compteur.php.twig',['environnement' => $_SERVER['APP_ENV'] ,'varempl' => $varempl ]);
    }

}
