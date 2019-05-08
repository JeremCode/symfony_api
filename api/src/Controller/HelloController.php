<?php

// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HelloController extends AbstractController
{
    /**
     * @Route("/machin/{nom}")
     */
    public function home($nom)
    {

      return $this->render('general/accueil.html.twig',['environnement' => $_SERVER['APP_ENV'] , 'info' => $nom]);

      /*$response = new Response();
      $response->setContent(
          '<html>
          <body> Page d\'accueil de l\'environnement '.$_SERVER['APP_ENV'].'

          </body></html>');
      $response->setStatusCode(Response::HTTP_OK);
      $response->headers->set('Content-Type', 'text/html');

      // Retourne une réponse HTTP valide
      return $response;
      */
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
   * @Route("/identification")
   */
    public function identification()
    {
      $response = new Response();
      $response->setContent(
          '<html>
          <body> Hello coucou 
          </body></html>');
      $response->setStatusCode(Response::HTTP_OK);
      $response->headers->set('Content-Type', 'text/html');
    }

}
