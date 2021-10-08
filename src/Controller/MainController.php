<?php

namespace App\Controller;


use App\Repository\FrameworkRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    /**
     * @Route("/",name="main_home")
     */
    public function home(UserRepository $ur)
    {
        $developpeurs=$ur->findAll();
        return $this->render("main/home.html.twig",
        compact("developpeurs"));
    }
    /**
     * @Route("/accueil",name="main_accueil")
     */
    public function accueil(UserRepository $userRepository, FrameworkRepository $frameworkRepository)
    {
        $devEnBase=$userRepository->findAll();
      $developpeurs=$userRepository->findAll();
      $frameworks=$frameworkRepository->findAll();
      return $this->render("main/accueil.html.twig",
      compact('developpeurs','frameworks','devEnBase')
      );
    }
}