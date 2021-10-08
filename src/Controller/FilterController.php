<?php

namespace App\Controller;

use App\Repository\FrameworkRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FilterController extends AbstractController
{
    /**
     * @Route("/byFramework/{id}",name="filter_byFramework")
     */
public function byFramework(FrameworkRepository $frameworkRepository, UserRepository $userRepository,$id)
{
    $developpeurs=$userRepository->findWithFilter($id);
    $devEnBase=$userRepository->findAll();
    $frameworks=$frameworkRepository->findAll();
    return $this->render("main/accueil.html.twig",
    compact('developpeurs','frameworks','devEnBase')
    );
}
}