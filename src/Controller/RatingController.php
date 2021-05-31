<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Repository\ClientRepository;
use App\Repository\CommentaireRepository;
use App\Repository\MaisonRepository;
use App\Repository\RatingRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class RatingController extends AbstractController
{
    private $ratingRepository ;

    public function __construct(
        RatingRepository $ratingRepository
    )
    {
        $this->ratingRepository = $ratingRepository;
    }

    /**
     * @Route("/api/ratings/{idMaison}/maison", name="rating_by_maison", methods={"GET"})
     */
    public function getRatingByIdMaison($idMaison)
    {

        $rating = $this->ratingRepository->findBy(['maison'=>$idMaison]);
        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($rating, 'json');
        return new Response($reports);
    }
    
}
